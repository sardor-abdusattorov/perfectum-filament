<?php

namespace Database\Seeders;

use App\Enums\PageSettingKey;
use App\Models\PageSetting;
use Illuminate\Database\Seeder;

class PageSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            PageSettingKey::Home->value => [
                'title' => [
                    'ru' => 'Perfectum',
                    'uz' => 'Perfectum',
                    'en' => 'Perfectum',
                ],
                'description' => [
                    'ru' => 'Высокоскоростной мобильный и домашний интернет на базе сети 5G Standalone',
                    'uz' => '5G Standalone tarmog‘iga asoslangan yuqori tezlikdagi mobil va uy interneti',
                    'en' => 'High-speed mobile and home internet powered by a 5G Standalone network',
                ],
                'meta_title' => [
                    'ru' => 'Perfectum — оператор связи 5G Standalone в Узбекистане',
                    'uz' => 'Perfectum — Oʻzbekistondagi 5G Standalone aloqa operatori',
                    'en' => 'Perfectum — 5G Standalone telecom operator in Uzbekistan',
                ],
                'meta_description' => [
                    'ru' => 'Perfectum — высокоскоростной мобильный и домашний интернет на базе сети 5G Standalone. Тарифы, красивые номера и покрытие по всему Узбекистану.',
                    'uz' => 'Perfectum — 5G Standalone tarmog‘iga asoslangan yuqori tezlikdagi mobil va uy interneti. Tariflar, chiroyli raqamlar va Oʻzbekiston boʻylab qamrov.',
                    'en' => 'Perfectum — high-speed mobile and home internet powered by a 5G Standalone network. Tariffs, premium numbers and coverage across Uzbekistan.',
                ],
                'meta_keywords' => [
                    'ru' => 'Perfectum, 5G, интернет, мобильная связь, тарифы, Узбекистан',
                    'uz' => 'Perfectum, 5G, internet, mobil aloqa, tariflar, Oʻzbekiston',
                    'en' => 'Perfectum, 5G, internet, mobile, tariffs, Uzbekistan',
                ],
            ],
            PageSettingKey::Tariffs->value => [
                'title' => [
                    'ru' => 'Тарифы',
                    'uz' => 'Tariflar',
                    'en' => 'Tariffs',
                ],
                'description' => [
                    'ru' => 'Выберите подходящий тарифный план',
                    'uz' => 'O‘zingizga mos tarif rejasini tanlang',
                    'en' => 'Choose the tariff plan that suits you',
                ],
                'meta_title' => [
                    'ru' => 'Тарифы Perfectum — мобильная связь и 5G интернет',
                    'uz' => 'Perfectum tariflari — mobil aloqa va 5G internet',
                    'en' => 'Perfectum tariffs — mobile and 5G internet',
                ],
                'meta_description' => [
                    'ru' => 'Выберите тариф Perfectum с быстрым интернетом, звонками и выгодными условиями для общения по Узбекистану.',
                    'uz' => 'Tezkor internet, qoʻngʻiroqlar va Oʻzbekiston boʻylab qulay shartlarga ega Perfectum tarifini tanlang.',
                    'en' => 'Pick a Perfectum tariff with fast internet, calls and great rates across Uzbekistan.',
                ],
                'meta_keywords' => [
                    'ru' => 'тарифы Perfectum, 5G интернет, мобильная связь, интернет Узбекистан',
                    'uz' => 'Perfectum tariflari, 5G internet, mobil aloqa, Oʻzbekiston internet',
                    'en' => 'Perfectum tariffs, 5G internet, mobile, Uzbekistan internet',
                ],
            ],
            PageSettingKey::HomeInternet->value => [
                'title' => [
                    'ru' => 'Домашний интернет',
                    'uz' => 'Uy interneti',
                    'en' => 'Home internet',
                ],
                'description' => [
                    'ru' => 'Высокоскоростной домашний интернет на базе сети 5G',
                    'uz' => '5G tarmogʻiga asoslangan yuqori tezlikdagi uy interneti',
                    'en' => 'High-speed home internet powered by the 5G network',
                ],
                'meta_title' => [
                    'ru' => 'Домашний интернет Perfectum — высокоскоростной 5G интернет',
                    'uz' => 'Perfectum uy interneti — yuqori tezlikdagi 5G internet',
                    'en' => 'Perfectum home internet — high-speed 5G internet',
                ],
                'meta_description' => [
                    'ru' => 'Подключите домашний интернет Perfectum с высокой скоростью и стабильным соединением на базе сети 5G.',
                    'uz' => '5G tarmogʻiga asoslangan barqaror va yuqori tezlikdagi Perfectum uy internetiga ulaning.',
                    'en' => 'Connect Perfectum home internet with high speed and a stable 5G connection.',
                ],
                'meta_keywords' => [
                    'ru' => 'домашний интернет, 5G интернет, Perfectum, интернет Узбекистан',
                    'uz' => 'uy interneti, 5G internet, Perfectum, Oʻzbekiston internet',
                    'en' => 'home internet, 5G internet, Perfectum, Uzbekistan internet',
                ],
            ],
            PageSettingKey::FreeNumbers->value => [
                'title' => [
                    'ru' => 'Красивые номера',
                    'uz' => 'Chiroyli raqamlar',
                    'en' => 'Premium numbers',
                ],
                'description' => [
                    'ru' => 'Подберите красивый номер для себя',
                    'uz' => 'O‘zingizga chiroyli raqam tanlang',
                    'en' => 'Pick a premium number for yourself',
                ],
                'meta_title' => [
                    'ru' => 'Красивые номера Perfectum — выбрать номер онлайн',
                    'uz' => 'Perfectum chiroyli raqamlari — raqamni onlayn tanlash',
                    'en' => 'Perfectum premium numbers — pick a number online',
                ],
                'meta_description' => [
                    'ru' => 'Выберите красивый номер Perfectum',
                    'uz' => 'Perfectum chiroyli raqamini tanlang',
                    'en' => 'Pick a Perfectum premium number',
                ],
                'meta_keywords' => [
                    'ru' => 'красивые номера, VIP номер, золотые номера, номер Perfectum',
                    'uz' => 'chiroyli raqamlar, VIP raqam, oltin raqamlar, Perfectum raqami',
                    'en' => 'premium numbers, VIP number, gold numbers, Perfectum number',
                ],
            ],
            PageSettingKey::Services->value => [
                'title' => [
                    'ru' => 'Услуги',
                    'uz' => 'Xizmatlar',
                    'en' => 'Services',
                ],
                'description' => [
                    'ru' => 'Дополнительные услуги и опции',
                    'uz' => 'Qo‘shimcha xizmatlar va imkoniyatlar',
                    'en' => 'Additional services and options',
                ],
                'meta_title' => [
                    'ru' => 'Услуги Perfectum — дополнительные возможности связи',
                    'uz' => 'Perfectum xizmatlari — aloqaning qoʻshimcha imkoniyatlari',
                    'en' => 'Perfectum services — extra connectivity features',
                ],
                'meta_description' => [
                    'ru' => 'Подключайте услуги Perfectum: переадресация, интернет-пакеты и другие сервисы связи.',
                    'uz' => 'Perfectum xizmatlarini ulang: qoʻngʻiroqni qayta yoʻnaltirish, internet-paketlar va boshqa aloqa servislari.',
                    'en' => 'Activate Perfectum services: call forwarding, internet packs and more.',
                ],
                'meta_keywords' => [
                    'ru' => 'услуги Perfectum, переадресация, интернет услуги',
                    'uz' => 'Perfectum xizmatlari, qoʻngʻiroqni qayta yoʻnaltirish, internet xizmatlari',
                    'en' => 'Perfectum services, call forwarding, internet services',
                ],
            ],
            PageSettingKey::Coverage->value => [
                'title' => [
                    'ru' => 'Зона покрытия',
                    'uz' => 'Qamrov hududi',
                    'en' => 'Coverage area',
                ],
                'description' => [
                    'ru' => 'Проверьте покрытие сети в вашем районе',
                    'uz' => 'Hududingizdagi tarmoq qamrovini tekshiring',
                    'en' => 'Check network coverage in your area',
                ],
                'meta_title' => [
                    'ru' => 'Карта покрытия Perfectum — сеть 5G в Узбекистане',
                    'uz' => 'Perfectum qamrov xaritasi — Oʻzbekistondagi 5G tarmoqi',
                    'en' => 'Perfectum coverage map — 5G network in Uzbekistan',
                ],
                'meta_description' => [
                    'ru' => 'Проверьте покрытие сети Perfectum и доступность 5G интернета в вашем регионе.',
                    'uz' => 'Perfectum tarmoq qamrovi va sizning hududingizdagi 5G internet imkoniyatini tekshiring.',
                    'en' => 'Check Perfectum network coverage and 5G availability in your region.',
                ],
                'meta_keywords' => [
                    'ru' => 'карта покрытия, 5G покрытие, Perfectum интернет',
                    'uz' => 'qamrov xaritasi, 5G qamrov, Perfectum internet',
                    'en' => 'coverage map, 5G coverage, Perfectum internet',
                ],
            ],
            PageSettingKey::News->value => [
                'title' => [
                    'ru' => 'Новости',
                    'uz' => 'Yangiliklar',
                    'en' => 'News',
                ],
                'description' => [
                    'ru' => 'Последние новости и события компании',
                    'uz' => 'Kompaniyaning so‘nggi yangiliklari va voqealari',
                    'en' => 'Latest company news and events',
                ],
                'meta_title' => [
                    'ru' => 'Новости Perfectum',
                    'uz' => 'Perfectum yangiliklari',
                    'en' => 'Perfectum news',
                ],
                'meta_description' => [
                    'ru' => 'Читайте новости Perfectum: новые тарифы, запуск услуг, акции и обновления компании.',
                    'uz' => 'Perfectum yangiliklarini oʻqing: yangi tariflar, xizmatlar ishga tushishi, aksiyalar va yangilanishlar.',
                    'en' => 'Read Perfectum news: new tariffs, service launches, promotions and company updates.',
                ],
                'meta_keywords' => [
                    'ru' => 'новости Perfectum, акции, тарифы, мобильная связь',
                    'uz' => 'Perfectum yangiliklari, aksiyalar, tariflar, mobil aloqa',
                    'en' => 'Perfectum news, promotions, tariffs, mobile',
                ],
            ],
            PageSettingKey::Actions->value => [
                'title' => [
                    'ru' => 'Акции',
                    'uz' => 'Aksiyalar',
                    'en' => 'Promotions',
                ],
                'description' => [
                    'ru' => 'Актуальные акции и специальные предложения Perfectum.',
                    'uz' => 'Perfectum aksiyalari va maxsus takliflari.',
                    'en' => 'Current Perfectum promotions and special offers.',
                ],
                'meta_title' => [
                    'ru' => 'Акции Perfectum — бонусы и специальные предложения',
                    'uz' => 'Perfectum aksiyalari — bonuslar va maxsus takliflar',
                    'en' => 'Perfectum promotions — bonuses and special offers',
                ],
                'meta_description' => [
                    'ru' => 'Актуальные акции Perfectum: бонусы, скидки и специальные предложения для абонентов.',
                    'uz' => 'Perfectum dolzarb aksiyalari: bonuslar, chegirmalar va abonentlar uchun maxsus takliflar.',
                    'en' => 'Current Perfectum promotions: bonuses, discounts and offers for subscribers.',
                ],
                'meta_keywords' => [
                    'ru' => 'акции Perfectum, бонусы, скидки, интернет акции',
                    'uz' => 'Perfectum aksiyalari, bonuslar, chegirmalar, internet aksiyalari',
                    'en' => 'Perfectum promotions, bonuses, discounts, internet promotions',
                ],
            ],
            PageSettingKey::Faq->value => [
                'title' => [
                    'ru' => 'Часто задаваемые вопросы',
                    'uz' => 'Tez-tez beriladigan savollar',
                    'en' => 'Frequently asked questions',
                ],
                'description' => [
                    'ru' => 'Ответы на часто задаваемые вопросы абонентов Perfectum.',
                    'uz' => 'Perfectum abonentlarining tez-tez beriladigan savollariga javoblar.',
                    'en' => 'Answers to frequently asked questions from Perfectum subscribers.',
                ],
                'meta_title' => [
                    'ru' => 'Вопросы и ответы Perfectum',
                    'uz' => 'Perfectum savol va javoblar',
                    'en' => 'Perfectum FAQ',
                ],
                'meta_description' => [
                    'ru' => 'Ответы на популярные вопросы о тарифах, интернете, услугах и мобильной связи Perfectum.',
                    'uz' => 'Perfectum tariflari, interneti, xizmatlari va mobil aloqasi haqida koʻp beriladigan savollarga javoblar.',
                    'en' => 'Answers to popular questions about Perfectum tariffs, internet, services and mobile.',
                ],
                'meta_keywords' => [
                    'ru' => 'FAQ Perfectum, вопросы, интернет, тарифы',
                    'uz' => 'Perfectum FAQ, savollar, internet, tariflar',
                    'en' => 'Perfectum FAQ, questions, internet, tariffs',
                ],
            ],
            PageSettingKey::Contacts->value => [
                'title' => [
                    'ru' => 'Контакты',
                    'uz' => 'Kontaktlar',
                    'en' => 'Contacts',
                ],
                'description' => [
                    'ru' => 'Свяжитесь с нами удобным способом',
                    'uz' => 'Biz bilan qulay usulda bog‘laning',
                    'en' => 'Get in touch with us in a convenient way',
                ],
                'meta_title' => [
                    'ru' => 'Контакты Perfectum — служба поддержки и офисы',
                    'uz' => 'Perfectum kontaktlari — qoʻllab-quvvatlash xizmati va ofislar',
                    'en' => 'Perfectum contacts — support and offices',
                ],
                'meta_description' => [
                    'ru' => 'Контакты Perfectum: телефоны поддержки, офисы обслуживания и информация для абонентов.',
                    'uz' => 'Perfectum kontaktlari: qoʻllab-quvvatlash telefonlari, xizmat ofislari va abonentlar uchun maʼlumot.',
                    'en' => 'Perfectum contacts: support phone numbers, service offices and subscriber info.',
                ],
                'meta_keywords' => [
                    'ru' => 'контакты Perfectum, поддержка, офисы',
                    'uz' => 'Perfectum kontaktlari, qoʻllab-quvvatlash, ofislar',
                    'en' => 'Perfectum contacts, support, offices',
                ],
            ],
            PageSettingKey::Careers->value => [
                'title' => [
                    'ru' => 'Карьера',
                    'uz' => 'Karyera',
                    'en' => 'Career',
                ],
                'description' => [
                    'ru' => 'Открытые вакансии и работа в команде',
                    'uz' => 'Ochiq ish o‘rinlari va jamoada ishlash',
                    'en' => 'Open vacancies and joining the team',
                ],
            ],
            PageSettingKey::About->value => [
                'title' => [
                    'ru' => 'О компании',
                    'uz' => 'Kompaniya haqida',
                    'en' => 'About',
                ],
                'description' => [
                    'ru' => 'История, миссия и команда Perfectum',
                    'uz' => 'Perfectum tarixi, missiyasi va jamoasi',
                    'en' => 'The history, mission and team of Perfectum',
                ],
            ],
            PageSettingKey::Tenders->value => [
                'title' => [
                    'ru' => 'Тендеры',
                    'uz' => 'Tenderlar',
                    'en' => 'Tenders',
                ],
                'description' => [
                    'ru' => '<p>Чтобы получать последние новости о закупках компании, подпишитесь на <a href="https://t.me/Perfectum_Zakupki"><b>наш Telegram-канал</b></a> и <a href="https://www.facebook.com/groups/1103621480683219"><b>страницу Facebook</b></a>.</p>',
                    'uz' => '<p>Kompaniyaning xaridlari haqida soʻnggi maʼlumotlarni olish uchun <a href="https://t.me/Perfectum_Zakupki"><b>Telegram kanalimizga</b></a> va <a href="https://www.facebook.com/groups/1103621480683219"><b>Facebook saxifamizga</b></a> obuna boʻling.</p>',
                    'en' => '<p>To stay up to date with the company\'s procurements, subscribe to our <a href="https://t.me/Perfectum_Zakupki"><b>Telegram channel</b></a> and <a href="https://www.facebook.com/groups/1103621480683219"><b>Facebook page</b></a>.</p>',
                ],
                'meta_description' => [
                    'ru' => 'Актуальные тендеры и закупки компании',
                    'uz' => 'Kompaniyaning dolzarb tenderlari va xaridlari',
                    'en' => 'Current company tenders and procurement',
                ],
            ],
            PageSettingKey::Dealers->value => [
                'title' => [
                    'ru' => 'Дилеры',
                    'uz' => 'Dilerlar',
                    'en' => 'Dealers',
                ],
                'description' => [
                    'ru' => 'Адреса дилеров Perfectum по регионам Узбекистана',
                    'uz' => 'O‘zbekiston bo‘ylab Perfectum dilerlari manzillari',
                    'en' => 'Perfectum dealer locations across Uzbekistan',
                ],
            ],
            PageSettingKey::LegalDocuments->value => [
                'title' => [
                    'ru' => 'Юридические документы',
                    'uz' => 'Yuridik hujjatlar',
                    'en' => 'Legal documents',
                ],
                'description' => [
                    'ru' => 'Политики, лицензии, оферты и другие юридические документы Perfectum.',
                    'uz' => 'Perfectum siyosatlari, litsenziyalari, ofertalari va boshqa yuridik hujjatlari.',
                    'en' => 'Perfectum policies, licences, offers and other legal documents.',
                ],
            ],
        ];

        foreach ($rows as $name => $row) {
            $metaTitle = $row['meta_title']
                ?? array_map(fn (string $title): string => "{$title} | Perfectum", $row['title']);

            PageSetting::updateOrCreate(
                ['name' => $name],
                [
                    'title' => $row['title'],
                    'description' => $row['description'],
                    'meta_title' => $metaTitle,
                    'meta_description' => $row['meta_description'] ?? $row['description'],
                    'meta_keywords' => $row['meta_keywords'] ?? null,
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported ' . count($rows) . ' page settings.');
    }
}
