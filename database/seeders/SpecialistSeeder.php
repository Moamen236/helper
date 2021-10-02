<?php

namespace Database\Seeders;

use App\Models\Specialist;
use Illuminate\Database\Seeder;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialist::create([
            'serial_no' => '60db139a414a5',
            'gender' => 'male',
            'phone' => '+201099616726',
            'user_id' => 1
        ]);
    }
}