<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Models\User;
use App\Services\MediaService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $request->validate([
            'password' => ['required', 'min:4']
        ]);
        $data['email_verified_at'] = now();
        $data['password'] = $request->password;

        $newUser = User::create($data);
        if (!$newUser) {
            return redirect()->back()->with('error', 'Не удалось добавить пользователя');
        }

        $photo = $request->file('avatar');
        if ($photo) {
            $path = 'uploads/users/' . $newUser->id;
            $path = MediaService::imageSave($path, $photo);
            $newUser->update(['photo' => $path]);
        }


        return redirect()->route('admin.users.index')->with('success', 'Пользователь добавлен');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $rowUser = User::find($id);

        return view('admin.users.edit', compact('rowUser'));
    }

    public function update(StoreRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->validated());

        $photo = $request->file('avatar');
        if ($photo) {
            MediaService::imageRemove($user->photo);
            $path = 'uploads/users/' . $user->id;
            $path = MediaService::imageSave($path, $photo);
            $user->update(['photo' => $path]);
        }

        return redirect()->back()->with('success', 'Информация обновлена');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.users.index')->with('success', 'Пользователь удалён');
    }
}
