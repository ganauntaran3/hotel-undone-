<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin123',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'Admnistrator',
            'status' => 'enabled'
        ]);
    }
}
