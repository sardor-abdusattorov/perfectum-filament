<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        // Build legacy_service_type_id → service_categories.id map.
        $categoryRows = require database_path('seeders/data/service_categories.php');
        $categories = ServiceCategory::query()
            ->whereIn('slug', array_column($categoryRows, 'slug'))
            ->get()
            ->keyBy('slug');

        $categoryByLegacyId = [];
        foreach ($categoryRows as $row) {
            $model = $categories->get($row['slug']);
            if ($model) {
                $categoryByLegacyId[$row['legacy_id']] = $model->id;
            }
        }

        $services = require database_path('seeders/data/services.php');
        $disk = Storage::disk('public');
        $imported = 0;
        $skipped = 0;
        $sort = 0;

        foreach ($services as $row) {
            $categoryId = $categoryByLegacyId[$row['legacy_service_type_id']] ?? null;

            // Legacy "Оплата госуслуг" category was disabled (status=0) so it
            // wasn't carried over. Skip its services.
            if ($categoryId === null) {
                $skipped++;
                continue;
            }

            $image = $this->resolveLegacyImage($row['image'] ?? null, $row['created_date'] ?? null, $disk);
            $icon = $this->resolveLegacyImage($row['icon'] ?? null, $row['created_date'] ?? null, $disk);

            Service::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'service_category_id' => $categoryId,
                    'title' => $row['title'],
                    'subtitle' => $row['subtitle'],
                    'description' => $row['description'],
                    'description_comment' => $row['description_comment'],
                    'billing_description' => $row['billing_description'],
                    'billing_description_comment' => $row['billing_description_comment'],
                    'image' => $image,
                    'icon' => $icon,
                    'sort' => ++$sort,
                    'is_published' => $row['is_published'] ?? true,
                    'created_at' => $row['created_date'] ?? now(),
                    'updated_at' => $row['created_date'] ?? now(),
                ],
            );
            $imported++;
        }

        $this->command?->info("Imported {$imported} services (skipped {$skipped} from disabled categories).");
    }

    /**
     * Move a legacy `images/<basename>.svg` file into the new
     * `uploads/images/services/Y/m/<basename>` layout used by
     * App\Filament\Support\ImageUpload. Returns the target path if the file
     * was present, or null if it was missing — admins can upload later.
     */
    private function resolveLegacyImage(?string $legacyPath, ?string $createdDate, $disk): ?string
    {
        if (! $legacyPath) {
            return null;
        }

        $basename = basename($legacyPath);
        [$year, $month] = $this->yearMonth($createdDate);
        $target = "uploads/images/services/{$year}/{$month}/{$basename}";

        if ($disk->exists($target)) {
            return $target;
        }

        $flat = 'images/'.$basename;

        if ($disk->exists($flat)) {
            $disk->makeDirectory(dirname($target));
            $disk->copy($flat, $target);

            return $target;
        }

        return null;
    }

    private function yearMonth(?string $createdDate): array
    {
        $ts = $createdDate ? strtotime($createdDate) : false;
        if ($ts === false) {
            return [date('Y'), date('m')];
        }

        return [date('Y', $ts), date('m', $ts)];
    }
}
