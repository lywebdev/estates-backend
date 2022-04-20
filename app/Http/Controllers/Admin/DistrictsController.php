<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Districts\StoreRequest;
use App\Models\District;
use App\Models\Estate\Estate;
use Illuminate\Http\Request;

class DistrictsController extends Controller
{
    public function index()
    {
        $districts = District::all();

        return view('admin.districts.index', compact('districts'));
    }

    public function create()
    {
        return view('admin.districts.create');
    }

    public function store(StoreRequest $request)
    {
        $newDistrict = District::create($request->validated());
        if (!$newDistrict) {
            return redirect()->back()->with('error', 'Не удалось добавить район');
        }

        return redirect()->route('admin.districts.index')->with('success', 'Район добавлен');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $district = District::find($id);

        return view('admin.districts.edit', compact('district'));
    }

    public function update(StoreRequest $request, $id)
    {
        $district = District::find($id);
        $district->update($request->validated());

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        District::destroy($id);
        return redirect()->route('admin.districts.index')->with('success', 'Район удалён');
    }
}
