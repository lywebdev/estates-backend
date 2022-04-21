<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\FloorCovering;
use Illuminate\Http\Request;

class FloorCoveringController extends Controller
{
    public function index()
    {
        $floorCoverings = FloorCovering::all();

        return view('admin.estates.options.floor-coverings.index', compact('floorCoverings'));
    }

    public function create()
    {
        return view('admin.estates.options.floor-coverings.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newFloorCovering = FloorCovering::create($data);
        if (!$newFloorCovering) {
            return redirect()->back()->with('error', 'Не удалось добавить вариант покрытия пола');
        }

        return redirect()->route('admin.estates.floor-coverings.index')->with('success', 'Вариант покрытия пола добавлен');
    }

    public function edit($id)
    {
        $floorCovering = FloorCovering::find($id);

        return view('admin.estates.options.floor-coverings.edit', compact('floorCovering'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $floorCovering = FloorCovering::find($id);
        $floorCovering->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        FloorCovering::destroy($id);
        return redirect()->route('admin.estates.floor-coverings.index')->with('success', 'Вариант покрытия пола удалён');
    }
}
