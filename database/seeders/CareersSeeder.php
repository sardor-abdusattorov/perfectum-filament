<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;

class CareersSeeder extends Seeder
{
    public function run(): void
    {
        $careers = [
            [
                'slug' => 'call-center-operator',
                'sort' => 1,
                'title' => [
                    'ru' => 'Оператор Call-центра',
                    'uz' => 'Call-markaz operatori',
                    'en' => 'Call Center Operator',
                ],
                'content' => [
                    'ru' => '<p><strong>Обязанности:</strong><br>Совершение исходящих звонков по готовой базе<br>Информирование абонентов о продуктах и услугах компании<br>Проведение опросов, консультаций и уточнение данных<br>Фиксация результатов звонков в системе<br>Поддержание высокого уровня сервиса при общении с клиентами</p><p><strong>Требования:</strong><br>Грамотная устная речь<br>Владение русским и узбекским языками<br>Уверенное пользование компьютером<br>Коммуникабельность, стрессоустойчивость, ответственность<br>Умение работать по скриптам и соблюдать регламенты<br>Желание обучаться и развиваться<br>Опыт работы в исходящем колл-центре — преимущество, но не обязателен</p><p><strong>Мы предлагаем:</strong><br>Стабильную заработную плату и бонусы за результаты<br>Удобный график работы<br>Обучение и поддержку на старте<br>Комфортные условия и дружный коллектив</p><p>Присоединяйтесь к нашей команде и развивайтесь вместе с нами! Отправляйте резюме уже сегодня на <a href="mailto:dilnoza.karamatullayeva@perfectum.uz">e-mail</a> или звоните по тел: +998983051221</p>',
                    'uz' => '<p><strong>Vazifalar:</strong><br>Tayyor baza bo‘yicha chiquvchi qo‘ng‘iroqlarni amalga oshirish<br>Abonentlarga kompaniya mahsulot va xizmatlari haqida ma’lumot berish<br>So‘rovnomalar o‘tkazish, konsultatsiya berish va ma’lumotlarni aniqlash<br>Qo‘ng‘iroq natijalarini tizimga kiritish<br>Mijozlar bilan muloqotda yuqori darajada xizmat ko‘rsatish</p><p><strong>Talablar:</strong><br>Savodli og‘zaki nutq<br>Rus va o‘zbek tillarini bilish<br>Kompyuterdan ishonchli foydalanish<br>Kommunikabellik, stressga chidamlilik, mas’uliyat<br>Skriptlar asosida ishlash va reglamentlarga rioya qilish<br>O‘rganish va rivojlanish istagi<br>Chiquvchi call-markazida ish tajribasi — afzallik, lekin shart emas</p><p><strong>Biz taklif qilamiz:</strong><br>Barqaror ish haqi va natijalar uchun bonuslar<br>Qulay ish jadvali<br>Boshlanishda o‘qitish va qo‘llab-quvvatlash<br>Qulay sharoitlar va do‘stona jamoa</p><p>Bizning jamoamizga qo‘shiling va biz bilan birga rivojlaning! Rezyumeni bugunning o‘zida <a href="mailto:dilnoza.karamatullayeva@perfectum.uz">e-mail</a> manziliga yuboring yoki +998983051221 raqamiga qo‘ng‘iroq qiling.</p>',
                    'en' => '<p><strong>Responsibilities:</strong><br>Making outbound calls using a ready database<br>Informing subscribers about the company\'s products and services<br>Conducting surveys, consultations and verifying data<br>Recording call results in the system<br>Maintaining a high level of service when communicating with clients</p><p><strong>Requirements:</strong><br>Articulate spoken language<br>Fluency in Russian and Uzbek<br>Confident computer skills<br>Communication skills, stress resistance, responsibility<br>Ability to work with scripts and follow regulations<br>Willingness to learn and grow<br>Experience in an outbound call center is an advantage but not required</p><p><strong>We offer:</strong><br>A stable salary and performance bonuses<br>A convenient work schedule<br>Training and support at the start<br>Comfortable conditions and a friendly team</p><p>Join our team and grow together with us! Send your resume today to <a href="mailto:dilnoza.karamatullayeva@perfectum.uz">e-mail</a> or call: +998983051221</p>',
                ],
            ],
            [
                'slug' => 'operator-engineer-switch-operations-department',
                'sort' => 2,
                'title' => [
                    'ru' => 'Инженер-оператор в Отдел эксплуатации коммутаторов',
                    'uz' => 'Kommutatorlarni ekspluatatsiya qilish bo‘limi muhandis-operatori',
                    'en' => 'Operator Engineer, Switch Operations Department',
                ],
                'content' => [
                    'ru' => '<p>г. Ташкент</p><p><strong>Должность:</strong> Инженер-оператор в Отдел эксплуатации коммутаторов</p><p><strong>Квалификационные требования:</strong><br>Образование: высшее техническое (Институт связи)<br>Владение компьютером: опытный пользователь<br>Владение языками: русский, английский<br>Опыт работы: не менее 2 лет в области телекоммуникаций</p><p><strong>Дополнительные требования:</strong><br>Знание электроники и микропроцессорной техники<br>Знание работы системы сотовой связи<br>Знание сетевых технологий и принципов построения сетей передачи данных</p><p><strong>Личные качества:</strong><br>Ответственность<br>Дисциплинированность<br>Исполнительность<br>Целеустремлённость<br>Пунктуальность<br>Способность к самообучению</p><p>тел. 98 303-07-68<br><strong>e-mail:</strong> hr_rezume@perfectum.uz</p>',
                    'uz' => '<p>Toshkent sh.</p><p><strong>Lavozim:</strong> Kommutatorlarni ekspluatatsiya qilish bo‘limi muhandis-operatori</p><p><strong>Malaka talablari:</strong><br>Ma’lumoti: oliy texnik (Aloqa instituti)<br>Kompyuterni bilish: tajribali foydalanuvchi<br>Tillarni bilish: rus, ingliz<br>Ish tajribasi: telekommunikatsiya sohasida kamida 2 yil</p><p><strong>Qo‘shimcha talablar:</strong><br>Elektronika va mikroprotsessor texnikasini bilish<br>Uyali aloqa tizimi ishini bilish<br>Tarmoq texnologiyalari va ma’lumot uzatish tarmoqlarini qurish tamoyillarini bilish</p><p><strong>Shaxsiy fazilatlar:</strong><br>Mas’uliyat<br>Intizomlilik<br>Ijrochilik<br>Maqsadga intiluvchanlik<br>Aniqlik<br>O‘z-o‘zini o‘qitish qobiliyati</p><p>tel. 98 303-07-68<br><strong>e-mail:</strong> hr_rezume@perfectum.uz</p>',
                    'en' => '<p>Tashkent</p><p><strong>Position:</strong> Operator Engineer, Switch Operations Department</p><p><strong>Qualification requirements:</strong><br>Education: higher technical (Institute of Communications)<br>Computer skills: advanced user<br>Languages: Russian, English<br>Work experience: at least 2 years in telecommunications</p><p><strong>Additional requirements:</strong><br>Knowledge of electronics and microprocessor technology<br>Knowledge of cellular network systems<br>Knowledge of network technologies and data network design principles</p><p><strong>Personal qualities:</strong><br>Responsibility<br>Discipline<br>Diligence<br>Determination<br>Punctuality<br>Ability to self-learn</p><p>tel. 98 303-07-68<br><strong>e-mail:</strong> hr_rezume@perfectum.uz</p>',
                ],
            ],
        ];

        foreach ($careers as $row) {
            Career::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'description' => null,
                    'content' => $row['content'],
                    'image' => null,
                    'sort' => $row['sort'],
                    'is_published' => true,
                    'published_at' => now(),
                ],
            );
        }

        $this->command?->info('Imported ' . count($careers) . ' careers.');
    }
}
