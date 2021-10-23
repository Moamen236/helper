<?php

namespace Database\Seeders;

use App\Models\MeetingAttached;
use Illuminate\Database\Seeder;

class MeetingAttachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            MeetingAttached::create([
                'attached' => "$i.jpg",
                'meeting_id' => $i
            ]);
        }
    }
}