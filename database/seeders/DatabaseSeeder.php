<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            FaqsSeeder::class,
            NumberFiltersSeeder::class,
            SettingsSeeder::class,
            SocialsSeeder::class,
            PageSettingsSeeder::class,
            PageBlocksSeeder::class,
            CareersSeeder::class,
            TendersSeeder::class,
            NewsSeeder::class,
            ActionsSeeder::class,
            DealersSeeder::class,
            ServiceCategoriesSeeder::class,
            ServicesSeeder::class,
            LegalDocumentsSeeder::class,
            PagesSeeder::class,
            MenusSeeder::class,
            SiteTranslationsSeeder::class,
        ]);
    }
}
