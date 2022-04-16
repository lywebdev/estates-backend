<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EstatesCategories\StoreRequest;
use App\Models\Estate\Category;
use Illuminate\Http\Request;

class EstatesCategoriesController extends Controller
{
    public function index()
    {
        $esCategories = Category::all();

        return view('admin.estates-categories.index', compact('esCategories'));
    }

    public function create()
    {
        return view('admin.estates-categories.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $esCategory = Category::create($data);
        if (!$esCategory) {
            return redirect()->back()->with('error', 'Не удалось добавить категорию недвижимости');
        }

        return redirect()->route('admin.estates-categories.index')->with('success', 'Категория недвижимости добавлена');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $esCategory = Category::find($id);
        if (!$esCategory) {
            return redirect()->route('admin.estates-categories.index')->with('error', 'Не удалось найти категорию по указанному id');
        }

        return view('admin.estates-categories.edit', compact('esCategory'));
    }

    public function update(StoreRequest $request, $id)
    {
        $esCategory = Category::find($id);
        if (!$esCategory) {
            return redirect()->back()->with('Не удалось найти категорию недвижимости по указанному id');
        }
        $esCategory->update($request->validated());

        return redirect()->back()->with('success', 'Изменения внесены');
    }

    public function destroy($id)
    {
        $esCategory = Category::find($id);
        if (!$esCategory) {
            return redirect()->back()->with('error', 'Не удалось найти запись по переданному id');
        }
        $esCategory->delete();

        return redirect()->route('admin.estates-categories.index')->with('success', 'Категория удалена');
    }
}
