<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index()
    {
        $conditions = Condition::all();

        return view('admin.estates.options.conditions.index', compact('conditions'));
    }

    public function create()
    {
        return view('admin.estates.options.conditions.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newCondition = Condition::create($data);
        if (!$newCondition) {
            return redirect()->back()->with('error', 'Не удалось добавить состояние');
        }

        return redirect()->route('admin.estates.conditions.index')->with('success', 'Состояние добавлено');
    }

    public function edit($id)
    {
        $condition = Condition::find($id);

        return view('admin.estates.options.conditions.edit', compact('condition'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $condition = Condition::find($id);
        $condition->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Condition::destroy($id);
        return redirect()->route('admin.estates.conditions.index')->with('success', 'Состояние удалено');
    }
}
