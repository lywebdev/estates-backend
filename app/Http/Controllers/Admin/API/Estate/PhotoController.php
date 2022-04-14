<?php

namespace App\Http\Controllers\Admin\API\Estate;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Estate\Estate;
use App\Models\Estate\Photo;
use Illuminate\Http\Request;

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


        return $this->sendResponse([], 'Successful.');
    }
}
