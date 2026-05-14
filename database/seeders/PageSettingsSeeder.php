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
            PageSettingKey::Faq->value => [
                'title' => [
                    'ru' => 'Часто задаваемые вопросы',
                    'uz' => 'Ko‘p so‘raladigan savollar',
                    'en' => 'Frequently asked questions',
                ],
                'description' => [
                    'ru' => 'Ответы на популярные вопросы',
                    'uz' => 'Ommabop savollarga javoblar',
                    'en' => 'Answers to common questions',
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
            PageSettingKey::Career->value => [
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
