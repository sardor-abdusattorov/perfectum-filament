<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $news = require database_path('seeders/data/news.php');

        foreach ($news as $row) {
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
}
