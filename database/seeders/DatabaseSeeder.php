<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PatientSeeder::class,
            QuesTypeSeeder::class,
            QuesCatSeeder::class,
            QuesSeeder::class,
            PlanTypeSeeder::class,
            PlanSeeder::class,
            ScheduleSeeder::class,
            ToDoSeeder::class,
            ToDoAttachSeeder::class,
            MeetingSeeder::class,
            MeetingAttachSeeder::class
        ]);
    }
}