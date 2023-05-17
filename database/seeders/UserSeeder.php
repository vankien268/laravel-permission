<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456')
                ],[
                'name' => 'Kien Le Van 18',
                'email' => 'klv18@gmail.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Kien Le',
                'email' => 'kl18@gmail.com',
                'password' => bcrypt('123456')
            ]
        ]);
        User::find(1)->assignRole('admin');
    }
}
