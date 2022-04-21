<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Estates\StoreRequest;
use App\Models\City;
use App\Models\District;
use App\Models\Estate\Bathroom;
use App\Models\Estate\Category;
use App\Models\Estate\Condition;
use App\Models\Estate\Estate;
use App\Models\Estate\Furniture;
use App\Models\Estate\Heating;
use App\Models\Estate\Parking;
use App\Models\Estate\Purpose;
use App\Models\Estate\Sewage;
use App\Models\Estate\Status;
use App\Models\Estate\WallMaterial;
use App\Rules\Auth\ValidateDataFilter;
use App\Services\MediaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstatesController extends Controller
{
    public function index()
    {
        $estates = Estate::select('id', 'name')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.estates.index', compact('estates'));
    }

    public function create()
    {
        $estatesCategories = Estate::CATEGORIES;
        $cities = City::all();
        $districts = District::all();
        $bathrooms = Bathroom::all();
        $conditions = Condition::all();
        $furniture = Furniture::all();
        $heating = Heating::all();
        $purposes = Purpose::all();
        $sewage = Sewage::all();
        $statuses = Status::all();
        $wallMaterials = WallMaterial::all();
        $parking = Parking::all();


        return view('admin.estates.create', compact(
            'estatesCategories',
            'cities',
            'districts',
            'bathrooms',
            'conditions',
            'furniture',
            'heating',
            'purposes',
            'sewage',
            'statuses',
            'wallMaterials',
            'parking'
        ));
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $files = json_decode($request->filesInJson);

        $estate = Estate::create($validated);
        if (!$estate) {
            return redirect()->back()->with('error', 'Не удалось добавить объект недвижимости');
        }

        if ($files) {
            foreach ($files as $key => $file) {
                $fileCopy  = $file;
                $imageData = substr($fileCopy, 1+strrpos($fileCopy, ','));

                $estateCategory = "";
                switch ($request->category) {
                    case Estate::CATEGORIES['flats']['slug']: {
                        $estateCategory = 'flats';
                    }
                }

                $path = 'uploads/estates/' . "$estateCategory/" . $estate->id . '/' . uniqid() . '.';
                $format = explode('/', explode(';', $fileCopy)[0])[1];
                $filepath = "$path.$format";
                $file = base64_decode($imageData);

                MediaService::imageSave($filepath, $file);
                $estate->addPhoto($filepath, $key);
            }
        }

        return redirect()->route('admin.estates.index')->with('success', 'Объект недвижимости успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    public function edit($id)
    {
        $estate = Estate::with(['photos' => function($q) {
            $q->orderBy('sort', 'asc');
        }])->find($id);
        if (!$estate) {
            return redirect()->back()->with('error', 'Не удалось найти объект недвижимости с указанным ID');
        }
        $cities = City::all();
        $districts = District::all();
        $estatesCategories = Estate::CATEGORIES;

        return view('admin.estates.edit', compact('estate', 'estatesCategories', 'cities', 'districts'));
    }

    public function update(StoreRequest $request, $id)
    {
        $estate = Estate::find($id);
        if (!$estate) {
            return redirect()->back()->with('Не удалось найти объект недвижимости по указанному id');
        }
        $validated = $request->validated();
        $estate->update($validated);

        return redirect()->back()->with('success', 'Изменения внесены');
    }

    public function destroy($id)
    {
        $estate = Estate::find($id);
        if (!$estate) {
            return redirect()->back()->with('error', 'Не удалось найти запись по переданному id');
        }
        $estate->delete();

        return redirect()->route('admin.estates.index')->with('success', 'Объект недвижимости удалён');
    }
}
