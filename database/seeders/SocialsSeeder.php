<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SocialsSeeder extends Seeder
{
    public function run(): void
    {
        // legacy_basename = file stem in storage/app/public/social/<stem>.<ext>
        // The seeder probes svg/png/webp/jpg in that order and copies the
        // first match into storage/app/public/socials/<stem>.<ext>, mirroring
        // the SocialResource ImageUpload target directory.
        $socials = [
            [
                'name' => 'Facebook',
                'url' => 'https://www.facebook.com/Perfectum.Uzbekistan',
                'sort' => 1,
                'legacy_basename' => 'facebook',
            ],
            [
                'name' => 'Instagram',
                'url' => 'https://www.instagram.com/perfectum.uzbekistan/',
                'sort' => 2,
                'legacy_basename' => 'instagram',
            ],
            [
                'name' => 'Telegram',
                'url' => 'https://t.me/PerfectumUZ',
                'sort' => 3,
                'legacy_basename' => 'telegram',
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/company/perfectum-mob',
                'sort' => 4,
                'legacy_basename' => 'linkedin',
            ],
        ];

        $disk = Storage::disk('public');

        foreach ($socials as $row) {
            $image = $this->relocateSocialIcon($row['legacy_basename'], $disk);

            Social::updateOrCreate(
                ['url' => $row['url']],
                [
                    'name' => $row['name'],
                    'image' => $image,
                    'sort' => $row['sort'],
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported '.count($socials).' social links.');
    }

    /**
     * Look up storage/app/public/social/<basename>.<ext> (legacy layout)
     * and copy it into storage/app/public/socials/<basename>.<ext> — the
     * directory SocialResource uses for new uploads.
     */
    private function relocateSocialIcon(string $basename, $disk): ?string
    {
        $extensions = ['svg', 'png', 'webp', 'jpg', 'jpeg'];

        // Already in place under the new path?
        foreach ($extensions as $ext) {
            $target = "socials/{$basename}.{$ext}";
            if ($disk->exists($target)) {
                return $target;
            }
        }

        // Copy from legacy `social/` (singular) into `socials/` (plural).
        foreach ($extensions as $ext) {
            $legacy = "social/{$basename}.{$ext}";
            if ($disk->exists($legacy)) {
                $target = "socials/{$basename}.{$ext}";
                $disk->makeDirectory('socials');
                $disk->copy($legacy, $target);

                return $target;
            }
        }

        return null;
    }
}
