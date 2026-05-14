<?php

namespace Database\Seeders;

use App\Models\Tender;
use Illuminate\Database\Seeder;

class TendersSeeder extends Seeder
{
    public function run(): void
    {
        $tenders = require database_path('seeders/data/tenders.php');

        foreach ($tenders as $sort => $row) {
            $tender = Tender::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'content' => $row['content'],
                    'image' => null,
                    'sort' => $sort + 1,
                    'is_published' => $row['is_published'] ?? true,
                ],
            );

            $tender->files()->delete();

            foreach ($row['files'] ?? [] as $fileSort => $file) {
                $tender->files()->create([
                    'name' => $file['name'],
                    'file' => $file['file'],
                    'sort' => $fileSort,
                ]);
            }
        }

        $this->command?->info('Imported ' . count($tenders) . ' tenders.');
    }
}
