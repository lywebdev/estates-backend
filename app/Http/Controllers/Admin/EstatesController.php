<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Estates\StoreRequest;
use App\Models\Estate\Category;
use App\Models\Estate\Estate;
use Illuminate\Http\Request;

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
        $estatesCategories = Category::select('id', 'name')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.estates.create', compact('estatesCategories'));
    }

    public function store(StoreRequest $request)
    {
        $files = json_decode($request->filesInJson);
        $data  = $request->validated();

        $estate = Estate::create($data);
        if (!$estate) {
            return redirect()->back()->with('error', 'Не удалось добавить объект недвижимости');
        }

        foreach ($files as $key => $file) {
            $fileCopy  = $file;
            $imageData = substr($fileCopy, 1+strrpos($fileCopy, ','));
            $file = [
                'format' => explode('/', explode(';', $fileCopy)[0])[1],
                'body'   => base64_decode($imageData)
            ];
            $estate->addPhoto($file, $key);
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
        //
    }

    public function edit($id)
    {
        $estate = Estate::with(['category'])->find($id);
        if (!$estate) {
            return redirect()->back()->with('error', 'Не удалось найти объект недвижимости с указанным ID');
        }

        $estatesCategories = Category::select('id', 'name')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.estates.edit', compact('estate', 'estatesCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
