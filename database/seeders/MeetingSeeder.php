<?php

namespace Database\Seeders;

use App\Models\Meeting;
use Illuminate\Database\Seeder;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Meeting::factory()->count(4)->create([
                'patient_id' => $i,
                'user_id' => 1
            ]);
        }
    }
}