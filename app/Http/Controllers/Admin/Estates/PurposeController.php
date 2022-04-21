<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Purpose;
use Illuminate\Http\Request;

class PurposeController extends Controller
{
    public function index()
    {
        $purposes = Purpose::all();

        return view('admin.estates.options.purposes.index', compact('purposes'));
    }

    public function create()
    {
        return view('admin.estates.options.purposes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newPurpose = Purpose::create($data);
        if (!$newPurpose) {
            return redirect()->back()->with('error', 'Не удалось добавить цель');
        }

        return redirect()->route('admin.estates.purposes.index')->with('success', 'Цель добавлена');
    }

    public function edit($id)
    {
        $purpose = Purpose::find($id);

        return view('admin.estates.options.purposes.edit', compact('purpose'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $purpose = Purpose::find($id);
        $purpose->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Purpose::destroy($id);
        return redirect()->route('admin.estates.purposes.index')->with('success', 'Цель удалена');
    }
}
