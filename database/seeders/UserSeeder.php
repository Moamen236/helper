<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
            'name' => 'Specialist',
            'email' => 'doc@mail.com',
            'password' => Hash::make('doc12345'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Caregiver',
            'email' => 'care@mail.com',
            'password' => Hash::make('care12345'),
            'role_id' => 2
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => Hash::make('user12345'),
            'role_id' => 3
        ]);

        User::factory()->count(5)->create();
    }
}