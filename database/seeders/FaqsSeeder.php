<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'id' => 1760,
                'question' => [
                    'ru' => 'Что такое 5G Standalone?',
                    'uz' => '5G Standalone nima?',
                    'en' => 'What is 5G Standalone?',
                ],
                'answer' => [
                    'ru' => '<p><span style="color: rgb(62, 62, 62);">5G Standalone — это полноценная сеть пятого поколения, не зависящая от предыдущих поколений связи. Она обеспечивает сверхбыстрый интернет, минимальную задержку и стабильную работу даже при высокой нагрузке.</span></p>',
                    'uz' => "<p><span style=\"color: rgb(62, 62, 62);\">5G Standalone — bu avvalgi aloqa avlodlariga bogʻliq bo‘lmagan to‘liq beshinchi avlod tarmogʻidir. U juda yuqori tezlikdagi internet, minimal kechikish va katta yuklama ostida ham barqaror ishlashni ta'minlaydi.</span></p>",
                    'en' => '<p><span style="color: rgb(62, 62, 62);">5G Standalone is a full fifth-generation network that does not rely on previous generations of mobile connectivity. It delivers ultra-fast internet, minimal latency and stable performance even under heavy load.</span></p>',
                ],
                'slug' => 'what-is-5g-standalone',
            ],
            [
                'id' => 1761,
                'question' => [
                    'ru' => 'Когда 5G Standalone появится в моем районе?',
                    'uz' => 'Mening tumanimda 5G Standalone qachon paydo bo‘ladi?',
                    'en' => 'When will 5G Standalone be available in my area?',
                ],
                'answer' => [
                    'ru' => '<p><span style="color: rgb(62, 62, 62);">Мы ежедневно подключаем новые базовые станции 5G Standalone. В течение 2025 года планируется покрытие всего Ташкента и крупных городов Узбекистана. Следите за обновлениями на нашем сайте и в соцсетях.</span></p>',
                    'uz' => '<p><span style="color: rgb(62, 62, 62);">Biz har kuni yangi 5G Standalone bazaviy stansiyalarini ulaymiz. 2025-yil davomida Toshkent shahri va Oʻzbekistonning yirik shaharlarida qamrovni taʼminlash rejalashtirilgan. Yangiliklarimizni veb-saytimizda va ijtimoiy tarmoqlarda kuzatib boring.</span></p>',
                    'en' => '<p><span style="color: rgb(62, 62, 62);">We add new 5G Standalone base stations every day. Coverage across all of Tashkent and major cities of Uzbekistan is planned during 2025. Follow updates on our website and social media.</span></p>',
                ],
                'slug' => 'when-will-5g-standalone-be-available-in-my-area',
            ],
            [
                'id' => 1762,
                'question' => [
                    'ru' => 'Как найти свой район на карте покрытия?',
                    'uz' => "O'z hududingizni qamrov xaritasida qanday topish mumkin?",
                    'en' => 'How do I find my area on the coverage map?',
                ],
                'answer' => [
                    'ru' => '<p><span style="color: rgb(62, 62, 62);">Вы можете вручную найти свой район на карте или воспользоваться строкой поиска, указав название района.</span></p><p><span style="color: rgb(62, 62, 62);">Например:&nbsp;Мирзо-Улугбекский район</span></p>',
                    'uz' => '<p><span style="color: rgb(62, 62, 62);">Siz xaritadan tumanni qo‘lda topishingiz yoki qidiruv qatoriga tuman nomini yozishingiz mumkin.</span></p><p><span style="color: rgb(62, 62, 62);">Masalan: Mirzo-Ulugʻbek tumani</span></p>',
                    'en' => '<p><span style="color: rgb(62, 62, 62);">You can locate your area on the map manually or use the search bar by typing the district name.</span></p><p><span style="color: rgb(62, 62, 62);">For example:&nbsp;Mirzo-Ulugbek district</span></p>',
                ],
                'slug' => 'how-to-find-your-area-on-the-coverage-map',
            ],
            [
                'id' => 1763,
                'question' => [
                    'ru' => 'Как подключить 5G Standalone?',
                    'uz' => '5G Standalone xizmatini qanday ulash mumkin?',
                    'en' => 'How do I connect 5G Standalone?',
                ],
                'answer' => [
                    'ru' => '<p><strong>Вариант 1: Онлайн-заявка</strong></p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Оставьте заявку на сайте.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Мы свяжемся с вами, проверим техническую возможность подключения и договоримся о времени установки.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>В указанное время наш специалист приедет, привезёт оборудование (роутер и SIM-карту Perfectum), подключит и настроит домашний интернет.</p><p><br></p><p><strong>Вариант 2: Посетите офисы Perfectum</strong></p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Центральный офис: ул. Шевченко, 21</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Филиал в&nbsp;Чиланзарском районе: ул. Гагарина, дом 40</p>',
                    'uz' => '<p>1-variant: Onlayn ariza topshirish</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Saytimiz orqali ariza yuboring.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Biz siz bilan bogʻlanamiz, texnik imkoniyatni tekshiramiz va o‘rnatish vaqtini kelishib olamiz.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Belgilangan vaqtda mutaxassisimiz keladi, uskunani (router va Perfectum SIM-kartasi) olib keladi, internetni ulaydi va sozlaydi.</p><p><br></p><p>2-variant: Perfectum ofislariga tashrif buyuring</p><p>• Markaziy ofis: Shevchenko ko‘chasi, 21-uy</p><p>• Chilonzor tumanidagi filial: Gagarin ko‘chasi, 40-uy</p>',
                    'en' => '<p><strong>Option 1: Online request</strong></p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Leave a request on the website.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>We will contact you, verify technical feasibility and agree on an installation time.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Our specialist will arrive at the scheduled time, bring the equipment (router and a Perfectum SIM card), connect and configure your home internet.</p><p><br></p><p><strong>Option 2: Visit a Perfectum office</strong></p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Head office: Shevchenko street, 21</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Chilanzar branch: Gagarin street, 40</p>',
                ],
                'slug' => 'how-to-connect-5g-standalone',
            ],
        ];

        foreach ($faqs as $row) {
            Faq::updateOrCreate(
                ['id' => $row['id']],
                [
                    'question' => $row['question'],
                    'answer' => $row['answer'],
                    'slug' => $row['slug'],
                    'sort' => 1,
                    'image' => null,
                    'is_published' => true,
                ],
            );
        }

        if (DB::getDriverName() === 'pgsql') {
            DB::statement("SELECT setval('faqs_id_seq', (SELECT COALESCE(MAX(id), 1) FROM faqs))");
        }

        $this->command?->info('Imported ' . count($faqs) . ' FAQs.');
    }
}
