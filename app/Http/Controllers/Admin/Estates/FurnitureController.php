<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function index()
    {
        $furnitures = Furniture::all();

        return view('admin.estates.options.furniture.index', compact('furnitures'));
    }

    public function create()
    {
        return view('admin.estates.options.furniture.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newFurniture = Furniture::create($data);
        if (!$newFurniture) {
            return redirect()->back()->with('error', 'Не удалось добавить вариант мебели');
        }

        return redirect()->route('admin.estates.furniture.index')->with('success', 'Вариант мебели добавлен');
    }

    public function edit($id)
    {
        $furniture = Furniture::find($id);

        return view('admin.estates.options.furniture.edit', compact('furniture'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $furniture = Furniture::find($id);
        $furniture->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Furniture::destroy($id);
        return redirect()->route('admin.estates.furniture.index')->with('success', 'Вариант мебели удалён');
    }
}
