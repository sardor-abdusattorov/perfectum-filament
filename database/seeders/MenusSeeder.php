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
            [
                'id' => 1,
                'parent_id' => null,
                'name' => ['ru' => 'Карьера', 'uz' => 'Karyera', 'en' => 'Careers'],
                'url' => '/careers',
                'sort' => 1,
            ],
            [
                'id' => 2,
                'parent_id' => null,
                'name' => ['ru' => 'Контакты', 'uz' => 'Kontaktlar', 'en' => 'Contacts'],
                'url' => '/contacts',
                'sort' => 2,
            ],
            [
                'id' => 3,
                'parent_id' => null,
                'name' => ['ru' => 'Ещё...', 'uz' => "Ko'proq...", 'en' => 'More...'],
                'url' => '#',
                'sort' => 3,
            ],
            [
                'id' => 4,
                'parent_id' => 3,
                'name' => ['ru' => 'О нас', 'uz' => 'Biz haqimizda', 'en' => 'About us'],
                'url' => '/about',
                'sort' => 1,
            ],
            [
                'id' => 5,
                'parent_id' => 3,
                'name' => ['ru' => 'Закупки', 'uz' => 'Xaridlar', 'en' => 'Tenders'],
                'url' => '/tenders',
                'sort' => 2,
            ],
        ];

        foreach ($menus as $row) {
            Menu::updateOrCreate(
                ['id' => $row['id']],
                [
                    'parent_id' => $row['parent_id'],
                    'position' => MenuPosition::HeaderTop->value,
                    'name' => $row['name'],
                    'url' => $row['url'],
                    'target' => '_self',
                    'sort' => $row['sort'],
                    'is_published' => true,
                ],
            );
        }

        $footerMenus = [
            // Column 1 — Uy interneti
            ['id' => 101, 'col' => 1, 'sort' => 1, 'url' => '/coverage',       'name' => ['ru' => 'Зона покрытия',  'uz' => 'Qamrov zonasi',   'en' => 'Coverage area']],
            ['id' => 102, 'col' => 1, 'sort' => 2, 'url' => '#',               'name' => ['ru' => 'Офисы продаж',   'uz' => 'Sotuv ofislari',  'en' => 'Sales offices']],
            ['id' => 103, 'col' => 1, 'sort' => 3, 'url' => 'https://lk.perfectum.uz', 'name' => ['ru' => 'Личный кабинет', 'uz' => 'Shaxsiy kabinet', 'en' => 'Personal cabinet']],

            // Column 2 — Abonentlarga
            ['id' => 201, 'col' => 2, 'sort' => 1, 'url' => '/tariffs',         'name' => ['ru' => 'Тарифы',                'uz' => 'Tariflar',              'en' => 'Tariffs']],
            ['id' => 202, 'col' => 2, 'sort' => 2, 'url' => '#',                'name' => ['ru' => 'Корпоративным клиентам', 'uz' => 'Korporativ mijozlarga', 'en' => 'For corporate clients']],
            ['id' => 203, 'col' => 2, 'sort' => 3, 'url' => '/services',        'name' => ['ru' => 'Услуги',                'uz' => 'Xizmatlar',             'en' => 'Services']],
            ['id' => 204, 'col' => 2, 'sort' => 4, 'url' => '/free-numbers',    'name' => ['ru' => 'Свободные номера',      'uz' => 'Bo`sh raqamlar',        'en' => 'Free numbers']],
            ['id' => 205, 'col' => 2, 'sort' => 5, 'url' => '#',                'name' => ['ru' => 'Оборудование',          'uz' => 'Uskunalar',             'en' => 'Equipment']],
            ['id' => 206, 'col' => 2, 'sort' => 6, 'url' => '#',                'name' => ['ru' => 'Сегодня в продаже',     'uz' => 'Bugun sotuvda',         'en' => 'On sale today']],
            ['id' => 207, 'col' => 2, 'sort' => 7, 'url' => '/coverage',        'name' => ['ru' => 'Зона покрытия',         'uz' => 'Qamrov hududi',         'en' => 'Coverage area']],

            // Column 3 — Foydali
            ['id' => 301, 'col' => 3, 'sort' => 1, 'url' => '#',          'name' => ['ru' => 'Акции',                'uz' => 'Aksiyalar',         'en' => 'Promotions']],
            ['id' => 302, 'col' => 3, 'sort' => 2, 'url' => '/news',      'name' => ['ru' => 'Новости',              'uz' => 'Yangiliklar',       'en' => 'News']],
            ['id' => 303, 'col' => 3, 'sort' => 3, 'url' => '#',          'name' => ['ru' => 'Офисы',                'uz' => 'Ofislar',           'en' => 'Offices']],
            ['id' => 304, 'col' => 3, 'sort' => 4, 'url' => '#',          'name' => ['ru' => 'Дилеры',               'uz' => 'Dilerlar',          'en' => 'Dealers']],
            ['id' => 305, 'col' => 3, 'sort' => 5, 'url' => '#',          'name' => ['ru' => 'Как подключиться',     'uz' => 'Qanday ulanish kerak', 'en' => 'How to connect']],
            ['id' => 306, 'col' => 3, 'sort' => 6, 'url' => '#',          'name' => ['ru' => 'Полезно знать',        'uz' => 'Bilish foydali',    'en' => 'Useful to know']],

            // Column 4 — Ma`lumot
            ['id' => 401, 'col' => 4, 'sort' => 1, 'url' => '/tenders',  'name' => ['ru' => 'Закупки',              'uz' => 'Xaridlar',          'en' => 'Tenders']],
            ['id' => 402, 'col' => 4, 'sort' => 2, 'url' => '/careers',  'name' => ['ru' => 'Карьера',              'uz' => 'Karyera',           'en' => 'Careers']],
            ['id' => 403, 'col' => 4, 'sort' => 3, 'url' => '/contacts', 'name' => ['ru' => 'Контакты',             'uz' => 'Kontaktlar',        'en' => 'Contacts']],
            ['id' => 404, 'col' => 4, 'sort' => 4, 'url' => '#',         'name' => ['ru' => 'Юридические документы', 'uz' => 'Yuridik xujjatlar', 'en' => 'Legal documents']],
        ];

        foreach ($footerMenus as $row) {
            Menu::updateOrCreate(
                ['id' => $row['id']],
                [
                    'parent_id' => null,
                    'position' => MenuPosition::Footer->value,
                    'footer_column' => $row['col'],
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

        $total = count($menus) + count($footerMenus);
        $this->command?->info('Imported ' . $total . ' menu items.');
    }
}
