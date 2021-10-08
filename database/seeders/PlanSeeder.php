<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            Plan::factory()->count(5)->create([
                'plan_type_id' => $i,
                'patient_id' => 1
            ]);
        }
    }
}