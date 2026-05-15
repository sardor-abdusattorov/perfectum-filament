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
                'category' => 'common',
                'key' => 'empty',
                'value' => [
                    'ru' => 'Ничего не найдено',
                    'uz' => 'Hech narsa topilmadi',
                    'en' => 'Nothing found',
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
