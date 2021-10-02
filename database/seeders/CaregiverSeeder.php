<?php

namespace Database\Seeders;

use App\Models\Caregiver;
use Illuminate\Database\Seeder;

class CaregiverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caregiver::create([
            'gender' => 'female',
            'phone' => '+201055356958',
            'specialist_id' => 1,
            'user_id' => 2
        ]);
    }
}