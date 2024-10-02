<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        User::create([
            'name' => 'Victor Lequeux',
            'email' => 'victorlequeux@example.com',
            'email_verified_at'=> now(),
            'password'=>Hash::make('password'),
            'remember_token'=>Str::random(10)
        ]);
        */
        User::factory(6)->create();
    }
}
