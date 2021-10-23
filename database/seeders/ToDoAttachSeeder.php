<?php

namespace Database\Seeders;

use App\Models\TodoAttached;
use Illuminate\Database\Seeder;

class ToDoAttachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            TodoAttached::create([
                'attached' => "$i.jpg",
                'to_do_id' => $i
            ]);
        }
    }
}