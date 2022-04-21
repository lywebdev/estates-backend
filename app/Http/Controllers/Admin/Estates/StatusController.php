<?php

namespace App\Http\Controllers\Admin\Estates;

use App\Http\Controllers\Controller;
use App\Models\Estate\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();

        return view('admin.estates.options.status.index', compact('statuses'));
    }

    public function create()
    {
        return view('admin.estates.options.status.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $newStatus = Status::create($data);
        if (!$newStatus) {
            return redirect()->back()->with('error', 'Не удалось добавить статус');
        }

        return redirect()->route('admin.estates.status.index')->with('success', 'Статус добавлен');
    }

    public function edit($id)
    {
        $status = Status::find($id);

        return view('admin.estates.options.status.edit', compact('status'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $status = Status::find($id);
        $status->update($data);

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        Status::destroy($id);
        return redirect()->route('admin.estates.status.index')->with('success', 'Статус удалён');
    }
}
