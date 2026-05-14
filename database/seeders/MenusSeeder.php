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

        if (DB::getDriverName() === 'pgsql') {
            DB::statement("SELECT setval('menus_id_seq', (SELECT COALESCE(MAX(id), 1) FROM menus))");
        }

        $this->command?->info('Imported ' . count($menus) . ' menu items.');
    }
}
