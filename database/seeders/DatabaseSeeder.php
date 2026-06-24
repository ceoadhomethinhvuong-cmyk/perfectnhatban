<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'ceoadhomethinhvuong@gmail.com'],
            [
                'name'     => 'Admin PERFECT',
                'password' => Hash::make('12345678'),
                'role'     => 'admin',
            ]
        );
    }
}
