<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $getRole = Role::get();
        return $getRole;
    }
    // thêm
    // sửa
    //xóa
    // thêm quyền cho nhóm quyền

}
