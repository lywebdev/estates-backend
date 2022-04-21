<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\WallMaterial;
use Illuminate\Http\Request;

class WallMaterialsController extends Controller
{
    public function index()
    {
        $wallMaterials = WallMaterial::all();

        return view('admin.estates.options.wall-material.index', compact('wallMaterials'));
    }

    public function create()
    {
        return view('admin.estates.options.wall-material.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newWallMaterial = WallMaterial::create($data);
        if (!$newWallMaterial) {
            return redirect()->back()->with('error', 'Не удалось добавить материал стен');
        }

        return redirect()->route('admin.estates.wall-material.index')->with('success', 'Материал стен добавлен');
    }

    public function edit($id)
    {
        $wallMaterial = WallMaterial::find($id);

        return view('admin.estates.options.wall-material.edit', compact('wallMaterial'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $wallMaterial = WallMaterial::find($id);
        $wallMaterial->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        WallMaterial::destroy($id);
        return redirect()->route('admin.estates.wall-material.index')->with('success', 'Материал стен удалён');
    }
}
