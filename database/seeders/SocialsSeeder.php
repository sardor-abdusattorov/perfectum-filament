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
                'icon' => 'fab fa-facebook-f',
                'sort' => 1,
            ],
            [
                'name' => 'Instagram',
                'url' => 'https://www.instagram.com/perfectum.uzbekistan/',
                'icon' => 'fab fa-instagram',
                'sort' => 2,
            ],
            [
                'name' => 'Telegram',
                'url' => 'https://t.me/PerfectumUZ',
                'icon' => 'fab fa-telegram',
                'sort' => 3,
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/company/perfectum-mob',
                'icon' => 'fab fa-linkedin-in',
                'sort' => 4,
            ],
        ];

        foreach ($socials as $row) {
            Social::updateOrCreate(
                ['url' => $row['url']],
                [
                    'name' => $row['name'],
                    'icon' => $row['icon'],
                    'sort' => $row['sort'],
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported ' . count($socials) . ' social links.');
    }
}
