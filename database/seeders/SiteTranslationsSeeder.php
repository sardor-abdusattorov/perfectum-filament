<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteTranslationsSeeder extends Seeder
{
    public function run(): void
    {
        $translations = [
            [
                'question' => [
                    'ru' => 'empthy',

            ],
        ];

        foreach ($faqs as $row) {
            Faq::updateOrCreate(
                ['id' => $row['id']],
                [
                    'question' => $row['question'],
                    'answer' => $row['answer'],
                    'sort' => 1,
                    'image' => null,
                    'is_published' => true,
                ],
            );
        }

        if (DB::getDriverName() === 'pgsql') {
            DB::statement("SELECT setval('faqs_id_seq', (SELECT COALESCE(MAX(id), 1) FROM faqs))");
        }

        $this->command?->info('Imported ' . count($faqs) . ' FAQs.');
    }
}
