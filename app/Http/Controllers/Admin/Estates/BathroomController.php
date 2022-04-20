<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Bathroom;
use Illuminate\Http\Request;

class BathroomController extends Controller
{
    public function index()
    {
        $bathrooms = Bathroom::all();

        return view('admin.estates.options.bathrooms.index', compact('bathrooms'));
    }

    public function create()
    {
        return view('admin.estates.options.bathrooms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newBathroom = Bathroom::create($data);
        if (!$newBathroom) {
            return redirect()->back()->with('error', 'Не удалось добавить санузел');
        }

        return redirect()->route('admin.estates.bathrooms.index')->with('success', 'Санузел добавлен');
    }

    public function edit($id)
    {
        $bathroom = Bathroom::find($id);

        return view('admin.estates.options.bathrooms.edit', compact('bathroom'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $bathroom = Bathroom::find($id);
        $bathroom->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Bathroom::destroy($id);
        return redirect()->route('admin.estates.bathrooms.index')->with('success', 'Санузел удалён');
    }
}
