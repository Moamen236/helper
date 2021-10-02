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
            SpecialistSeeder::class,
            CaregiverSeeder::class,
            PatientSeeder::class,
            QuesTypeSeeder::class,
            QuesCatSeeder::class,
            QuesSeeder::class,
        ]);
    }
}