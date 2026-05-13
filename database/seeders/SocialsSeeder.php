<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialsSeeder extends Seeder
{
    public function run(): void
    {
        $socials = [
            [
                'name' => 'Facebook',
                'url' => 'https://www.facebook.com/Perfectum.Uzbekistan',
                'sort' => 1,
            ],
            [
                'name' => 'Instagram',
                'url' => 'https://www.instagram.com/perfectum.uzbekistan/',
                'sort' => 2,
            ],
            [
                'name' => 'Telegram',
                'url' => 'https://t.me/PerfectumUZ',
                'sort' => 3,
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/company/perfectum-mob',
                'sort' => 4,
            ],
        ];

        foreach ($socials as $row) {
            Social::updateOrCreate(
                ['url' => $row['url']],
                [
                    'name' => $row['name'],
                    'image' => null,
                    'sort' => $row['sort'],
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported ' . count($socials) . ' social links.');
    }
}
