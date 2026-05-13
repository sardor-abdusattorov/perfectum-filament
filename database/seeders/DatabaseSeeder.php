<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SiteTranslationsFromLegacySeeder::class,
            FaqsFromLegacySeeder::class,
            NumberFiltersFromLegacySeeder::class,
            InformationsFromLegacySeeder::class,
        ]);
    }
}
