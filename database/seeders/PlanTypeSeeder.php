<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\PlanType;
use Illuminate\Database\Seeder;

class PlanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            json_encode(['en' => 'Strength Points', 'ar' => 'نقاط القوة']),
            json_encode(['en' => 'Weakness Points', 'ar' => 'نقاط الضعف']),
            json_encode(['en' => 'long term goals', 'ar' => 'أهداف بعيدة المدى']),
            json_encode(['en' => 'Short Term goals', 'ar' => 'أهداف قصيرة المدى'])
        ];

        foreach ($types as $type) {
            PlanType::create([
                'name' => $type
            ]);
        }
    }
}