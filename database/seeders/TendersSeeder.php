<?php

namespace Database\Seeders;

use App\Models\Tender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
                    'published_at' => $row['published_at'] ?? now()->subDays($sort),
                    'sort' => $sort + 1,
                    'is_published' => $row['is_published'] ?? true,
                ],
            );

            $tender->files()->delete();

            foreach ($row['files'] ?? [] as $fileSort => $file) {
                $this->relocateLegacyFile($file['file']);

                $tender->files()->create([
                    'name' => $file['name'],
                    'file' => $file['file'],
                    'sort' => $fileSort,
                ]);
            }
        }

        $this->command?->info('Imported ' . count($tenders) . ' tenders.');
    }

    /**
     * Move a file imported from the old site (flat `files/` folder) into the
     * current upload structure. Idempotent: skips if already in place.
     */
    private function relocateLegacyFile(string $path): void
    {
        $disk = Storage::disk('public');

        if ($disk->exists($path)) {
            return;
        }

        $legacy = 'files/' . basename($path);

        if ($disk->exists($legacy)) {
            $disk->makeDirectory(dirname($path));
            $disk->copy($legacy, $path);
        }
    }
}
