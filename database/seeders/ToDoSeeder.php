<?php

namespace Database\Seeders;

use App\Models\ToDo;
use Illuminate\Database\Seeder;

class ToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            ToDo::factory()->count(10)->create([
                'patient_id' => $i,
            ]);
        }
    }
}