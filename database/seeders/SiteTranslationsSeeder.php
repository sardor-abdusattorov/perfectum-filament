<?php

namespace Database\Seeders;

use App\Models\SiteTranslation;
use Illuminate\Database\Seeder;

class SiteTranslationsSeeder extends Seeder
{
    public function run(): void
    {
        $translations = [
            [
                'category' => 'common', 'key' => 'empty',
                'value' => [
                    'ru' => 'Ничего не найдено',
                    'uz' => 'Hech narsa topilmadi',
                    'en' => 'Nothing found',
                ],
            ],
            [
                'category' => 'app', 'key' => 'about_us',
                'value' => [
                    'ru' => 'О нас',
                    'uz' => 'Biz haqimizda',
                    'en' => 'About us',
                ],
            ],
            [
                'category' => 'app', 'key' => 'footer_copyright',
                'value' => [
                    'ru' => 'ООО «RWC» (торговая марка Perfectum) | Услуги предоставляются на основании лицензии | Цены указаны с учётом дополнительных налогов.',
                    'uz' => 'MChJ "RWC" (Perfectum savdo belgisi) | Xizmatlar litsenziyaga ega | Narxlar qo\'shimcha soliqlarni hisobga olganda.',
                    'en' => 'RWC LLC (Perfectum trademark) | Services provided under license | Prices include applicable taxes.',
                ],
            ],
            [
                'category' => 'app', 'key' => 'social_links',
                'value' => [
                    'ru' => 'Социальные сети',
                    'uz' => 'Ijtimoiy tarmoqlar',
                    'en' => 'Social media',
                ],
            ],
            [
                'category' => 'app', 'key' => 'mobile_apps',
                'value' => [
                    'ru' => 'Мобильные приложения',
                    'uz' => 'Mobil ilovalar',
                    'en' => 'Mobile apps',
                ],
            ],
            [
                'category' => 'app', 'key' => 'home_internet',
                'value' => [
                    'ru' => 'Домашний интернет',
                    'uz' => 'Uy interneti',
                    'en' => 'Home internet',
                ],
            ],
            [
                'category' => 'app', 'key' => 'for_abonents',
                'value' => [
                    'ru' => 'Абонентам',
                    'uz' => 'Abonentlarga',
                    'en' => 'For subscribers',
                ],
            ],
            [
                'category' => 'app', 'key' => 'useful',
                'value' => [
                    'ru' => 'Полезное',
                    'uz' => 'Foydali',
                    'en' => 'Useful',
                ],
            ],
            [
                'category' => 'app', 'key' => 'information',
                'value' => [
                    'ru' => 'Информация',
                    'uz' => 'Ma`lumot',
                    'en' => 'Information',
                ],
            ],
            [
                'category' => 'app', 'key' => 'my_cabinet',
                'value' => [
                    'ru' => 'Личный кабинет',
                    'uz' => 'Shaxsiy kabinet',
                    'en' => 'My account',
                ],
            ],
            [
                'category' => 'app', 'key' => 'how_to_connect',
                'value' => [
                    'ru' => 'Подключение ',
                    'uz' => 'Ulanish',
                    'en' => 'Connect',
                ],
            ],
        ];

        foreach ($translations as $row) {
            SiteTranslation::updateOrCreate(
                ['category' => $row['category'], 'key' => $row['key']],
                [
                    'value' => $row['value'],
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported ' . count($translations) . ' site translations.');
    }
}
