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
        // (legacy singular folder). The seeder probes svg/png/webp/jpg and
        // copies the first match into
        //   storage/app/public/uploads/images/socials/Y/m/<stem>.<ext>
        // which matches what ImageUpload::make('socials') writes for new
        // uploads.
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

    private function relocateSocialIcon(string $basename, $disk): ?string
    {
        $extensions = ['svg', 'png', 'webp', 'jpg', 'jpeg'];
        $folder = 'uploads/images/socials/'.date('Y/m');

        // Already in the new path?
        foreach ($extensions as $ext) {
            $target = "{$folder}/{$basename}.{$ext}";
            if ($disk->exists($target)) {
                return $target;
            }
        }

        // Copy from legacy `social/<basename>.<ext>` into the new path.
        foreach ($extensions as $ext) {
            $legacy = "social/{$basename}.{$ext}";
            if ($disk->exists($legacy)) {
                $target = "{$folder}/{$basename}.{$ext}";
                $disk->makeDirectory($folder);
                $disk->copy($legacy, $target);

                return $target;
            }
        }

        return null;
    }
}
