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
            [
                'category' => 'app', 'key' => 'faq',
                'value' => [
                    'ru' => 'Часто задаваемые вопросы',
                    'uz' => 'Tez-tez beriladigan savollar',
                    'en' => 'Frequently asked questions',
                ],
            ],
            [
                'category' => 'app', 'key' => 'free_numbers',
                'value' => [
                    'ru' => 'Свободные номера',
                    'uz' => 'Bo‘sh raqamlar',
                    'en' => 'Available numbers',
                ],
            ],
            [
                'category' => 'app', 'key' => 'contacts',
                'value' => [
                    'ru' => 'Связь с нами',
                    'uz' => 'Biz bilan bog‘lanish',
                    'en' => 'Contact us',
                ],
            ],
            [
                'category' => 'app', 'key' => 'tender_text',
                'value' => [
                    'ru' => '<p style="text-align: right; line-height: normal;">Подписывайтесь на наш <a href="https://t.me/Perfectum_Zakupki"><b>Телеграм канал</b></a> и <a href="https://www.facebook.com/groups/1103621480683219"><b>Facebook группу</b></a> <br>чтобы получать актуальную информацию о закупках компании</p>',
                    'uz' => '<p style="text-align: right; line-height: normal;">Kompaniyaning xaridlari haqida dolzarb ma‘lumotlarni olish uchun <a href="https://t.me/Perfectum_Zakupki"><b>Telegram kanalimizga</b></a> va <a href="https://www.facebook.com/groups/1103621480683219"><b>Facebook guruhimizga</b></a> <br>obuna bo‘ling.</p>',
                    'en' => '<p style="text-align: right; line-height: normal;">Follow our <a href="https://t.me/Perfectum_Zakupki"><b>Telegram channel</b></a> and <a href="https://www.facebook.com/groups/1103621480683219"><b>Facebook group</b></a> <br>to receive up-to-date information about company procurements.</p>',
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
