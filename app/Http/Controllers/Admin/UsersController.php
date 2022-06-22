<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\user\storeRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.users.all', compact('users'));
    }

    public function create()
    {

        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }


    public function store(storeRequest $request)
    {

        $request->merge([
            'moraf'=>'Arash',
            'sheba'=>'12'
        ]);

        User::create($request->all());

        return redirect()->route('admin.users.all')->with('toast-success', 'مدیر جدید ایجاد شد');
    }
}