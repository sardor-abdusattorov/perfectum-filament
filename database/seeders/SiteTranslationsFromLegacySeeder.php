<?php

namespace Database\Seeders;

use App\Models\SiteTranslation;
use Illuminate\Database\Seeder;

/**
 * Импорт 80 переводов из старой perfectum_db.language_lines
 * в текущую site_translations.
 *
 * Маппинг колонок:
 *   group  -> category    (все записи в исходнике group='*', переименовали в 'common')
 *   key    -> key
 *   text   -> value        (JSON {uz, ru, en?} — Spatie HasTranslations пишет как есть)
 *   -      -> is_published (по умолчанию TRUE)
 *
 * Идемпотентен: updateOrCreate по (category, key).
 * В исходнике есть дубль ключа 'connect_anyway' (id 16 и 38) —
 * второе значение перезапишет первое.
 */
class SiteTranslationsFromLegacySeeder extends Seeder
{
    public function run(): void
    {
        $category = 'common';

        $translations = [
            ['personal_cabinet', ['uz' => 'Shaxsiy kabinet', 'ru' => 'Персональный кабинет']],
            ['tariffs', ['uz' => 'Tariflar', 'ru' => 'Тарифы']],
            ['services', ['uz' => 'Xizmatlar', 'ru' => 'Услуги']],
            ['device', ['uz' => 'Uskunalar', 'ru' => 'Устройства']],
            ['actions', ['uz' => 'Aksiyalar', 'ru' => 'Акции']],
            ['news', ['uz' => 'Yangiliklar', 'ru' => 'Новости']],
            ['beautiful_numbers', ['uz' => "Bo'sh raqamlar", 'ru' => 'Свободные номера']],
            ['help', ['uz' => 'Yordam', 'ru' => 'Помощь']],
            ['search', ['uz' => 'Qidiruv', 'ru' => 'Найти']],
            ['captcha', ['uz' => "Kaptchani to'g'riligini tekshiring", 'ru' => 'Проверить правильность капчи', 'en' => 'Check the correctness of the captcha']],
            ['client_comment', ['uz' => 'Murojaatingiz qabul qilindi', 'ru' => 'Ваша заявка принята', 'en' => 'Your application has been accepted']],
            ['no_data_found', ['uz' => "Sizning so'rovingiz bo'yicha ma'lumot topilmadi!", 'ru' => 'По вашему запросу данные не найдены!', 'en' => 'No data found by your request!']],
            ['more', ['uz' => 'Batafsil', 'ru' => 'Подробнее', 'en' => 'More']],
            ['mobile_apps', ['uz' => 'Mobil ilovalar', 'ru' => 'Мобильное приложение', 'en' => 'Mobile apps']],
            ['socials', ['uz' => 'Ijtimoiy tarmoqlar', 'ru' => 'Социальные сети', 'en' => 'Socials']],
            ['connect', ['uz' => 'Ulanish', 'ru' => 'Подключить', 'en' => 'Connect']],
            ['billing_service', ['uz' => 'Tarif xizmatlari', 'ru' => 'Тариф. услуги', 'en' => 'Bill. services']],
            ['subscription_payment', ['uz' => "Abonent to'lovi", 'ru' => 'Абонент. плата', 'en' => 'Subsc. price']],
            ['call', ['uz' => 'Chaqiruv', 'ru' => 'Наберите', 'en' => 'Call']],
            ['connection_price', ['uz' => 'Ulanish narxi', 'ru' => 'Стоимость подключения', 'en' => 'Connection price']],
            ['through_uzbekistan', ['uz' => "O'zbekiston bo'yicha", 'ru' => 'по Узбекистану', 'en' => 'through Uzbekistan']],
            ['through_uzbekistan_outgoing', ['uz' => 'O`zbekiston bo`yicha chiqish', 'ru' => 'Исходящие по Узбекистану', 'en' => 'Out. calls in Uzbekistan']],
            ['search_through_site', ['uz' => "Sayt bo'yicha qidiruv", 'ru' => 'Поиск по сайту', 'en' => 'Search through site']],
            ['search_result', ['uz' => 'Qidiruv natijalari:', 'ru' => 'Результаты поиска:', 'en' => 'Search results:']],
            ['all', ['uz' => 'Barchasi', 'ru' => 'Все', 'en' => 'All']],
            ['how_to_become_corporate_client', ['uz' => 'Qanday qilib korporativ mijozga aylanish mumkin', 'ru' => 'Как стать корпоративным клиентом', 'en' => 'How to become a corporate client']],
            ['for_corporate_clients', ['uz' => 'Korporativ mijozlarga', 'ru' => 'Корпоративным клиентам', 'en' => 'For corporate clients']],
            ['privileges', ['uz' => 'Afzalliklar', 'ru' => 'Привилегии', 'en' => 'Privileges']],
            ['for_perfectum_abonents', ['uz' => 'Perfectum abonentlari uchun', 'ru' => 'для абонентов Perfectum)', 'en' => 'For abonents Perfectum']],
            ['page_under', ['uz' => 'Sahifa ishlab chiqish', 'ru' => 'Страница - на стадии', 'en' => 'Page is under']],
            ['development_under', ['uz' => 'Jarayonida', 'ru' => 'Разработки', 'en' => 'Development']],
            ['number_field_required', ['uz' => 'Raqamni kiriting!', 'ru' => 'Введите номер!', 'en' => 'Please enter the number!']],
            ['outgoing_within_uzbekistan', ['uz' => 'Raqamni kiriting!', 'ru' => 'Введите номер!', 'en' => 'Please enter the number!']],
            ['archive_tariffs', ['uz' => 'Arxif tariflari', 'ru' => 'Архивные тарифы', 'en' => 'Archive tariffs']],
            ['mob_ios', ['uz' => 'Mob. ilova (IOS)', 'ru' => 'Моб. приложение (IOS)', 'en' => 'Archive tariffs']],
            ['mob_android', ['uz' => 'Mob. ilova (Android)', 'ru' => 'Моб. приложение (Android)', 'en' => 'Archive tariffs']],
            ['connect_anyway', ['uz' => 'Tarifni istalgan usulda ulashingiz mumkin', 'ru' => 'Подключить тариф можно любым способом', 'en' => 'Archive tariffs']],
            ['main', ['uz' => 'Asosiy', 'ru' => 'Главная', 'en' => 'Archive tariffs']],
            ['old_website', ['uz' => 'Eski sayt', 'ru' => 'Старый сайт']],
            ['email_for_complaints', ['uz' => 'Shikoyat va murojaatlar uchun elektron pochta', 'ru' => ' Горячая линия для жалоб и обращений']],
            ['tender', ['uz' => 'Tenderlar', 'ru' => 'Тендеры', 'en' => 'Tenders']],
            ['zakupki', ['uz' => 'Xaridlar', 'ru' => 'Закупки', 'en' => 'Sales']],
            ['kontakty', ['uz' => 'Kontaktlar', 'ru' => 'Контакты', 'en' => 'Contacts']],
            ['karera', ['uz' => 'Karyera', 'ru' => 'Карьера', 'en' => 'Career']],
            ['still', ['uz' => "Ko'proq...", 'ru' => 'Еще...', 'en' => 'Still...']],
            ['about', ['uz' => 'Biz haqida', 'ru' => 'О нас', 'en' => 'About us']],
            ['otkrytye_dannye', ['uz' => "Ochiq ma'lumotlar", 'ru' => 'Открытые данные', 'en' => 'Open data']],
            ['faq', ['uz' => 'FAQ', 'ru' => 'FAQ', 'en' => 'FAQ']],
            ['yuridiceskie_dokumenty', ['uz' => 'Yuridik hujjatlar', 'ru' => 'Юридические документы', 'en' => 'Legal documents']],
            ['ofisy_prodaj', ['uz' => 'Savdo ofislari', 'ru' => 'Офисы продаж', 'en' => 'Sales offices']],
            ['zona_pokrytiya', ['uz' => 'Qamrov xaritasi', 'ru' => 'Карта покрытия', 'en' => 'Сover zone']],
            ['home_internet', ['uz' => 'Uy internet', 'ru' => 'Домашний интернет', 'en' => 'Home Internet']],
            ['mobile_communication', ['uz' => 'Mobil aloqa', 'ru' => 'Мобильная связь', 'en' => 'Mobile communication']],
            ['to_enter', ['uz' => 'Shaxsiy kabinet', 'ru' => 'Личный кабинет', 'en' => 'To enter']],
            ['to_connected', ['uz' => 'Ulanish', 'ru' => 'Подключиться', 'en' => 'To be connected']],
            ['site_language', ['uz' => 'Sayt tili:', 'ru' => 'Язык сайта:', 'en' => 'Site language:']],
            ['popular_services', ['uz' => 'Ommabop xizmatlar', 'ru' => 'Популярные услуги', 'en' => 'Popular services']],
            ['all_tariffs', ['uz' => 'Barcha tariflar', 'ru' => 'Все тарифы', 'en' => 'All tariffs']],
            ['archive_actions', ['uz' => 'Aksiyalar arxivi', 'ru' => 'Архив акций', 'en' => 'Stock Archive']],
            ['all_services', ['uz' => 'Barcha xizmatlar', 'ru' => 'Все услуги', 'en' => 'All services']],
            ['main_services_title', ['uz' => 'Abonentlar uchun xizmatlarimiz', 'ru' => 'Наши услуги для абонентов', 'en' => 'Our services for subscribers']],
            ['footer_about_us', ['uz' => 'Biz haqimizda', 'ru' => 'Подробнее о нас', 'en' => 'About us']],
            ['footer_main_office', ['uz' => 'Bosh ofis', 'ru' => 'Головной офис', 'en' => 'Head office']],
            ['footer_phone_support', ['uz' => "Qo'llab-quvvatlash telefonlari", 'ru' => 'Телефоны поддержки', 'en' => 'Support phones']],
            ['footer_for_perfectum', ['uz' => 'Perfectum abonentlari uchun', 'ru' => 'Для абонентов Perfectum', 'en' => 'For Perfectum subscribers']],
            ['footer_for_info', ['uz' => "Ma'lumot olish uchun", 'ru' => 'Для получения информации', 'en' => 'For information']],
            ['cta_main_title', ['uz' => 'Xizmatlarimizdan foydalanishni boshlamoqchimisiz?', 'ru' => 'Хотите начать пользоваться нашими услугами?', 'en' => 'Would you like to start using our services?']],
            ['cta_main_teaser', ['uz' => "Biz bilan bog'laning va biz barcha savollarga javob beramiz va ulanishda yordam beramiz", 'ru' => 'Свяжитесь с нами и мы ответим на все возникшие вопросы и поможем с подключением', 'en' => 'Contact us and we will answer all questions and help with connection']],
            ['cta_main_button', ['uz' => 'Biz bilan aloqa qilish', 'ru' => 'Связаться с нами', 'en' => 'Contact us']],
            ['all_news', ['uz' => 'Barcha yangiliklarga', 'ru' => 'Ко всем новостям', 'en' => 'To all news']],
            ['title_catalog_devices', ['uz' => 'Uskunalar katalogi', 'ru' => 'Каталог устройств', 'en' => 'Device Catalog']],
            ['title_loyalty_program', ['uz' => 'Sodiqlik dasturi', 'ru' => 'Программа лояльности', 'en' => 'Loyalty program']],
            ['header_title_banner', ['uz' => 'Cheksiz internet trafigi', 'ru' => 'Безлимитный интернет трафик', 'en' => 'Unlimited Internet traffic']],
            ['header_teaser_banner', ['uz' => ' 5G SA bilan cheksiz trafik', 'ru' => 'Бесконечное количество трафика с 5G SA', 'en' => 'Endless traffic with 5G SA phones']],
            ['header_menu_free_numbers', ['uz' => "Bo'sh raqamlar", 'ru' => 'Свободные номера', 'en' => 'Free numbers']],
            ['internet_traffic', ['uz' => 'Internet Trafik', 'ru' => 'Трафик Интернета', 'en' => 'Internet traffic']],
            ['internet_access_speed_title', ['uz' => 'Internetning kirish tezligi*', 'ru' => 'Входящая скорость интернета*', 'en' => 'Internet access speed']],
            ['tariffs_devices_title', ['uz' => 'Tez internet yaqin. Har qanday holat uchun mos qurilma.', 'ru' => 'Быстрый интернет рядом. Устройство на любой случай.', 'en' => 'Fast internet nearby. A device for any occasion.']],
            ['tariffs_devices_teaser', ['uz' => "Uyda, dachada yoki yo'lda tezkor internet - SIM-karta orqali ulanadigan qurilmani tanlang.", 'ru' => 'Быстрый интернет дома, на даче или в дороге — выберите устройство, которое подключается через SIM-карту.', 'en' => 'Fast Internet at home, in the country or on the road - choose a device that connects via a SIM card.']],
        ];

        foreach ($translations as [$key, $value]) {
            SiteTranslation::updateOrCreate(
                ['category' => $category, 'key' => $key],
                ['value' => $value, 'is_published' => true],
            );
        }

        $this->command?->info('Imported ' . count($translations) . ' site translations into category "' . $category . '".');
    }
}
