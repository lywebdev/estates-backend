<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cities\StoreRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::all();

        return view('admin.cities.index', compact('cities'));
    }
    public function create()
    {
        return view('admin.cities.create');
    }

    public function store(StoreRequest $request)
    {
        $newCity = City::create($request->validated());
        if (!$newCity) {
            return redirect()->back()->with('error', 'Не удалось добавить город');
        }

        return redirect()->route('admin.cities.index')->with('success', 'Город добавлен');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $city = City::find($id);

        return view('admin.cities.edit', compact('city'));
    }

    public function update(StoreRequest $request, $id)
    {
        $city = city::find($id);
        $city->update($request->validated());

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        City::destroy($id);
        return redirect()->route('admin.cities.index')->with('success', 'Город удалён');
    }
}
