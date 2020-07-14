<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table admin
        DB::table('users')->insert([
            'uuid' => Str::random(36),
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 1,
            'password' => Hash::make('123'),
            'alamat' => 'Jl. Panglateh',
            'telp' => '085115219102',
            'gambar' => 'default.png'
        ]);
    }
}
