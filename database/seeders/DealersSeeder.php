<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DealersSeeder extends Seeder
{
    public function run(): void
    {
        $dealers = require database_path('seeders/data/dealers.php');

        $disk = Storage::disk('public');

        foreach ($dealers as $row) {
            $image = null;

            if (! empty($row['image'])) {
                $this->relocateLegacyImage($row['image']);

                if ($disk->exists($row['image'])) {
                    $image = $row['image'];
                }
            }

            Dealer::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'content' => $row['content'],
                    'image' => $image,
                    'sort' => $row['sort'],
                    'is_published' => true,
                    'created_at' => $row['created_date'] ?? now(),
                    'updated_at' => $row['created_date'] ?? now(),
                ],
            );
        }

        $this->command?->info('Imported '.count($dealers).' dealer regions.');
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

        $legacy = 'images/'.basename($path);

        if ($disk->exists($legacy)) {
            $disk->makeDirectory(dirname($path));
            $disk->copy($legacy, $path);
        }
    }
}
