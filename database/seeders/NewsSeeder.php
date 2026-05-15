<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $news = require database_path('seeders/data/news.php');

        foreach ($news as $row) {
            if (! empty($row['image'])) {
                $this->relocateLegacyImage($row['image']);
            }

            News::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'description' => $row['description'],
                    'content' => $row['content'],
                    'image' => $row['image'] ?? null,
                    'sort' => $row['sort'] ?? 0,
                    'is_published' => $row['is_published'] ?? true,
                    'show_all_time' => $row['show_all_time'] ?? false,
                    'published_at' => $row['published_at'] ?? null,
                ],
            );
        }

        $this->command?->info('Imported ' . count($news) . ' news entries.');
    }

    /**
     * Move an image imported from the old site (flat `images/` folder) into
     * the current upload structure. Idempotent: skips if already in place.
     */
    private function relocateLegacyImage(string $path): void
    {
        $disk = Storage::disk('public');

        if ($disk->exists($path)) {
            return;
        }

        $legacy = 'images/' . basename($path);

        if ($disk->exists($legacy)) {
            $disk->makeDirectory(dirname($path));
            $disk->copy($legacy, $path);
        }
    }
}
