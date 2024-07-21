<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Vu',
                'email' => 'vunv123@gmail.com',
                'password' => Hash::make('password1234'),
            ],
            [
                'name' => 'Nam',
                'email' => 'nam123@gmail.com',
                'password' => Hash::make('password1234'),
            ],
        ]);
    }
}
