<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role_or_permission:admin|Danh sách người dùng', ['only' => ['index']]);
        $this->middleware('role_or_permission:Admin|Thêm người dùng', ['only' => ['create']]);
        $this->middleware('role_or_permission:Admin|Sửa người dùng', ['only' => ['edit']]);
        $this->middleware('role_or_permission:Admin|Xóa người dùng', ['only' => ['destroy']]);
    }

    public function index()
    {
        $users = User::get();
        $data = [
            'users' => $users
        ];
        return view('admin.users.index')->with($data);
    }
    public function edit()
    {
//        Role::create(['name' => 'admin2']);
//        $user = User::find(1);
//        $role = Role::find(1);
//        $user->syncRoles([1]);
        dd('â');
    }
    public function store()
    {
//        Role::create(['name' => 'admin2']);
//        $user = User::find(1);
//        $role = Role::find(1);
//        $user->syncRoles([1]);
        dd('â');
    }
}
