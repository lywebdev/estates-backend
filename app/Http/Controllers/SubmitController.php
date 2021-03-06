<?php

namespace App\Http\Controllers;

use App\Http\Requests\Estates\SubmitStoreRequest;
use App\Models\City;
use App\Models\District;
use App\Models\Estate\Bathroom;
use App\Models\Estate\Condition;
use App\Models\Estate\Estate;
use App\Models\Estate\Purpose;
use App\Models\Estate\Sewage;
use App\Models\Estate\WallMaterial;
use App\Models\User;
use App\Services\MediaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmitController extends Controller
{
    public function submitForm($category, Request $request)
    {
        $esCategoryExists = array_key_exists($category, Estate::CATEGORIES);
        if (!$esCategoryExists) {
            abort(404);
        }
        $esCategory = (object)Estate::CATEGORIES[$category];

        $data = (object)[];
        $data->districts = District::all();
        $data->conditions = Condition::all();
        $data->cities = City::all();
        $data->wall_materials = WallMaterial::all();
        $data->bathrooms = Bathroom::all();
        $data->sewages = Sewage::all();
        $data->purposes = Purpose::all();
        $data = json_encode($data);


        return view("submit.$category", compact('esCategory', 'data'));
    }


    public function submit(SubmitStoreRequest $request)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'error' => 'not_auth',
                'message' => 'Пользователь не авторизован'
            ], 401);
        }

        $data  = $request->validated();
        $files = $request->gallery;

        if (($user->isAgent() && $user->hasVerifiedEmail()) || $user->isAdmin()) {
            $data['status'] = true;
        }
        else {
            $data['status'] = false;
        }
        $data['user_id'] = $user->id;


        $newEstate = Estate::create($data);
        if (!$newEstate) {
            return response()->json(null, 400);
        }

        $this->loadImages($files, "flats", $newEstate);
        return response()->json([
            'status' => $data['status'],
        ], 201);
    }



    private function loadImages($files, $category, $estate)
    {
        if ($files) {
            if (isset($files['photos'])) {
                foreach ($files['photos'] as $key => $file) {
                    $fileCopy  = $file;
                    $imageData = substr($fileCopy, 1+strrpos($fileCopy, ','));

                    $path = 'uploads/estates/' . "$category/" . $estate->id . '/' . uniqid();
                    $format = explode('/', explode(';', $fileCopy)[0])[1];
                    $filepath = "$path.$format";
                    $file = base64_decode($imageData);

                    MediaService::imageSave($filepath, $file);
                    $estate->addPhoto($filepath, $key);
                }
            }


            if ($files['layout'] !== "false") {
                $fileCopy  = $files['layout'];
                $imageData = substr($fileCopy, 1+strrpos($fileCopy, ','));

                $path = 'uploads/estates/' . "flats/" . $estate->id . '/' . uniqid();
                $format = explode('/', explode(';', $fileCopy)[0])[1];
                $filepath = "$path.$format";
                $file = base64_decode($imageData);

                MediaService::imageSave($filepath, $file);
                $estate->setLayout($filepath);
            }
        }
    }
}
