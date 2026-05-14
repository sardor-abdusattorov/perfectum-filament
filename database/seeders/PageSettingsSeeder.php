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
                    'ru' => 'Карьера | Perfectum',
                    'uz' => 'Karyera | Perfectum',
                    'en' => 'Career | Perfectum',
                ],
                'description' => [
                    'ru' => 'Открытые вакансии и работа в команде',
                    'uz' => 'Ochiq ish o‘rinlari va jamoada ishlash',
                    'en' => 'Open vacancies and joining the team',
                ],
            ],
            PageSettingKey::Contacts->value => [
                'title' => [
                    'ru' => 'Контакты | Perfectum',
                    'uz' => 'Kontaktlar | Perfectum',
                    'en' => 'Contacts | Perfectum',
                ],
                'description' => [
                    'ru' => 'Свяжитесь с нами удобным способом',
                    'uz' => 'Biz bilan qulay usulda bog‘laning',
                    'en' => 'Get in touch with us in a convenient way',
                ],
            ],
            PageSettingKey::About->value => [
                'title' => [
                    'ru' => 'О компании | Perfectum',
                    'uz' => 'Kompaniya haqida | Perfectum',
                    'en' => 'About | Perfectum',
                ],
                'description' => [
                    'ru' => 'История, миссия и команда Perfectum',
                    'uz' => 'Perfectum tarixi, missiyasi va jamoasi',
                    'en' => 'The history, mission and team of Perfectum',
                ],
            ],
            PageSettingKey::Tenders->value => [
                'title' => [
                    'ru' => 'Тендеры | Perfectum',
                    'uz' => 'Tenderlar | Perfectum',
                    'en' => 'Tenders | Perfectum',
                ],
                'description' => [
                    'ru' => 'Актуальные тендеры и закупки компании',
                    'uz' => 'Kompaniyaning dolzarb tenderlari va xaridlari',
                    'en' => 'Current company tenders and procurement',
                ],
            ],
            PageSettingKey::Tariffs->value => [
                'title' => [
                    'ru' => 'Тарифы | Perfectum',
                    'uz' => 'Tariflar | Perfectum',
                    'en' => 'Tariffs | Perfectum',
                ],
                'description' => [
                    'ru' => 'Выберите подходящий тарифный план',
                    'uz' => 'O‘zingizga mos tarif rejasini tanlang',
                    'en' => 'Choose the tariff plan that suits you',
                ],
            ],
            PageSettingKey::Services->value => [
                'title' => [
                    'ru' => 'Услуги | Perfectum',
                    'uz' => 'Xizmatlar | Perfectum',
                    'en' => 'Services | Perfectum',
                ],
                'description' => [
                    'ru' => 'Дополнительные услуги и опции',
                    'uz' => 'Qo‘shimcha xizmatlar va imkoniyatlar',
                    'en' => 'Additional services and options',
                ],
            ],
            PageSettingKey::News->value => [
                'title' => [
                    'ru' => 'Новости | Perfectum',
                    'uz' => 'Yangiliklar | Perfectum',
                    'en' => 'News | Perfectum',
                ],
                'description' => [
                    'ru' => 'Последние новости и события компании',
                    'uz' => 'Kompaniyaning so‘nggi yangiliklari va voqealari',
                    'en' => 'Latest company news and events',
                ],
            ],
            PageSettingKey::Coverage->value => [
                'title' => [
                    'ru' => 'Зона покрытия | Perfectum',
                    'uz' => 'Qamrov hududi | Perfectum',
                    'en' => 'Coverage area | Perfectum',
                ],
                'description' => [
                    'ru' => 'Проверьте покрытие сети в вашем районе',
                    'uz' => 'Hududingizdagi tarmoq qamrovini tekshiring',
                    'en' => 'Check network coverage in your area',
                ],
            ],
            PageSettingKey::FreeNumbers->value => [
                'title' => [
                    'ru' => 'Свободные номера | Perfectum',
                    'uz' => 'Bo‘sh raqamlar | Perfectum',
                    'en' => 'Free numbers | Perfectum',
                ],
                'description' => [
                    'ru' => 'Подберите красивый номер для себя',
                    'uz' => 'O‘zingizga chiroyli raqam tanlang',
                    'en' => 'Pick a beautiful number for yourself',
                ],
            ],
        ];

        foreach ($rows as $name => $row) {
            PageSetting::updateOrCreate(
                ['name' => $name],
                [
                    'title' => $row['title'],
                    'description' => $row['description'],
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported ' . count($rows) . ' page settings.');
    }
}
