<?php

namespace Database\Seeders;

use App\Models\Patient;
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
        Patient::create([
            'name' => 'Ahmed',
            'cg_name' => 'caregiver',
            'caregiver_id' => 1,
            'specialist_id' => 1
        ]);
    }
}