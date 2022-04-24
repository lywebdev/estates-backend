<?php

namespace App\Http\Controllers\Admin\API\Estate;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Estate\Estate;
use App\Models\Estate\Photo;
use App\Services\MediaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $photo = Photo::where('id', $id)->first();
        if (!$photo) {
            return $this->sendError('Photo not found.');
        }
        $photo->delete();
        MediaService::imageRemove($photo->path);

        return $this->sendResponse([], 'Successful.');
    }


    public function changeSort(Request $request)
    {
        $itemsArray = $request->items;
        DB::beginTransaction();
        foreach ($itemsArray as $item) {
            try {
                Photo::where('id', $item['photoId'])->update(['sort' => $item['sort']]);
            } catch (\Exception $exception) {
                return $this->sendError('An error occurred while updating the sort order.');
            }
        }
        DB::commit();

        return $this->sendResponse([], 'Successful.');
    }

    public function upload(Request $request)
    {
        dd($request->image);
    }
}
