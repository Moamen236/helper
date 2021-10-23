<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Schedule::factory()->count(3)->create([
                'patient_id' => $i,
                'caregiver_id' => 1,
                'specialist_id' => 1,
            ]);
        }
    }
}