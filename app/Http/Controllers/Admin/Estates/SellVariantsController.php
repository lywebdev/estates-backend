<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\SellVariant;
use Illuminate\Http\Request;

class SellVariantsController extends Controller
{
    public function index()
    {
        $sellVariant = SellVariant::all();

        return view('admin.estates.options.sell-variants.index', compact('sellVariant'));
    }

    public function create()
    {
        return view('admin.estates.options.sell-variants.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newSellVariant = SellVariant::create($data);
        if (!$newSellVariant) {
            return redirect()->back()->with('error', 'Не удалось добавить вариант продажи');
        }

        return redirect()->route('admin.estates.sell-variants.index')->with('success', 'Вариант продажи добавлен');
    }

    public function edit($id)
    {
        $sellVariant = SellVariant::find($id);

        return view('admin.estates.options.sell-variants.edit', compact('sellVariant'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $sellVariant = SellVariant::find($id);
        $sellVariant->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        SellVariant::destroy($id);
        return redirect()->route('admin.estates.sell-variants.index')->with('success', 'Вариант продажи удалён');
    }
}
