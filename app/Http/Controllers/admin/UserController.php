<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Scope\TestScope;

class UserController extends Controller
{
    public function index()
    {
        $model = User::withoutGlobalScope(TestScope::class)->get();

        return view('list', compact('model'));
    }

    public function getAge()
    {
        $model = User::withoutGlobalScope(TestScope::class)->where('age', '>', 20)->get();

        return view('list', compact('model'));
    }

    public function addUser()
    {
        return view('create');
    }

    public function createUser(UserRequest $request)
    {
        $model = new User();

        $model->fill($request->all());
        $model->save();

        return redirect('');
    }

    public function editUser($id)
    {
        $model = User::withoutGlobalScope(TestScope::class)->find($id);

        return view('edit', compact('model'));
    }

    public function updateUser($id, UserRequest $request)
    {
        $model = User::withoutGlobalScope(TestScope::class)->find($id);

        $model->fill($request->all());
        $model->save();

        return redirect('');
    }

    public function deleteUser($id)
    {
        $model = User::withoutGlobalScope(TestScope::class)->find($id);

        $model->delete();

        return redirect('');
    }
}
