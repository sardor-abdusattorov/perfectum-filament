<?php

namespace Database\Seeders;

use App\Models\Settings;
use App\Models\SiteSettings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $structured = [
            'seo.title' => [
                'ru' => 'Perfectum — оператор связи 5G Standalone в Узбекистане',
                'uz' => 'Perfectum — Oʻzbekistondagi 5G Standalone aloqa operatori',
                'en' => 'Perfectum — 5G Standalone telecom operator in Uzbekistan',
            ],
            'seo.description' => [
                'ru' => 'Perfectum — высокоскоростной мобильный и домашний интернет на базе сети 5G Standalone. Тарифы, красивые номера, зона покрытия по всему Узбекистану.',
                'uz' => 'Perfectum — 5G Standalone tarmogʻiga asoslangan yuqori tezlikdagi mobil va uy interneti. Tariflar, chiroyli raqamlar va Oʻzbekiston boʻylab qamrov hududi.',
                'en' => 'Perfectum — high-speed mobile and home internet powered by a 5G Standalone network. Tariffs, premium numbers and coverage across Uzbekistan.',
            ],
            'seo.keywords' => [
                'ru' => 'Perfectum, 5G, 5G Standalone, интернет, мобильная связь, тарифы, красивые номера, Узбекистан, Ташкент',
                'uz' => 'Perfectum, 5G, 5G Standalone, internet, mobil aloqa, tariflar, chiroyli raqamlar, Oʻzbekiston, Toshkent',
                'en' => 'Perfectum, 5G, 5G Standalone, internet, mobile, tariffs, premium numbers, Uzbekistan, Tashkent',
            ],
            'seo.indexing_enabled' => true,
            'seo.og_image' => null,
            'metrics.yandex' => null,
            'metrics.google' => null,
            'site.name' => [
                'ru' => 'Perfectum',
                'uz' => 'Perfectum',
                'en' => 'Perfectum',
            ],
            'contacts.address' => [
                'ru' => 'Узбекистан, Ташкент, ул. Тараса Шевченко 21',
                'uz' => "O'zbekiston, Toshkent shahri, Taras Shevchenko ko'chasi 21",
                'en' => 'Uzbekistan, Tashkent, Taras Shevchenko street 21',
            ],
            'contacts.working_plan' => [
                'ru' => 'пн-сб. 8:00 - 19:00',
                'uz' => 'dushanba-shanba 8:00 - 20:00',
                'en' => 'Mon-Sat 8:00 - 19:00',
            ],
            'footer.text' => [
                'ru' => 'OOO "RWC" (Торговая марка Perfectum) | Все права защищены | Услуги лицензированы | Цены указаны с учетом всех налогов.',
                'uz' => 'MChJ "RWC" (Perfectum savdo belgisi) | Xizmatlar litsenziyaga ega | Narxlar qo\'shimcha soliqlarni hisobga olganda.',
                'en' => 'RWC LLC (Perfectum trademark) | All rights reserved | Services are licensed | Prices include all applicable taxes.',
            ],
            'footer.free_numbers_text' => [
                'ru' => '<p><a href="http://www.perfectum.uz/service-show/nomer-v-rassrocku"><span style="color:rgb(230,0,0);">«Номер в рассрочку»</span></a><span style="color:rgb(77,77,77);">&nbsp;</span><span style="color:hsl(0,0%,30%);">(на 6 или 12 мес.) номиналом от 100 000 сум</span><br><br><span style="color:hsl(0,0%,30%);">Акция</span><span style="color:rgb(98,98,98);">&nbsp;</span><a href="https://www.perfectum.uz/actions-show/akciya-skidki-na-nomera-do-90-prodolzaetsya-1"><span style="color:rgb(230,0,0);">«Скидки на номера до -90%!»</span></a><br><br><span style="color:hsl(240,75%,60%);">50% скидка на красивые номера:&nbsp;</span><br><span style="color:hsl(0,0%,30%);">50 000 000 сум (было 100 000 000 сум): 98 020 2222, 98 727 0000, 98 727 2222, 98 877 0000</span></p>',
                'uz' => '<p><a href="http://www.perfectum.uz/service-show/nomer-v-rassrocku"><span style="color:rgb(230,0,0);">«Muddatli to\'lovga raqam»</span></a><span style="color:rgb(116,116,116);"> </span><span style="color:hsl(0,0%,30%);">(6 yoki 12 oyga) nominal qiymati 100 000 so\'mdan va yuqori!</span><br><br><span style="color:hsl(0,0%,30%);">Aksiya -</span><span style="color:rgb(116,116,116);"> </span><a href="https://perfectum.uz/actions-show/raqamlarga-chegirmalar-90-gacha-aksiyasi-davom-etadi-1"><span style="color:rgb(230,0,0);">«Raqamlarga chegirmalar!»</span></a><br><br><span style="color:hsl(240,75%,60%);">50% chegirma chiroyli raqamlarga:</span><br>50 000 000 so‘m (oldin 100 000 000 so‘m edi): 98 020 2222, 98 727 0000, 98 727 2222, 98 877 0000;</p>',
                'en' => '<p><a href="http://www.perfectum.uz/service-show/nomer-v-rassrocku"><span style="color:rgb(230,0,0);">«Number in installments»</span></a><span style="color:rgb(77,77,77);">&nbsp;</span><span style="color:hsl(0,0%,30%);">(6 or 12 months) starting from 100,000 UZS</span><br><br><span style="color:hsl(0,0%,30%);">Promotion</span><span style="color:rgb(98,98,98);">&nbsp;</span><a href="https://www.perfectum.uz/actions-show/akciya-skidki-na-nomera-do-90-prodolzaetsya-1"><span style="color:rgb(230,0,0);">«Discounts on numbers up to -90%!»</span></a><br><br><span style="color:hsl(240,75%,60%);">50% off on premium numbers:&nbsp;</span><br><span style="color:hsl(0,0%,30%);">50,000,000 UZS (was 100,000,000 UZS): 98 020 2222, 98 727 0000, 98 727 2222, 98 877 0000</span></p>',
            ],
            'branding.logo_header' => null,
            'branding.logo_footer' => null,
            'map.coordinates' => [
                'lat' => 41.29751400,
                'lng' => 69.28066500,
            ],
        ];

        foreach ($structured as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $subKey => $subValue) {
                    Settings::set("{$key}.{$subKey}", $subValue);
                }

                continue;
            }

            Settings::set($key, $value);
        }

        $contacts = [
            'phone_main' => '+998 98 127 0077',
            'phone_secondary' => '+998 98 305 1111',
            'short_numbers' => '077',
            'email_main' => 'info@perfectum.uz',
            'app_google_play' => 'https://play.google.com/store/apps/details?id=com.globalsolutions.perfectum&hl=ru&gl=US',
            'app_app_store' => 'https://apps.apple.com/us/app/perfectum/id1148581807',
            'lk_url' => 'https://lk.perfectum.uz',
        ];

        foreach ($contacts as $name => $value) {
            SiteSettings::updateOrCreate(
                ['name' => $name],
                ['value' => $value, 'is_published' => true],
            );
        }

        clear_settings_cache();
        clear_site_settings_cache();

        $this->command?->info('Imported settings: ' . (count($structured) + count($contacts)) . ' keys.');
    }
}
