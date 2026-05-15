<?php

namespace Database\Seeders;


use App\Models\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    public function run(): void
    {
        // 40 опубликованных
        Career::factory()
            ->count(50)
            ->published()
            ->create();

        // 10 черновиков
        Career::factory()
            ->count(20)
            ->draft()
            ->create();
    }
}
