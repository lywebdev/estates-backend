<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Sewage;
use Illuminate\Http\Request;

class SewageController extends Controller
{
    public function index()
    {
        $sewage = Sewage::all();

        return view('admin.estates.options.sewage.index', compact('sewage'));
    }

    public function create()
    {
        return view('admin.estates.options.sewage.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newSewage = Sewage::create($data);
        if (!$newSewage) {
            return redirect()->back()->with('error', 'Не удалось добавить цель');
        }

        return redirect()->route('admin.estates.sewage.index')->with('success', 'Цель добавлена');
    }

    public function edit($id)
    {
        $sewage = Sewage::find($id);

        return view('admin.estates.options.sewage.edit', compact('sewage'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $sewage = Sewage::find($id);
        $sewage->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Sewage::destroy($id);
        return redirect()->route('admin.estates.sewage.index')->with('success', 'Цель удалена');
    }
}
