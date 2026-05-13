<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

/**
 * Импорт FAQ из старой perfectum_db.faqs (4 записи) в текущую faqs.
 *
 * Маппинг колонок:
 *   order      -> sort
 *   is_active  -> is_published
 *   user_question / user_question_id / mail_sent -> отброшены (legacy)
 *
 * Слаги остаются translatable (как сейчас в модели Faq):
 *   slug -> ['ru' => '...', 'uz' => '...']
 *
 * Идемпотентен: updateOrCreate по id. Старые id сохраняются —
 * после запуска нужно сдвинуть sequence в PG, иначе следующее
 * создание из Filament даст конфликт PK:
 *   SELECT setval('faqs_id_seq', (SELECT MAX(id) FROM faqs));
 */
class FaqsFromLegacySeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'id' => 1760,
                'question' => [
                    'ru' => 'Что такое 5G Standalone?',
                    'uz' => '5G Standalone nima?',
                ],
                'answer' => [
                    'ru' => '<p><span style="color: rgb(62, 62, 62);">5G Standalone — это полноценная сеть пятого поколения, не зависящая от предыдущих поколений связи. Она обеспечивает сверхбыстрый интернет, минимальную задержку и стабильную работу даже при высокой нагрузке.</span></p>',
                    'uz' => "<p><span style=\"color: rgb(62, 62, 62);\">5G Standalone — bu avvalgi aloqa avlodlariga bogʻliq bo‘lmagan to‘liq beshinchi avlod tarmogʻidir. U juda yuqori tezlikdagi internet, minimal kechikish va katta yuklama ostida ham barqaror ishlashni ta'minlaydi.</span></p>",
                ],
                'slug' => [
                    'ru' => 'cto-takoe-5g-standalone',
                    'uz' => '5g-standalone-nima',
                ],
            ],
            [
                'id' => 1761,
                'question' => [
                    'ru' => 'Когда 5G Standalone появится в моем районе?',
                    'uz' => 'Mening tumanimda 5G Standalone qachon paydo bo‘ladi?',
                ],
                'answer' => [
                    'ru' => '<p><span style="color: rgb(62, 62, 62);">Мы ежедневно подключаем новые базовые станции 5G Standalone. В течение 2025 года планируется покрытие всего Ташкента и крупных городов Узбекистана. Следите за обновлениями на нашем сайте и в соцсетях.</span></p>',
                    'uz' => '<p><span style="color: rgb(62, 62, 62);">Biz har kuni yangi 5G Standalone bazaviy stansiyalarini ulaymiz. 2025-yil davomida Toshkent shahri va Oʻzbekistonning yirik shaharlarida qamrovni taʼminlash rejalashtirilgan. Yangiliklarimizni veb-saytimizda va ijtimoiy tarmoqlarda kuzatib boring.</span></p>',
                ],
                'slug' => [
                    'ru' => 'kogda-5g-standalone-poyavitsya-v-moem-raione',
                    'uz' => 'mening-tumanimda-5g-standalone-qachon-paydo-boladi',
                ],
            ],
            [
                'id' => 1762,
                'question' => [
                    'ru' => 'Как найти свой район на карте покрытия?',
                    'uz' => "O'z hududingizni qamrov xaritasida qanday topish mumkin?",
                ],
                'answer' => [
                    'ru' => '<p><span style="color: rgb(62, 62, 62);">Вы можете вручную найти свой район на карте или воспользоваться строкой поиска, указав название района.</span></p><p><span style="color: rgb(62, 62, 62);">Например:&nbsp;Мирзо-Улугбекский район</span></p>',
                    'uz' => '<p><span style="color: rgb(62, 62, 62);">Siz xaritadan tumanni qo‘lda topishingiz yoki qidiruv qatoriga tuman nomini yozishingiz mumkin.</span></p><p><span style="color: rgb(62, 62, 62);">Masalan: Mirzo-Ulugʻbek tumani</span></p>',
                ],
                'slug' => [
                    'ru' => 'kak-naiti-svoi-raion-na-karte-pokrytiya',
                    'uz' => 'oz-hududingizni-qamrov-xaritasida-qanday-topish-mumkin',
                ],
            ],
            [
                'id' => 1763,
                'question' => [
                    'ru' => 'Как подключить 5G Standalone?',
                    'uz' => '5G Standalone xizmatini qanday ulash mumkin?',
                ],
                'answer' => [
                    'ru' => '<p><strong>Вариант 1: Онлайн-заявка</strong></p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Оставьте заявку на сайте.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Мы свяжемся с вами, проверим техническую возможность подключения и договоримся о времени установки.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>В указанное время наш специалист приедет, привезёт оборудование (роутер и SIM-карту Perfectum), подключит и настроит домашний интернет.</p><p><br></p><p><strong>Вариант 2: Посетите офисы Perfectum</strong></p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Центральный офис: ул. Шевченко, 21</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Филиал в&nbsp;Чиланзарском районе: ул. Гагарина, дом 40</p>',
                    'uz' => '<p>1-variant: Onlayn ariza topshirish</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Saytimiz orqali ariza yuboring.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Biz siz bilan bogʻlanamiz, texnik imkoniyatni tekshiramiz va o‘rnatish vaqtini kelishib olamiz.</p><p><span style="color: rgb(65, 65, 65);">•&nbsp;</span>Belgilangan vaqtda mutaxassisimiz keladi, uskunani (router va Perfectum SIM-kartasi) olib keladi, internetni ulaydi va sozlaydi.</p><p><br></p><p>2-variant: Perfectum ofislariga tashrif buyuring</p><p>• Markaziy ofis: Shevchenko ko‘chasi, 21-uy</p><p>• Chilonzor tumanidagi filial: Gagarin ko‘chasi, 40-uy</p>',
                ],
                'slug' => [
                    'ru' => 'kak-podklyucit-5g-standalone',
                    'uz' => '5g-standalone-xizmatini-qanday-ulash-mumkin',
                ],
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

        // PG: после ручных id двинуть sequence, иначе следующая запись через UI упадёт по PK.
        if (\DB::getDriverName() === 'pgsql') {
            \DB::statement("SELECT setval('faqs_id_seq', (SELECT COALESCE(MAX(id), 1) FROM faqs))");
        }

        $this->command?->info('Imported ' . count($faqs) . ' FAQs from legacy.');
    }
}
