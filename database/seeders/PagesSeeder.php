<?php

namespace Database\Seeders;

use App\Enums\PageSection;
use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PagesSeeder extends Seeder
{
    public function run(): void
    {
        $pages = require database_path('seeders/data/pages_helpers.php');
        $disk = Storage::disk('public');

        foreach ($pages as $row) {
            $image = $this->resolveLegacyImage(
                $row['image'] ?? null,
                $row['published_at'] ?? null,
                $disk,
            );

            $page = Page::updateOrCreate(
                ['section' => $row['section'], 'slug' => $row['slug']],
                [
                    'parent_id' => null,
                    'template' => 'default',
                    'title' => $row['title'],
                    'content' => $row['content'] ?? null,
                    'image' => $image,
                    'meta_title' => null,
                    'meta_description' => null,
                    'sort' => $row['sort'] ?? 0,
                    'is_published' => $row['is_published'] ?? true,
                ],
            );

            $page->files()->delete();

            foreach ($row['files'] ?? [] as $fileSort => $file) {
                $relocated = $this->resolveLegacyFile(
                    $file['file'],
                    $row['published_at'] ?? null,
                    $disk,
                );

                if ($relocated === null) {
                    continue;
                }

                $page->files()->create([
                    'name' => $file['name'],
                    'file' => $relocated,
                    'sort' => $fileSort,
                ]);
            }
        }

        $this->command?->info('Imported '.count($pages).' static pages.');
    }

    private function resolveLegacyImage(?string $legacyPath, ?string $publishedAt, $disk): ?string
    {
        if (! $legacyPath) {
            return null;
        }

        $basename = basename($legacyPath);
        [$year, $month] = $this->yearMonth($publishedAt);
        $target = "uploads/images/pages/{$year}/{$month}/{$basename}";

        return $this->relocate($legacyPath, $target, 'images/'.$basename, $disk);
    }

    private function resolveLegacyFile(?string $legacyPath, ?string $publishedAt, $disk): ?string
    {
        if (! $legacyPath) {
            return null;
        }

        $basename = basename($legacyPath);
        [$year, $month] = $this->yearMonth($publishedAt);
        $target = "uploads/files/pages/{$year}/{$month}/{$basename}";

        return $this->relocate($legacyPath, $target, 'files/'.$basename, $disk);
    }

    private function relocate(string $declared, string $target, string $flatLegacy, $disk): ?string
    {
        if ($disk->exists($target)) {
            return $target;
        }

        if ($disk->exists($declared)) {
            $disk->makeDirectory(dirname($target));
            $disk->copy($declared, $target);

            return $target;
        }

        if ($disk->exists($flatLegacy)) {
            $disk->makeDirectory(dirname($target));
            $disk->copy($flatLegacy, $target);

            return $target;
        }

        return null;
    }

    private function yearMonth(?string $publishedAt): array
    {
        $ts = $publishedAt ? strtotime($publishedAt) : false;
        if ($ts === false) {
            return [date('Y'), date('m')];
        }

        return [date('Y', $ts), date('m', $ts)];
    }
}
