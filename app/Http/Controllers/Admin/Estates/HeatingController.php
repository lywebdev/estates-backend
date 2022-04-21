<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Heating;
use Illuminate\Http\Request;

class HeatingController extends Controller
{
    public function index()
    {
        $heating = Heating::all();

        return view('admin.estates.options.heating.index', compact('heating'));
    }

    public function create()
    {
        return view('admin.estates.options.heating.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newHeating = Heating::create($data);
        if (!$newHeating) {
            return redirect()->back()->with('error', 'Не удалось добавить вариант отопления');
        }

        return redirect()->route('admin.estates.heating.index')->with('success', 'Вариант отопления добавлен');
    }

    public function edit($id)
    {
        $heating = Heating::find($id);

        return view('admin.estates.options.heating.edit', compact('heating'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $heating = Heating::find($id);
        $heating->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Heating::destroy($id);
        return redirect()->route('admin.estates.heating.index')->with('success', 'Вариант отопления удалён');
    }
}
