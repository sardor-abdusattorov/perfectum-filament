<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $categories = require database_path('seeders/data/service_categories.php');

        foreach ($categories as $row) {
            ServiceCategory::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'meta_title' => $row['meta_title'] ?? null,
                    'meta_description' => $row['meta_description'] ?? null,
                    'sort' => $row['sort'],
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported '.count($categories).' service categories.');
    }
}
