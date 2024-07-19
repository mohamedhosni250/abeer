<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $reviews = [
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Hareth D. Lunar',
                'content' => 'I doubt anyone would find a better agency to register into Universities through in Malaysia. They are absolutely the most awesome. Their staff are cool as they are willing to help and provide aid very efficiently with ease and friendliness.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Taher Rushdy Cartoons',
                'content' => 'عندما قررت ان ارسل ابني ليكمل دراسته الجامعيه في ماليزيا وفقني الله بشركة عبير للدراسة في ماليزيا متمثلة في الاستاذ مهند الشخص المحترم المتعاون لاقصى حد حيث لمست منذ الوهلة الاول مدى التفاني والمصداقيه والمهنية في التعامل فعلا لقد كانوا ومازالوا نعم العون فعلا شعرت ان ابني سيكون بين ايادي امينه واخوة اعزاء وعندما يستشيرني اي صديق يريد ارسال ابنه للدراسة بالخارج اوصيه فورا بشركة عبير',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Yasser Fakih',
                'content' => 'When i decided to study at UTM Malaysia my friend recommended me to contact Abeer education and as soon as i contacted Mr.Mokhtar he has helped me with everything and also answered all of my questions.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => '江映月',
                'content' => 'شكرا جدا علي تعب استاذ حكم و استاذ مهند، رغم اني كنت بزعجهم كتير جدا شبه طول اليوم بالاسئلة الا وانهم كانوا بيساعدوني دايما  استاذ حكم فضل متباعني في الاوراق لمدة تزيد عن 4 شهور و مقصرش ابدا، و استاذ مهند تبعني من ساعة ما وصلت و تعب جدا معايا شكرا جدا و فعلا الشركة محل ثقة',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Hassan Nemir',
                'content' => 'I’m really thankful to Abeer company as they helped me a lot with starting my degree in Malaysia, I recommend them for anybody who wants to study in Malaysia.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Mohamed Adam',
                'content' => 'شركة محترمة و القائمين عليها على درجة عالية من الذوق و العمل الجاد و الإرشاد و النصح.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Bahaa Mohd',
                'content' => 'بوصي اي شخص ناوي على الدراسة في ماليزيا التعامل مع Abeer Education ناس اخلاقهم حسنة, ينوثق فيهم و صبورين في ختم و تاكيد كل المستلزمات الورقية',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Mado Mohamed',
                'content' => 'اوصى بشدة التعامل مع شركه عبير احترام العملاء الاهتمام بالطلبه الرد السريع لاى استفسار خاص بالدراسه و الطالب مساعده الطلاب فى السفر و السكن مساعده الطالب داخل الجامعه بعد التسجيل و خلال فترة الدراسه و شكر خاص للاستاذ مختار على حسن خلقه و صبرة مه اولياء الامور',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Mohammad Nourldin',
                'content' => 'When I wanted to study in Malaysia, I contacted Abeer Education and I am so glad I decided to continue with them, A very professional team to help students reach their dreams. A special thanks to Mr.Mokhtar for helping me with each and every step in my journey, even now after 2 years of studying at UTM, Mr.Mokhtar still helps me with a lot of problems that I am facing.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Nada Salah',
                'content' => 'They are very helpful and patient with students and they offer alot of universities and majors everywhere.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Alaeldin Ahmed Yassin',
                'content' => 'كل التقدير والاحترام لعبير الغد للدراسة. التعامل بمهنية عالية يجعلك تشعر أنك مميز. السرعة في الرد عن أي سؤال أو أستفسار بدون اي تجاهل.. الاهتمام بالطالب منذ لحظة الاتصال بهم حتى وصوله الى الجامعة ومتابعة كل الإجراءات يبعث الطمأنينه في النفس. اوصي كل من يفكر في الدراسة في ماليزيا ان يتعامل معهم. كل الشكر والتقدير لطاقم الشركة بالخرطوم لحسن الاستقبال و الحفاوة الشكر اجزله للأخ مختار الذي لا يترك شاردة او واردة إلا تعامل معها بمهنية عالية.. مع تمنياتي لكم بالتقدم و الاذدهار.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Dan Bitar',
                'content' => 'professional company with a great staff.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Moustafa Ahmed Lajeen',
                'content' => 'They are a group of professionals with the right quick help, in addition to the ability to offer multiple options.',
                'rating' => 4.5,
            ],
            [
                'image' => 'https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Egypt.png',
                'author' => 'Sohila Ahmed',
                'content' => 'they are very helpful and friendly.. they offer a lot of universities and different faculties.',
                'rating' => 4.5,
            ],
        ];

        DB::table('reviews')->insert($reviews);
    }
}
