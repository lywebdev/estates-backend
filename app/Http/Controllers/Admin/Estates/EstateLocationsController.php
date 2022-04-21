<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Location;
use Illuminate\Http\Request;

class EstateLocationsController extends Controller
{
    public function index()
    {
        $locations = Location::all();

        return view('admin.estates.options.locations.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.estates.options.locations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newLocation = Location::create($data);
        if (!$newLocation) {
            return redirect()->back()->with('error', 'Не удалось добавить локацию');
        }

        return redirect()->route('admin.estates.locations.index')->with('success', 'Локация добавлена');
    }

    public function edit($id)
    {
        $location = Location::find($id);

        return view('admin.estates.options.locations.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $location = Location::find($id);
        $location->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Location::destroy($id);
        return redirect()->route('admin.estates.locations.index')->with('success', 'Состояние удалено');
    }
}
