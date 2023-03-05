<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role'=>'admin',
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin123'),
            ],
            [
                'role'=>'office',
                'name'=>'petugas',
                'email'=>'petugas@gmail.com',
                'password'=>Hash::make('petugas123'),
            ],
            [
                'role'=>'user',
                'name'=>'Rifqi Irfansyah',
                'email'=>'rifqi@gmail.com',
                'password'=>Hash::make('rifqi123'),
            ],
        ]);
    }
}