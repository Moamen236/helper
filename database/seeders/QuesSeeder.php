<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // ADIR Questions
        $adirQues = [
            json_encode(['en' => 'When you smile to your baby, does he meet you with a smile too?', 'ar' => 'عندما تبتسم لطفلك، هل يقابلك بابتسامة أيضا؟']),
            json_encode(['en' => 'When your child is busy playing with himself and you call him by his name, does he look at you expressing his response to his calling by his name?', 'ar' => 'عندما يكون طفلك مشغولا باللعب مع نفسه وتنادونه باسمه، هل ينظر إليك وهو يعبر عن رده على دعوته باسمه؟']),
            json_encode(['en' => 'When you are pointing at something with the index finger, does your child follow it and look at the thing you are referring to?', 'ar' => 'عندما تشير إلى شيء بإصبع السبابة، هل يتبعه طفلك وانظر إلى الشيء الذي تشير إليه؟']),
            json_encode(['en' => 'When you try to play with your child, does he play with you?', 'ar' => 'عندما تحاول اللعب مع طفلك، هل يلعب معك؟']),
            json_encode(['en' => 'When you try to teach your child an alternate playing method using one of the toys, does your child watch it and try to copy it?', 'ar' => 'عندما تحاول تعليم طفلك طريقة لعب بديلة باستخدام إحدى الألعاب، هل يشاهدها طفلك ويحاول نسخها؟']),
            json_encode(['en' => 'When someone familiar to your child comes, does he respond to him and look at him?', 'ar' => 'عندما يأتي شخص مطلع على طفلك، هل يستجيب له وننظر إليه؟']),
            json_encode(['en' => 'Does your child seem preoccupied and entertained in a certain activity, does he look at you and smile to express his happiness and enjoyment to you?', 'ar' => 'هل يبدو طفلك مشغولا ومستمتعا في نشاط معين، فهل ينظر إليك ويبتسم ليعبر لك عن سعادته وتمتعه به؟']),
            json_encode(['en' => 'When you laugh at your child`s action or movement, does your child bring it back to make you laugh again?', 'ar' => 'هل يبدو طفلك مشغولا ومستمتعا في نشاط معين، فهل ينظر إليك ويبتسم ليعبر لك عن سعادته وتمتعه به؟']),
            json_encode(['en' => 'Does your child point to something or offer you something in order to share his interest or liking for that thing?', 'ar' => 'عندما تضحك على حركة طفلك أو حركته، هل يعيده طفلك ليضحك مرة أخرى؟']),
            json_encode(['en' => 'Is your child trying to invite you to play with him by offering you his toy and looking at you to express his desire to play with you?', 'ar' => 'هل يشير طفلك إلى شيء ما أو يعرض عليك شيئا من أجل مشاركة اهتمامه أو إعجابه بهذا الشيء؟']),
            json_encode(['en' => 'Does your child approach other children and try to play with them?', 'ar' => 'هل يحاول طفلك دعوتك للعب معه من خلال عرض لعبته عليك والنظر إليك للتعبير عن رغبته في اللعب معك؟']),
            json_encode(['en' => 'Does your child look at you when you talk or play with him?', 'ar' => 'هل يقترب طفلك من الأطفال الآخرين ويحاول اللعب معهم؟']),
            json_encode(['en' => 'Does your child play games in an unusual way (cars)?', 'ar' => 'هل ينظر طفلك إليك عندما تتحدث معه أو تلعب معه؟']),
            json_encode(['en' => 'Does your child move his hands or body in an unusual way?', 'ar' => 'هل يلعب طفلك الألعاب بطريقة غير عادية (سيارات)؟']),
            json_encode(['en' => 'Does your child have specific interests that take a long time?', 'ar' => 'هل يحرك طفلك يديه أو جسده بطريقة غير عادية؟']),
            json_encode(['en' => 'Is the child accustomed to performing behaviors in a consistent way?', 'ar' => 'هل لطفلك اهتمامات محددة تستغرق وقتا طويلا؟']),
            json_encode(['en' => 'Does the child resist your attempt to change the environment or activity?', 'ar' => 'هل الطفل معتاد على أداء السلوكيات بطريقة متسقة؟']),
            json_encode(['en' => 'Is the child unable to imitate your actions if you ask him to do so?', 'ar' => 'هل يقاوم الطفل محاولتك لتغيير البيئة أو النشاط؟']),
            json_encode(['en' => 'Non-conscientious communication (impaired eye contact and body language - difficulty understanding the use of physical expression)', 'ar' => 'هل الطفل غير قادر على تقليد أفعالك إذا طلبت منه ذلك؟']),
        ];

        foreach ($adirQues as $adirQue) {
            Question::create([
                'question' => "$adirQue",
                'ques_type_id' => 2
            ]);
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Attched Reports Questions
        $attchedQues = [
            json_encode(['en' => 'Audiometer', 'ar' => 'مقياس الصوت']),
            json_encode(['en' => 'Resonance ray', 'ar' => 'شعاع الرنين']),
            json_encode(['en' => 'A CT scan of the brain', 'ar' => 'تصوير مقطعي للدماغ']),
            json_encode(['en' => 'Ear and nose report', 'ar' => 'تقرير الأذن والأنف']),
            json_encode(['en' => 'Prior diagnosis of genetic conditions in the family', 'ar' => 'التشخيص المسبق للحالات الوراثية في الأسرة']),
            json_encode(['en' => 'Linguistic deficiency', 'ar' => 'نقص لغوي']),
        ];

        foreach ($attchedQues as $attchedQue) {
            Question::create([
                'question' => "$attchedQue",
                'ques_type_id' => 3
            ]);
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Evaluation History Questions
        $evaluationQues = [
            json_encode(['en' => 'Is there a relationship between the father and the mother?', 'ar' => 'هل هناك علاقة بين الأب والأم؟']),
            json_encode(['en' => 'Did problems occur during pregnancy (physical condition)?', 'ar' => 'هل حدثت مشاكل أثناء الحمل (الحالة الجسدية)؟']),
            json_encode(['en' => 'Are drugs taken during pregnancy?', 'ar' => 'هل تؤخذ الأدوية أثناء الحمل؟']),
            json_encode(['en' => 'Psychological state during pregnancy (depression - sadness - nervousness - other than that)?', 'ar' => 'الحالة النفسية أثناء الحمل (الاكتئاب - الحزن - العصبية - بخلاف ذلك)؟']),
            json_encode(['en' => 'Was an audiometer, resonance ray, or a CT scan done on the brain?', 'ar' => 'هل تم إجراء قياس صوتي أو شعاع رنين أو تصوير مقطعي على الدماغ؟']),
            json_encode(['en' => 'Has the child been shown to an ear, nose and throat doctor?', 'ar' => 'هل تم عرض الطفل على طبيب الأذن والأنف والحنجرة؟']),
            json_encode(['en' => 'When was a problem noticed in the child (date)?', 'ar' => 'متى لوحظ وجود مشكلة في الطفل (تاريخ)؟']),
            json_encode(['en' => 'What is the problem observed on the child?', 'ar' => 'ما هي المشكلة التي لوحظت على الطفل؟']),
            json_encode(['en' => 'Has the child been subject to previous sessions in any center?', 'ar' => 'هل خضع الطفل لجلسات سابقة في أي مركز؟']),
            json_encode(['en' => 'What is the child`s daily routine?', 'ar' => 'ما هو الروتين اليومي للطفل؟']),
            json_encode(['en' => 'What happens when any part of the child`s routine changes? What is his reaction (screaming - tense, ...)?', 'ar' => 'ماذا يحدث عندما يتغير أي جزء من روتين الطفل؟ ما هو رد فعله (يصرخ - متوترة، ...)؟']),
            json_encode(['en' => 'What is the child`s eating routine?', 'ar' => 'ما هو روتين تناول الطعام للطفل؟']),
            json_encode(['en' => 'I like baby food (chocolate, chips, lollipop, cake, ...)', 'ar' => 'أحب أغذية الأطفال (الشوكولاته، رقائق، مصاصة، كعكة، ...)']),
            json_encode(['en' => 'Does the child have a constantly repeating pattern?', 'ar' => 'هل لدى الطفل نمط متكرر باستمرار؟']),
            json_encode(['en' => 'What are the child`s reinforcements (games, television, computer, food, ...) ', 'ar' => 'ما هي تعزيزات الطفل (الألعاب والتلفزيون والكمبيوتر والغذاء، ...)']),
        ];

        foreach ($evaluationQues as $evaluationQue) {
            Question::create([
                'question' => "$evaluationQue",
                'ques_type_id' => 4
            ]);
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Notic Questions
        $noticQues = [
            3 => [
                json_encode(['en' => 'Non-conscientious communication (impaired eye contact and body language - difficulty understanding the use of physical expression)', 'ar' => 'التواصل غير الضميري (ضعف الاتصال بالعين ولغة الجسد - صعوبة في فهم استخدام التعبير البدني)']),
                json_encode(['en' => 'Difficulty making relationships - difficulties sharing imaginative play - loss of interest in peers', 'ar' => 'صعوبة في إقامة العلاقات - صعوبات في مشاركة اللعب الخيالي - فقدان الاهتمام بالأقران']),
            ],
            4 => [
                json_encode(['en' => 'Failed to have a regular conversation', 'ar' => 'فشل إجراء محادثة منتظمة']),
                json_encode(['en' => 'Failure to initiate or respond to a social interaction', 'ar' => 'عدم بدء تفاعل اجتماعي أو الاستجابة له']),
                json_encode(['en' => 'Failure to share interests, emotions, and moods', 'ar' => 'الفشل في مشاركة الاهتمامات والعواطف والمزاجية']),
            ],
            2 => [
                json_encode(['en' => 'Inability to hold things or move limbs', 'ar' => 'عدم القدرة على حمل الأشياء أو تحريك الأطراف']),
                json_encode(['en' => 'Random movements in front of the face', 'ar' => 'حركات عشوائية أمام الوجه']),
            ],
            5 => [
                json_encode(['en' => 'Modularity (arranging games in line or turning them around - making an echo - repeating special phrases meaningless)', 'ar' => 'وحدات (ترتيب الألعاب في خط أو تحويلها حولها - مما يجعل صدى - تكرار عبارات خاصة لا معنى لها)']),
            ],
            1 => [
                json_encode(['en' => 'Routine (insistence on the symmetry of actions - a permanent attachment to routine actions)', 'ar' => 'الروتين (الإصرار على تماثل الإجراءات - ارتباط دائم بالإجراءات الروتينية)']),
                json_encode(['en' => 'A special welcome ritual', 'ar' => 'طقوس ترحيب خاصة']),
                json_encode(['en' => 'Great strike when a small change occurs - difficulties with change', 'ar' => 'ضربة كبيرة عندما يحدث تغيير صغير - صعوبات مع التغيير']),
                json_encode(['en' => 'The need to eat the same food every day - the need to take the same route', 'ar' => 'الحاجة إلى تناول نفس الطعام كل يوم - الحاجة إلى اتخاذ نفس الطريق']),
            ],
            6 => [
                json_encode(['en' => 'Hyper or low mobility', 'ar' => 'فرط الحركة أو انخفاضها']),
                json_encode(['en' => 'Failure to feel the limbs or pressure on him', 'ar' => 'عدم الشعور بالأطراف أو الضغط عليه']),
            ],
        ];

        foreach ($noticQues as $key => $noticQue) {
            foreach ($noticQue as $que) {
                Question::create([
                    'question' => "$que",
                    'ques_category_id' => $key,
                    'ques_type_id' => 1
                ]);
            }
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Dsm5 Questions
        $dsmQues = [
            7 => [
                json_encode(['en' => 'Abnormal social interaction appears', 'ar' => 'يظهر تفاعل اجتماعي غير طبيعي']),
                json_encode(['en' => 'Failed to have a regular dialogue exchange', 'ar' => 'فشل في إجراء تبادل منتظم للحوار']),
                json_encode(['en' => 'Fails to share interests, emotions, and moods', 'ar' => 'فشل في مشاركة الاهتمامات والعواطف والمزاجية']),
                json_encode(['en' => 'Fails to initiate or respond to a social interaction', 'ar' => 'فشل في بدء تفاعل اجتماعي أو الاستجابة له']),
            ],
            8 => [
                json_encode(['en' => 'Impaired integration of verbal and nonverbal communication', 'ar' => 'ضعف التكامل بين التواصل اللفظي وغير اللفظي']),
                json_encode(['en' => 'Impaired eye contact and body language', 'ar' => 'ضعف الاتصال بالعين ولغة الجسد']),
                json_encode(['en' => 'Difficulty understanding and using bodily expressions', 'ar' => 'صعوبة في فهم واستخدام التعبيرات الجسدية']),
                json_encode(['en' => 'Difficulty understanding and using gestures', 'ar' => 'صعوبة في فهم الإيماءات واستخدامها']),
                json_encode(['en' => 'Complete absence of facial expressions and non-verbal communication', 'ar' => 'الغياب التام لتعابير الوجه والتواصل غير اللفظي']),
            ],
            9 => [
                json_encode(['en' => 'Difficulty adjusting behavior to suit different social situations', 'ar' => 'صعوبة في ضبط السلوك ليناسب المواقف الاجتماعية المختلفة']),
                json_encode(['en' => 'Difficulty sharing imaginative play', 'ar' => 'صعوبة في مشاركة اللعب الخيالي']),
                json_encode(['en' => 'Difficulties making friends', 'ar' => 'صعوبات في تكوين صداقات']),
                json_encode(['en' => 'Loss of interest in peers', 'ar' => 'فقدان الاهتمام بالأقران']),
            ],
        ];

        foreach ($dsmQues as $key => $dsmQue) {
            foreach ($dsmQue as $que) {
                Question::create([
                    'question' => "$que",
                    'ques_category_id' => $key,
                    'ques_type_id' => 5
                ]);
            }
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Scale Questions
        $scaleQues = [
            10 => [
                json_encode(['en' => 'Most of his time is spent performing typical repetitive behaviors if he is left alone', 'ar' => 'ويقضي معظم وقته أداء السلوكيات المتكررة النموذجية إذا ترك وحده']),
                json_encode(['en' => 'Is involved in a specific and abnormally stimulus', 'ar' => 'تشارك في تحفيز محدد وغير طبيعي']),
                json_encode(['en' => 'He stares at the hands and objects in the environment, with a distance of at least 5 seconds', 'ar' => 'يحدق في أيدي والأشياء في البيئة، مع مسافة لا تقل عن 5 ثوان']),
                json_encode(['en' => 'Moves (taps) the fingers quickly, with a angle of at least 5 seconds', 'ar' => 'تحريك (نقرات) الأصابع بسرعة، بزاوية لا تقل عن 5 ثوان']),
                json_encode(['en' => 'It moves quickly and impulsively when moving from one place to another', 'ar' => 'يتحرك بسرعة واندفاع عند الانتقال من مكان إلى آخر']),
                json_encode(['en' => 'He flips (moves) the hands or fingers in front of or next to the face', 'ar' => 'انه تقلب (يتحرك) اليدين أو الأصابع أمام أو بجانب الوجه']),
                json_encode(['en' => 'Makes high-pitched voices (like ayeye) or any other sounds as a matter of self-excitement', 'ar' => 'يجعل أصوات عالية النبرة (مثل ayeye) أو أي أصوات أخرى على سبيل الإثارة الذاتية']),
                json_encode(['en' => 'Uses toys and objects in an inappropriate way, makes the car spin, disassembles the moving parts of toys', 'ar' => 'يستخدم اللعب والكائنات بطريقة غير لائقة، ويجعل السيارة تدور، وتفكيك الأجزاء المتحركة من اللعب']),
                json_encode(['en' => 'He does things in ritual repetition', 'ar' => 'يفعل أشياء في التكرار الطقوسي']),
                json_encode(['en' => 'He engages in playing stereotypically when he uses objects or games', 'ar' => 'انه يشارك في اللعب بشكل نمطي عندما يستخدم الكائنات أو الألعاب']),
                json_encode(['en' => 'Repeats incomprehensible sounds (babbling) over and over', 'ar' => 'يكرر الأصوات غير المفهومة (الثرثرة) مرارا وتكرارا']),
                json_encode(['en' => 'It shows a great and unusual interest in the sensory aspects of playing materials, body parts, or objects', 'ar' => 'فإنه يظهر اهتماما كبيرا وغير عادي في الجوانب الحسية من مواد اللعب، وأجزاء الجسم، أو الكائنات']),
                json_encode(['en' => 'Shows compulsive behaviors that cannot be resisted', 'ar' => 'إظهار السلوكيات القهرية التي لا يمكن مقاومتها']),
            ],
            11 => [
                json_encode(['en' => 'Does not initiate conversations with peers or others', 'ar' => 'لا يبدأ محادثات مع أقرانه أو غيرهم']),
                json_encode(['en' => 'Little or no attention is given to what the peers are doing', 'ar' => 'يتم إيلاء اهتمام ضئيل أو معدوم لما يقوم به الأقران']),
                json_encode(['en' => 'Fails to imitate others while playing or when performing educational activities', 'ar' => 'فشل تقليد الآخرين أثناء اللعب أو عند أداء الأنشطة التعليمية']),
                json_encode(['en' => 'Does not follow other people hints - gestures - to direct the gaze of something, for example: when someone gestures with his head or points with his hand or uses any other body movements', 'ar' => 'لا يتبع تلميحات الآخرين - الإيماءات - لتوجيه نظرة شيء ما ، على سبيل المثال: عندما يقوم شخص ما بإيماءات برأسه أو يشير بيده أو يستخدم أي حركات جسم أخرى']),
                json_encode(['en' => 'Seems uninterested in getting other peoples attention (does not attempt to obtain, maintain, or direct another persons attention)', 'ar' => 'يبدو غير مهتم في الحصول على اهتمام الشعوب الأخرى (لا يحاول الحصول على، والحفاظ على، أو توجيه انتباه أشخاص آخرين)']),
                json_encode(['en' => 'Minimum excitement appears when interacting with others', 'ar' => 'يظهر الحد الأدنى من الإثارة عند التفاعل مع الآخرين']),
                json_encode(['en' => 'A little excitement appears - it may not appear entirely - when viewing games, objects, or others', 'ar' => 'يظهر القليل من الإثارة - قد لا تظهر تماما - عند عرض الألعاب أو الأشياء أو غيرها']),
                json_encode(['en' => 'They seem uninterested in pointing out to others about their surroundings in the environment', 'ar' => 'يبدو أنهم غير مهتمين بالإشارة إلى الآخرين حول محيطهم في البيئة']),
                json_encode(['en' => 'It appears he has no desire or object to have interactions with others', 'ar' => 'يبدو أنه ليس لديه رغبة أو كائن أن يكون التفاعلات مع الآخرين']),
                json_encode(['en' => 'He appears minimal or unresponsive as others try to interact with him', 'ar' => 'يبدو الحد الأدنى أو لا يستجيب كما يحاول الآخرون التفاعل معه']),
                json_encode(['en' => 'Does not show a little bit of social interaction and may not show it at all (for example, he refuses to say bye bye in response to someone saying bye bye)', 'ar' => 'لا تظهر قليلا من التفاعل الاجتماعي ، وربما لا تظهر على الإطلاق (على سبيل المثال ، انه يرفض أن يقول وداعا ردا على شخص يقول وداعا)']),
                json_encode(['en' => 'He does not seek to establish friendly relations with other people', 'ar' => 'لا يسعى لإقامة علاقات ودية مع الآخرين']),
                json_encode(['en' => 'Fails to play creatively or imaginatively', 'ar' => 'فشل في اللعب بشكل إبداعي أو خيالي']),
                json_encode(['en' => 'Shows little or no interest in other people', 'ar' => 'يظهر اهتماما ضئيلا أو معدوما بأشخاص آخرين']),
            ],
            12 => [
                json_encode(['en' => 'Responds inappropriately to stimuli that require a sense of humor (for example: laughs at jokes, cartoons, and funny anecdotes)', 'ar' => 'يستجيب بشكل غير لائق للمحفزات التي تتطلب روح الدعابة (على سبيل المثال: يضحك على النكات والرسوم المتحركة والحكايات المضحكة)']),
                json_encode(['en' => 'He has difficulty understanding the jokes', 'ar' => 'لديه صعوبة في فهم النكات']),
                json_encode(['en' => 'Has difficulty understanding colloquial expressions', 'ar' => 'لديه صعوبة في فهم التعبيرات العامية']),
                json_encode(['en' => 'He finds it difficult to know if someone is intentionally harassing him', 'ar' => 'يجد صعوبة في معرفة ما إذا كان شخص ما يضايقه عمدا']),
                json_encode(['en' => 'He finds it difficult to understand if it is the subject of mockery by others', 'ar' => 'يجد صعوبة في فهم ما إذا كان موضوع سخرية من قبل الآخرين']),
                json_encode(['en' => 'He finds it difficult to understand why people do not like him (to understand why others are bothered by him)', 'ar' => 'يجد صعوبة في فهم لماذا الناس لا يحبونه (لفهم لماذا يزعج الآخرين من قبله)']),
                json_encode(['en' => 'Fails to predict the possible consequences of social events', 'ar' => 'فشل في التنبؤ بالعواقب المحتملة للأحداث الاجتماعية']),
                json_encode(['en' => 'It seems as if he does not understand that other people have different thoughts and feelings about him', 'ar' => 'يبدو كما لو أنه لا يفهم أن الآخرين لديهم أفكار ومشاعر مختلفة عنه']),
                json_encode(['en' => 'It looks as if the other person does not know anything', 'ar' => 'يبدو كما لو أن الشخص الآخر لا يعرف أي شيء']),
            ],
            13 => [
                json_encode(['en' => 'It needs a lot of reassurance if things change or something goes wrong', 'ar' => 'يحتاج إلى الكثير من الطمأنينة إذا تغيرت الأمور أو حدث خطأ ما']),
                json_encode(['en' => 'He becomes frustrated and frustrated when he fails at something', 'ar' => 'يصبح محبطا ومحبطا عندما يفشل في شيء ما']),
                json_encode(['en' => 'He gets tantrums when frustrated', 'ar' => 'يحصل على نوبات الغضب عندما يشعر بالإحباط']),
                json_encode(['en' => 'Resent the usual change of routine', 'ar' => 'استاء من التغيير المعتاد للروتين']),
                json_encode(['en' => 'Responds negatively - he refuses - when he is advised, asked for something, or is directed', 'ar' => 'يستجيب سلبا - يرفض - عندما ينصح، يطلب منه شيئا، أو يتم توجيهه']),
                json_encode(['en' => 'Responds with a sharp reaction (such as: intense crying, screaming, or angry outbursts) when hearing a loud voice or unexpected noise', 'ar' => 'يستجيب برد فعل حاد (مثل: البكاء الشديد أو الصراخ أو الانفجارات الغاضبة) عند سماع صوت عال أو ضوضاء غير متوقعة']),
                json_encode(['en' => 'He gets a tantrum when he doesnot get what he wants in his own way', 'ar' => 'يحصل على نوبة غضب عندما لا يحصل على ما يريد بطريقته الخاصة']),
                json_encode(['en' => 'He gets a tantrum when someone tells him to stop doing something they enjoy', 'ar' => 'يصاب بنوبة غضب عندما يخبره أحدهم أن يتوقف عن فعل شيء يستمتع به']),
            ],
            14 => [
                json_encode(['en' => 'He uses exceptionally accurate words while speaking', 'ar' => 'انه يستخدم كلمات دقيقة بشكل استثنائي أثناء التحدث']),
                json_encode(['en' => 'It is closely related to the tangible - physical - meanings of words', 'ar' => 'وهو يرتبط ارتباطا وثيقا معاني ملموسة -- المادية -- من الكلمات']),
                json_encode(['en' => 'He talks excessively about a specific topic', 'ar' => 'يتحدث بشكل مفرط عن موضوع محدد']),
                json_encode(['en' => 'Demonstrates superior skill or knowledge in specific subjects', 'ar' => 'يوضح مهارة أو معرفة متفوقة في مواضيع محددة']),
                json_encode(['en' => 'Shows an excellent memory', 'ar' => 'يظهر ذاكرة ممتازة']),
                json_encode(['en' => 'Shows keen interest in certain intellectual topics', 'ar' => 'يظهر اهتماما كبيرا في بعض المواضيع الفكرية']),
                json_encode(['en' => 'He makes naive remarks (unconscious of the results of other peoples reactions)', 'ar' => 'انه يدلي بتصريحات ساذجة (فاقد الوعي لنتائج ردود فعل الشعوب الأخرى)']),
            ],
            15 => [
                json_encode(['en' => 'Repeats - echo/Poaching - words or phrases verbal or with gestures', 'ar' => 'يكرر - صدى / الصيد غير المشروع - الكلمات أو العبارات اللفظية أو مع الإيماءات']),
                json_encode(['en' => 'Repeats words out of context (repeats words or phrases he may have heard earlier)', 'ar' => 'يكرر الكلمات خارج السياق (يكرر الكلمات أو العبارات التي ربما سمعها في وقت سابق)']),
                json_encode(['en' => 'He speaks in situations that affect superficially', 'ar' => 'يتحدث في الحالات التي تؤثر سطحيا']),
                json_encode(['en' => 'Uses (yes and no) inappropriately, says yes when asked about something he does not like, or says no when asked about a favorite game or gift he wants', 'ar' => 'يستخدم (نعم ولا) بشكل غير لائق ، ويقول نعم عندما سئل عن شيء لا يحب ، أو يقول لا عندما سئل عن لعبة مفضلة أو هدية يريد']),
                json_encode(['en' => 'Uses the pronouns (he or she) instead of (me) when referring to himself', 'ar' => 'يستخدم الضمائر (هو أو هي) بدلا من (لي) عند الإشارة إلى نفسه']),
                json_encode(['en' => 'He speaks abnormally in terms of tone or rate', 'ar' => 'يتحدث بشكل غير طبيعي من حيث النبرة أو المعدل']),
                json_encode(['en' => 'Uttering distinctive words or phrases, but without meaning', 'ar' => 'نطق كلمات أو عبارات مميزة، ولكن دون معنى']),
            ],
        ];

        foreach ($scaleQues as $key => $scaleQue) {
            foreach ($scaleQue as $que) {
                Question::create([
                    'question' => "$que",
                    'ques_category_id' => $key,
                    'ques_type_id' => 6
                ]);
            }
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Lovaas Questions
        $lovaasQues = [
            16 => [
                json_encode(['en' => 'Keep calling for 5 seconds in response to hearing his name', 'ar' => 'استمر في الاتصال لمدة 5 ثوان ردا على سماع اسمه']),
                json_encode(['en' => 'Make eye contact in response to hearing his name while playing', 'ar' => 'إجراء اتصال بالعين ردا على سماع اسمه أثناء اللعب']),
                json_encode(['en' => 'Make eye contact from a distance', 'ar' => 'إجراء اتصال بالعين من مسافة بعيدة']),
                json_encode(['en' => 'Responding when someone call him', 'ar' => 'الاستجابة عندما يتصل به شخص ما']),
            ],
            17 => [
                json_encode(['en' => 'Imitation of large movements from a standing position', 'ar' => 'تقليد الحركات الكبيرة من وضعية الوقوف']),
                json_encode(['en' => 'Imitation of large sequential movements', 'ar' => 'تقليد الحركات المتتابعة الكبيرة']),
                json_encode(['en' => 'Imitation of sequential movements of things', 'ar' => 'تقليد الحركات المتتابعة للأشياء']),
                json_encode(['en' => 'Imitation of movements coupled with sounds', 'ar' => 'تقليد الحركات المقترنة بالأصوات']),
                json_encode(['en' => 'Imitation of models with cubes', 'ar' => 'تقليد نماذج مع مكعبات']),
                json_encode(['en' => 'Minor copying fees', 'ar' => 'رسوم نسخ بسيطة']),
            ],
            18 => [
                json_encode(['en' => 'Learn about rooms', 'ar' => 'تعرف على الغرف']),
                json_encode(['en' => 'Learn about feelings and emotions', 'ar' => 'تعرف على المشاعر والعواطف']),
                json_encode(['en' => 'Learn about places', 'ar' => 'تعرف على الأماكن']),
                json_encode(['en' => 'Follow two-step instructions', 'ar' => 'اتبع التعليمات ذات الخطوتين']),
                json_encode(['en' => 'It gives two things', 'ar' => 'يعطي شيئين']),
                json_encode(['en' => 'Recovers things he does not see', 'ar' => 'يستعيد الأشياء التي لا يراها']),
                json_encode(['en' => 'Identify the distinguishing characteristics of things', 'ar' => 'تحديد الخصائص المميزة للأشياء']),
                json_encode(['en' => 'Get to know the helpers in the community', 'ar' => 'تعرف على المساعدين في المجتمع']),
                json_encode(['en' => 'Pretend to do things', 'ar' => 'التظاهر بالقيام بأشياء']),
                json_encode(['en' => 'Knows the categories of things', 'ar' => 'يعرف فئات الأشياء']),
                json_encode(['en' => 'Knows pronouns', 'ar' => 'يعرف الضمائر']),
                json_encode(['en' => 'It follows instructions that contain prepositions', 'ar' => 'يتبع التعليمات التي تحتوي على حروف الجر']),
                json_encode(['en' => 'Put the cards in sequence in order', 'ar' => 'وضع البطاقات في تسلسل في النظام']),
                json_encode(['en' => 'Knows the missing elements', 'ar' => 'يعرف العناصر المفقودة']),
                json_encode(['en' => 'He answers questions about things that are missing', 'ar' => 'يجيب على الأسئلة حول الأشياء المفقودة']),
                json_encode(['en' => 'Answer with yes or no response to things about activities and things', 'ar' => 'الإجابة بنعم أو بدون استجابة على أشياء حول الأنشطة والأشياء']),
                json_encode(['en' => 'He calls things touch', 'ar' => 'إنه يدعو الأشياء تلمس']),
                json_encode(['en' => 'Imitates a sentence of two or three sentences', 'ar' => 'يقلد جملة من جميتين أو ثلاث جمل']),
            ],
            19 => [
                json_encode(['en' => 'Asking what he wants in sentences in response to the question (what do you want)', 'ar' => 'يسأل ما يريد في الجمل ردا على السؤال (ماذا تريد)']),
                json_encode(['en' => 'He asks what he wants automatically in his sentences', 'ar' => 'يسأل ما يريد تلقائيا في جمله']),
                json_encode(['en' => 'He calls something that depends on a Job', 'ar' => 'انه يدعو شيئا يعتمد على وظيفة']),
                json_encode(['en' => 'It defines the function of things', 'ar' => 'يحدد وظيفة الأشياء']),
                json_encode(['en' => 'Identifies and refers to the parts of his body according to their responsibility', 'ar' => 'يحدد ويشير إلى أجزاء من جسده وفقا لمسؤوليتهم']),
                json_encode(['en' => 'Mention the job of his body parts', 'ar' => 'أذكر وظيفة أجزاء جسمه']),
                json_encode(['en' => 'Names places', 'ar' => 'أسماء الأماكن']),
                json_encode(['en' => 'Called agitation', 'ar' => 'دعا التحريض']),
                json_encode(['en' => 'He calls the group of things', 'ar' => 'انه يدعو مجموعة من الأشياء']),
                json_encode(['en' => 'Mention a simple sentence', 'ar' => 'ذكر جملة بسيطة']),
                json_encode(['en' => 'He shares his information', 'ar' => 'انه يشارك معلوماته']),
                json_encode(['en' => 'He says (I donnot know) when he asks for the name of something he doesnott know', 'ar' => 'يقول (أنا لا أعرف) عندما يسأل عن اسم شيء لا يعرفه']),
                json_encode(['en' => 'Asks questions (what is it - what is there)', 'ar' => 'طرح الأسئلة (ما هو - ما هو هناك)']),
                json_encode(['en' => 'He calls prepositions Expressive language skills', 'ar' => 'يسميه حروف الجر مهارات اللغة التعبيرية']),
                json_encode(['en' => 'The gender is called (male - female)', 'ar' => 'ويسمى الجنس (ذكر - أنثى)']),
                json_encode(['en' => 'Describes the picture in a sentence', 'ar' => 'وصف الصورة في جملة']),
                json_encode(['en' => 'Describes the things he sees and their most important characteristics', 'ar' => 'يصف الأشياء التي يراها وأهم خصائصها']),
                json_encode(['en' => 'He can recall the experiences of his previous one', 'ar' => 'يمكنه أن يتذكر تجارب سابقته']),
                json_encode(['en' => 'It answers questions that start with where', 'ar' => 'يجيب على الأسئلة التي تبدأ من أين']),
                json_encode(['en' => 'He called the assets stone', 'ar' => 'ودعا حجر الأصول']),
                json_encode(['en' => 'Mentions cabins functions', 'ar' => 'يذكر وظائف كابينة']),
                json_encode(['en' => 'It reminds the assistant jobs of the community', 'ar' => 'إنه يذكر وظائف المساعدين في المجتمع']),
                json_encode(['en' => 'Answers questions that start with when', 'ar' => 'الإجابة على الأسئلة التي تبدأ بمتى']),
                json_encode(['en' => 'Describes the sequence of images', 'ar' => 'يصف تسلسل الصور']),
                json_encode(['en' => 'Send a small message', 'ar' => 'إرسال رسالة صغيرة']),
                json_encode(['en' => 'Role-playing games with dolls', 'ar' => 'ألعاب الأدوار مع الدمى']),
                json_encode(['en' => 'Offer help', 'ar' => 'تقديم المساعدة']),
                json_encode(['en' => 'Connects items with the same class', 'ar' => 'يربط العناصر بنفس الفئة']),
                json_encode(['en' => 'It gives a specified quantity of things', 'ar' => 'يعطي كمية محددة من الأشياء']),
            ],
            20 => [
                json_encode(['en' => 'Connects numbers and quantities', 'ar' => 'يربط الأرقام والكميات']),
                json_encode(['en' => 'Connect between different shapes with letters', 'ar' => 'الاتصال بين الأشكال المختلفة بالأحرف']),
                json_encode(['en' => 'Connect matching words', 'ar' => 'ربط الكلمات المتطابقة']),
                json_encode(['en' => 'Get to know more and less', 'ar' => 'تعرف على المزيد والمزيد']),
                json_encode(['en' => 'Sequences letters and numbers', 'ar' => 'تسلسل الحروف والأرقام']),
                json_encode(['en' => 'Completes simple homework', 'ar' => 'يكمل الواجبات المنزلية البسيطة']),
                json_encode(['en' => 'Copies numbers and letters', 'ar' => 'نسخ الأرقام والحروف']),
                json_encode(['en' => 'Recognize written names', 'ar' => 'التعرف على الأسماء المكتوبة']),
                json_encode(['en' => 'Draws simple paintings', 'ar' => 'يرسم لوحات بسيطة']),
                json_encode(['en' => 'Write his name', 'ar' => 'اكتب اسمه']),
                json_encode(['en' => 'Plaster and knead', 'ar' => 'الجص والعجن']),
                json_encode(['en' => 'It shears with scissors', 'ar' => 'انها مقص مع مقص']),
                json_encode(['en' => 'He colors within the boundaries of his drawing', 'ar' => 'انه الألوان داخل حدود الرسم له']),
                json_encode(['en' => 'To brush his teeth', 'ar' => 'لتنظيف أسنانه']),
                json_encode(['en' => 'To close and open the zipper', 'ar' => 'لإغلاق وفتح السوستة']),
            ],
            21 => [
                json_encode(['en' => 'He buttoned the buttons', 'ar' => 'لقد قام بزرر الأزرار']),
                json_encode(['en' => 'brush his teeth', 'ar' => 'يغسل اسنانه ']),
                json_encode(['en' => 'Zipper closes and unzips', 'ar' => 'يغلق و يفتح السوستة']),
                json_encode(['en' => 'Clicking with his tongue (to clip the hook)', 'ar' => 'يطقطق بلسانه ( ان يشبك الشنكل )']),
            ],
        ];

        foreach ($lovaasQues as $key => $lovaasQue) {
            foreach ($lovaasQue as $que) {
                Question::create([
                    'question' => "$que",
                    'ques_category_id' => $key,
                    'ques_type_id' => 7
                ]);
            }
        }
    }
}