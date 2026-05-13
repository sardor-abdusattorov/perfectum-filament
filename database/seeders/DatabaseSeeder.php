<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SiteTranslationsSeeder::class,
            FaqsSeeder::class,
            NumberFiltersSeeder::class,
            SettingsSeeder::class,
            SocialsSeeder::class,
        ]);
    }
}
