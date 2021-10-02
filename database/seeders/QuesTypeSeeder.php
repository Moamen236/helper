<?php

namespace Database\Seeders;

use App\Models\QuesType;
use Illuminate\Database\Seeder;

class QuesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['notic', 'adir', 'attched reports', 'evaluation history', 'dsm5', 'scale', 'lovaas'];

        foreach ($types as $type) {
            QuesType::create([
                'type' => "$type"
            ]);
        }
    }
}