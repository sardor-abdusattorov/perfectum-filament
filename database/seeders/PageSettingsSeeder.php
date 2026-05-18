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
                'meta_title' => [
                    'ru' => 'Perfectum — оператор связи 5G Standalone',
                    'uz' => 'Perfectum — 5G Standalone aloqa operatori',
                    'en' => 'Perfectum — 5G Standalone telecom operator',
                ],
                'description' => [
                    'ru' => 'Высокоскоростной мобильный и домашний интернет на базе сети 5G Standalone',
                    'uz' => '5G Standalone tarmog‘iga asoslangan yuqori tezlikdagi mobil va uy interneti',
                    'en' => 'High-speed mobile and home internet powered by a 5G Standalone network',
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
            PageSettingKey::Faq->value => [
                'title' => [
                    'ru' => 'Вопросы и ответы',
                    'uz' => 'Savol-javoblar',
                    'en' => 'FAQ',
                ],
                'description' => [
                    'ru' => 'Ответы на частые вопросы абонентов Perfectum.',
                    'uz' => 'Perfectum abonentlarining tez-tez beriladigan savollariga javoblar.',
                    'en' => 'Answers to common questions from Perfectum subscribers.',
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
            ],
            PageSettingKey::FreeNumbers->value => [
                'title' => [
                    'ru' => 'Свободные номера',
                    'uz' => 'Bo‘sh raqamlar',
                    'en' => 'Free numbers',
                ],
                'description' => [
                    'ru' => 'Подберите красивый номер для себя',
                    'uz' => 'O‘zingizga chiroyli raqam tanlang',
                    'en' => 'Pick a beautiful number for yourself',
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
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported ' . count($rows) . ' page settings.');
    }
}
