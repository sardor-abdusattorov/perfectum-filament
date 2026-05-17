<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Seeder;

class DealersSeeder extends Seeder
{
    public function run(): void
    {
        $dealers = require database_path('seeders/data/dealers.php');

        foreach ($dealers as $row) {
            Dealer::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'content' => $row['content'],
                    'image' => null,
                    'sort' => $row['sort'],
                    'is_published' => true,
                    'created_at' => $row['created_date'] ?? now(),
                    'updated_at' => $row['created_date'] ?? now(),
                ],
            );
        }

        $this->command?->info('Imported '.count($dealers).' dealer regions.');
    }
}
