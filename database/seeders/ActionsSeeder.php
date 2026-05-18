<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ActionsSeeder extends Seeder
{
    public function run(): void
    {
        $actions = require database_path('seeders/data/actions.php');
        $disk = Storage::disk('public');

        foreach ($actions as $row) {
            $image = $this->resolveLegacyImage(
                $row['image'] ?? null,
                $row['published_at'] ?? null,
                $disk,
            );

            $action = Action::updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'title' => $row['title'],
                    'description' => $row['description'] ?? null,
                    'content' => $row['content'] ?? null,
                    'image' => $image,
                    'sort' => $row['sort'] ?? 0,
                    'is_published' => $row['is_published'] ?? true,
                    'published_at' => $row['published_at'] ?? null,
                ],
            );

            $action->files()->delete();

            foreach ($row['files'] ?? [] as $fileSort => $file) {
                $relocated = $this->resolveLegacyFile(
                    $file['file'],
                    $row['published_at'] ?? null,
                    $disk,
                );

                if ($relocated === null) {
                    continue;
                }

                $action->files()->create([
                    'name' => $file['name'],
                    'file' => $relocated,
                    'sort' => $fileSort,
                ]);
            }
        }

        $this->command?->info('Imported '.count($actions).' actions.');
    }

    /**
     * Copy a legacy `images/<basename>` into the new
     * uploads/images/actions/Y/m/<basename> layout.
     * Returns the target path if the file exists, or null otherwise.
     */
    private function resolveLegacyImage(?string $legacyPath, ?string $publishedAt, $disk): ?string
    {
        if (! $legacyPath) {
            return null;
        }

        $basename = basename($legacyPath);
        [$year, $month] = $this->yearMonth($publishedAt);
        $target = "uploads/images/actions/{$year}/{$month}/{$basename}";

        return $this->relocate($legacyPath, $target, 'images/'.$basename, $disk);
    }

    /**
     * Copy a legacy `files/<basename>` into the new
     * uploads/files/actions/Y/m/<basename> layout.
     */
    private function resolveLegacyFile(?string $legacyPath, ?string $publishedAt, $disk): ?string
    {
        if (! $legacyPath) {
            return null;
        }

        $basename = basename($legacyPath);
        [$year, $month] = $this->yearMonth($publishedAt);
        $target = "uploads/files/actions/{$year}/{$month}/{$basename}";

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
