<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FirstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => env('INITIAL_USER_NAME', 'John Doe'),
            //'first_name' => env('INITIAL_USER_FIRST_NAME', 'John'),
            //'last_name' => env('INITIAL_USER_LAST_NAME', 'Doe'),
            'email' => env('INITIAL_USER_EMAIL', 'john.doe@gmail.com'),
            'password' => env('INITIAL_USER_PASSWORD_HASH', Hash::make('password'))
        ]);
    }
}
