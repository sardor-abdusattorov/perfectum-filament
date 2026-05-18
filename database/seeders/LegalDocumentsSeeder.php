<?php

namespace Database\Seeders;

use App\Models\LegalDocument;
use Illuminate\Database\Seeder;

class LegalDocumentsSeeder extends Seeder
{
    public function run(): void
    {
        $documents = require database_path('seeders/data/legal_documents.php');

        foreach ($documents as $row) {
            LegalDocument::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'description' => $row['description'] ?? null,
                    'content' => $row['content'] ?? null,
                    'image' => null,
                    'sort' => $row['sort'] ?? 0,
                    'is_published' => $row['is_published'] ?? true,
                    'published_at' => $row['published_at'] ?? null,
                ],
            );
        }

        $this->command?->info('Imported '.count($documents).' legal documents.');
    }
}
