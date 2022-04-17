<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Estates\StoreRequest;
use App\Models\Estate\Category;
use App\Models\Estate\Estate;
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

        return view('admin.estates.create', compact('estatesCategories'));
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $data = array_merge($validated, ValidateDataFilter::removeDataNamespace($request->input($request->type)));
        unset($data[$request->type]);

        $files = json_decode($request->filesInJson);

        $estate = Estate::create($data);
        if (!$estate) {
            return redirect()->back()->with('error', 'Не удалось добавить объект недвижимости');
        }

        if ($files) {
            foreach ($files as $key => $file) {
                $fileCopy  = $file;
                $imageData = substr($fileCopy, 1+strrpos($fileCopy, ','));

                $estateType = "";
                switch ($request->type) {
                    case Estate::TYPES['flat']: {
                        $estateType = 'flats';
                    }
                }

                $path = 'uploads/estates/' . "$estateType/" . $estate->id . '/' . uniqid() . '.';
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
        //
    }

    public function edit($id)
    {
        $estate = Estate::with(['category', 'photos' => function($q) {
            $q->orderBy('sort', 'asc');
        }])->find($id);
        if (!$estate) {
            return redirect()->back()->with('error', 'Не удалось найти объект недвижимости с указанным ID');
        }

        $estatesCategories = Category::select('id', 'name')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.estates.edit', compact('estate', 'estatesCategories'));
    }

    public function update(StoreRequest $request, $id)
    {
        $estate = Estate::find($id);
        if (!$estate) {
            return redirect()->back()->with('Не удалось найти объект недвижимости по указанному id');
        }
        $estate->update($request->validated());

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
