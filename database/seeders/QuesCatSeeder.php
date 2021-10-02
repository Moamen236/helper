<?php

namespace Database\Seeders;

use App\Models\QuesCategory;
use Illuminate\Database\Seeder;

class QuesCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Notic Cats
        $noticCats = [
            json_encode([
                'en' => 'Adapt to routine',
                'ar' => 'التكيف مع الروتين'
            ]),
            json_encode([
                'en' => 'Body Use',
                'ar' => 'استخدام الجسم'
            ]),
            json_encode([
                'en' => 'Child communication',
                'ar' => 'تواصل الطفل'
            ]),
            json_encode([
                'en' => 'Child s social interaction',
                'ar' => 'تفاعل الطفل االجتماعي'
            ]),
            json_encode([
                'en' => 'play',
                'ar' => 'اللعب'
            ]),
            json_encode([
                'en' => 'Use of the senses',
                'ar' => 'استخدام الحواس'
            ]),
        ];

        // DSM5 Cats
        $dsmCats = [
            json_encode([
                'en' => 'Difficulty with social and emotional exchange',
                'ar' => 'صعوبة التبادل الاجتماعي والعاطفي'
            ]),
            json_encode([
                'en' => 'Difficulty with nonverbal communication behaviors used in social interaction',
                'ar' => 'صعوبة في سلوكيات التواصل غير اللفظية المستخدمة في التفاعل الاجتماعي'
            ]),
            json_encode([
                'en' => 'Difficulty creating, maintaining, or understanding relationships',
                'ar' => 'صعوبة إنشاء العلاقات أو الحفاظ عليها أو فهمها'
            ]),
        ];

        // Scale Cats
        $scaleCats = [
            json_encode([
                'en' => 'Stereotypic / repetitive behaviors',
                'ar' => 'السلوكيات النمطية التكرارية'
            ]),
            json_encode([
                'en' => 'Social interaction',
                'ar' => 'التفاعل الاجتماعى'
            ]),
            json_encode([
                'en' => 'Social communication',
                'ar' => 'التواصل الاجتماعى'
            ]),
            json_encode([
                'en' => 'Emotional / Sentimental Respons',
                'ar' => 'الاستجابة العاطفية / الوجدانية'
            ]),
            json_encode([
                'en' => 'Cognitive pattern',
                'ar' => 'النمط المعرفى'
            ]),
            json_encode([
                'en' => 'Adaptive language',
                'ar' => 'اللغة اللاتكيفية'
            ]),
        ];

        // Lovaas Cats
        $lovaasCats = [
            json_encode([
                'en' => 'Attention and attendance skills',
                'ar' => 'مهارات الانتباه والحضور'
            ]),
            json_encode([
                'en' => 'Imitation skills',
                'ar' => 'مهارات التقليد'
            ]),
            json_encode([
                'en' => 'Language understanding skills',
                'ar' => 'مهارات فهم اللغة'
            ]),
            json_encode([
                'en' => 'Expressive language skills',
                'ar' => 'مهارات لغوية معبرة'
            ]),
            json_encode([
                'en' => 'Pre-academic skills',
                'ar' => 'مهارات ما قبل الأكاديمية'
            ]),
            json_encode([
                'en' => 'Self-care skills',
                'ar' => 'مهارات الرعاية الذاتية'
            ]),
        ];

        foreach ($noticCats as $noticCat) {
            QuesCategory::create([
                'name' => "$noticCat",
                'ques_type_id' => 1
            ]);
        }

        foreach ($dsmCats as $dsmCat) {
            QuesCategory::create([
                'name' => "$dsmCat",
                'ques_type_id' => 5
            ]);
        }

        foreach ($scaleCats as $scaleCat) {
            QuesCategory::create([
                'name' => "$scaleCat",
                'ques_type_id' => 6
            ]);
        }

        foreach ($lovaasCats as $lovaasCat) {
            QuesCategory::create([
                'name' => "$lovaasCat",
                'ques_type_id' => 7
            ]);
        }
    }
}