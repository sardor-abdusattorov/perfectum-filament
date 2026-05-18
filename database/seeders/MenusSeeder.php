<?php

namespace Database\Seeders;

use App\Enums\MenuPosition;
use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            // ---- Header Top ----
            [
                'id' => 1, 'parent_id' => null, 'position' => MenuPosition::HeaderTop->value, 'footer_column' => null,
                'name' => ['ru' => 'Карьера', 'uz' => 'Karyera', 'en' => 'Careers'],
                'url' => '/careers', 'sort' => 1,
            ],
            [
                'id' => 2, 'parent_id' => null, 'position' => MenuPosition::HeaderTop->value, 'footer_column' => null,
                'name' => ['ru' => 'Контакты', 'uz' => 'Kontaktlar', 'en' => 'Contacts'],
                'url' => '/contacts', 'sort' => 2,
            ],
            [
                'id' => 3, 'parent_id' => null, 'position' => MenuPosition::HeaderTop->value, 'footer_column' => null,
                'name' => ['ru' => 'Ещё...', 'uz' => "Ko'proq...", 'en' => 'More...'],
                'url' => '#', 'sort' => 3,
            ],
            [
                'id' => 4, 'parent_id' => 3, 'position' => MenuPosition::HeaderTop->value, 'footer_column' => null,
                'name' => ['ru' => 'О нас', 'uz' => 'Biz haqimizda', 'en' => 'About us'],
                'url' => '/about', 'sort' => 1,
            ],
            [
                'id' => 5, 'parent_id' => 3, 'position' => MenuPosition::HeaderTop->value, 'footer_column' => null,
                'name' => ['ru' => 'Закупки', 'uz' => 'Xaridlar', 'en' => 'Tenders'],
                'url' => '/tenders', 'sort' => 2,
            ],
            [
                'id' => 6, 'parent_id' => 3, 'position' => MenuPosition::HeaderTop->value, 'footer_column' => null,
                'name' => ['ru' => 'FAQ', 'uz' => 'FAQ', 'en' => 'FAQ'],
                'url' => '/faq', 'sort' => 3,
            ],
            [
                'id' => 7, 'parent_id' => 3, 'position' => MenuPosition::HeaderTop->value, 'footer_column' => null,
                'name' => ['ru' => 'Юридические документы', 'uz' => 'Yuridik hujjatlar', 'en' => 'Legal documents'],
                'url' => '/legal', 'sort' => 4,
            ],

            // ---- Footer column 1 — Uy interneti ----
            [
                'id' => 8, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 1,
                'name' => ['ru' => 'Зона покрытия', 'uz' => 'Qamrov zonasi', 'en' => 'Coverage area'],
                'url' => '/#', 'sort' => 1,
            ],
            [
                'id' => 9, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 1,
                'name' => ['ru' => 'Офисы продаж', 'uz' => 'Sotuv ofislari', 'en' => 'Sales offices'],
                'url' => '/#', 'sort' => 2,
            ],
            [
                'id' => 10, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 1,
                'name' => ['ru' => 'Личный кабинет', 'uz' => 'Shaxsiy kabinet', 'en' => 'Personal account'],
                'url' => '/#', 'sort' => 3,
            ],

            // ---- Footer column 2 — Abonentlarga ----
            [
                'id' => 11, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 2,
                'name' => ['ru' => 'Тарифы', 'uz' => 'Tariflar', 'en' => 'Tariffs'],
                'url' => '/#', 'sort' => 1,
            ],
            [
                'id' => 12, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 2,
                'name' => ['ru' => 'Корпоративным клиентам', 'uz' => 'Korporativ mijozlarga', 'en' => 'For corporate clients'],
                'url' => '/#', 'sort' => 2,
            ],
            [
                'id' => 13, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 2,
                'name' => ['ru' => 'Услуги', 'uz' => 'Xizmatlar', 'en' => 'Services'],
                'url' => '/#', 'sort' => 3,
            ],
            [
                'id' => 14, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 2,
                'name' => ['ru' => 'Свободные номера', 'uz' => 'Bo`sh raqamlar', 'en' => 'Available numbers'],
                'url' => '/#', 'sort' => 4,
            ],
            [
                'id' => 15, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 2,
                'name' => ['ru' => 'Оборудование', 'uz' => 'Uskunalar', 'en' => 'Equipment'],
                'url' => '/#', 'sort' => 5,
            ],
            [
                'id' => 16, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 2,
                'name' => ['ru' => 'Сегодня в продаже', 'uz' => 'Bugun sotuvda', 'en' => 'On sale today'],
                'url' => '/#', 'sort' => 6,
            ],
            [
                'id' => 17, 'parent_id' => null, 'position' => MenuPosition::HeaderMain->value, 'footer_column' => null,
                'name' => ['ru' => 'Зона покрытия', 'uz' => 'Qamrov hududi', 'en' => 'Coverage area'],
                'url' => '/#', 'sort' => 7,
            ],

            // ---- Footer column 3 — Foydali ----
            [
                'id' => 18, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 3,
                'name' => ['ru' => 'Акции', 'uz' => 'Aksiyalar', 'en' => 'Promotions'],
                'url' => '/#', 'sort' => 1,
            ],
            [
                'id' => 19, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 3,
                'name' => ['ru' => 'Новости', 'uz' => 'Yangiliklar', 'en' => 'News'],
                'url' => '/news', 'sort' => 2,
            ],
            [
                'id' => 20, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 3,
                'name' => ['ru' => 'Офисы', 'uz' => 'Ofislar', 'en' => 'Offices'],
                'url' => '/#', 'sort' => 3,
            ],
            [
                'id' => 21, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 3,
                'name' => ['ru' => 'Дилеры', 'uz' => 'Dilerlar', 'en' => 'Dealers'],
                'url' => '/#', 'sort' => 4,
            ],
            [
                'id' => 22, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 3,
                'name' => ['ru' => 'Как подключиться', 'uz' => 'Qanday ulanish kerak', 'en' => 'How to connect'],
                'url' => '/#', 'sort' => 5,
            ],
            [
                'id' => 23, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 3,
                'name' => ['ru' => 'Полезно знать', 'uz' => 'Bilish foydali', 'en' => 'Useful to know'],
                'url' => '/#', 'sort' => 6,
            ],

            // ---- Footer column 4 — Ma`lumot ----
            [
                'id' => 24, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 4,
                'name' => ['ru' => 'Закупки', 'uz' => 'Xaridlar', 'en' => 'Tenders'],
                'url' => '/tenders', 'sort' => 1,
            ],
            [
                'id' => 25, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 4,
                'name' => ['ru' => 'Карьера', 'uz' => 'Karyera', 'en' => 'Careers'],
                'url' => '/careers', 'sort' => 2,
            ],
            [
                'id' => 26, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 4,
                'name' => ['ru' => 'Контакты', 'uz' => 'Kontaktlar', 'en' => 'Contacts'],
                'url' => '/contacts', 'sort' => 3,
            ],
            [
                'id' => 27, 'parent_id' => null, 'position' => MenuPosition::Footer->value, 'footer_column' => 4,
                'name' => ['ru' => 'Юридические документы', 'uz' => 'Yuridik hujjatlar', 'en' => 'Legal documents'],
                'url' => '/legal', 'sort' => 4,
            ],

            // ---- Header Main ----
            [
                'id' => 28, 'parent_id' => null, 'position' => MenuPosition::HeaderMain->value, 'footer_column' => null,
                'name' => ['ru' => 'Домашний интернет', 'uz' => 'Uy interneti', 'en' => 'Home internet'],
                'url' => '/#', 'sort' => 1,
            ],
            [
                'id' => 29, 'parent_id' => null, 'position' => MenuPosition::HeaderMain->value, 'footer_column' => null,
                'name' => ['ru' => 'Мобильная связь', 'uz' => 'Mobil aloqa', 'en' => 'Mobile'],
                'url' => '/#', 'sort' => 2,
            ],
            [
                'id' => 30, 'parent_id' => null, 'position' => MenuPosition::HeaderMain->value, 'footer_column' => null,
                'name' => ['ru' => 'Офисы продаж', 'uz' => 'Savdo ofislari', 'en' => 'Sales offices'],
                'url' => '/offices', 'sort' => 3,
            ],
            [
                'id' => 31, 'parent_id' => null, 'position' => MenuPosition::HeaderMain->value, 'footer_column' => null,
                'name' => ['ru' => 'Карта покрытия', 'uz' => 'Qamrov xaritasi', 'en' => 'Coverage map'],
                'url' => '/coverage-area', 'sort' => 4,
            ],
            [
                'id' => 32, 'parent_id' => null, 'position' => MenuPosition::HeaderMain->value, 'footer_column' => null,
                'name' => ['ru' => 'Новости', 'uz' => 'Yangiliklar', 'en' => 'News'],
                'url' => '/news', 'sort' => 5,
            ],
        ];

        foreach ($menus as $row) {
            Menu::updateOrCreate(
                ['id' => $row['id']],
                [
                    'parent_id' => $row['parent_id'],
                    'position' => $row['position'],
                    'footer_column' => $row['footer_column'],
                    'name' => $row['name'],
                    'url' => $row['url'],
                    'target' => '_self',
                    'sort' => $row['sort'],
                    'is_published' => true,
                ],
            );
        }

        if (DB::getDriverName() === 'pgsql') {
            DB::statement("SELECT setval('menus_id_seq', (SELECT COALESCE(MAX(id), 1) FROM menus))");
        }

        $this->command?->info('Imported ' . count($menus) . ' menu items.');
    }
}
