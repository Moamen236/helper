<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Plan;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::factory()->count(5)->create([
            'caregiver_id' => 1,
            'specialist_id' => 1
        ]);
    }
}