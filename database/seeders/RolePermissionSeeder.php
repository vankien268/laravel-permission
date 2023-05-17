<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataP = [
            [
                'name' => 'Danh sách tài khoản'
            ],
            [
                'name' => 'Thêm tài khoản'
            ],
            [
                'name' => 'Sửa tài khoản'
            ],
            [
                'name' => 'Xóa tài khoản'
            ]
        ];
        foreach ($dataP as $key => $value) {
            Permission::create($value);
        }
        $userSAdmin = User::find(1);
        $userSAdmin2= User::find(2);
        $roleSAdmin = Role::find(1);
        $roleSAdmin2 = Role::find(2);
        // thêm nhóm quyền cho user
        $userSAdmin->assignRole($roleSAdmin);
        $userSAdmin2->assignRole($roleSAdmin2);
        // gán quyền cho nhóm quyền
        $roleSAdmin->givePermissionTo($dataP);
    }
}
