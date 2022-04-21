<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index()
    {
        $parkings = Parking::all();

        return view('admin.estates.options.parking.index', compact('parkings'));
    }

    public function create()
    {
        return view('admin.estates.options.parking.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newParking = Parking::create($data);
        if (!$newParking) {
            return redirect()->back()->with('error', 'Не удалось добавить вариант парковки');
        }

        return redirect()->route('admin.estates.parking.index')->with('success', 'Вариант парковки добавлен');
    }

    public function edit($id)
    {
        $parking = Parking::find($id);

        return view('admin.estates.options.parking.edit', compact('parking'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $parking = Parking::find($id);
        $parking->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Parking::destroy($id);
        return redirect()->route('admin.estates.parking.index')->with('success', 'Вариант парковки удалён');
    }
}
