<?php

namespace Database\Factories;


use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CareerFactory extends Factory
{
    protected $model = Career::class;

    public function definition(): array
    {
        $titles = [
            'uz' => $this->faker->randomElement([
                'Frontend dasturchi',
                'Backend dasturchi',
                'Full-stack dasturchi',
                'DevOps muhandisi',
                'Mobil ilovalar dasturchisi',
                'QA muhandisi',
                'Mahsulot menejeri',
                'UI/UX dizayner',
                'Tarmoq muhandisi',
                'Ma\'lumotlar bazasi administratori',
                'Texnik qo\'llab-quvvatlash mutaxassisi',
                'Marketing menejeri',
                'Sotuv menejeri',
                'Mijozlarga xizmat ko\'rsatish operatori',
                'Buxgalter',
            ]),
            'ru' => $this->faker->randomElement([
                'Frontend разработчик',
                'Backend разработчик',
                'Full-stack разработчик',
                'DevOps инженер',
                'Разработчик мобильных приложений',
                'QA инженер',
                'Продакт-менеджер',
                'UI/UX дизайнер',
                'Сетевой инженер',
                'Администратор баз данных',
                'Специалист технической поддержки',
                'Маркетинг-менеджер',
                'Менеджер по продажам',
                'Оператор клиентского сервиса',
                'Бухгалтер',
            ]),
            'en' => $this->faker->jobTitle(),
        ];

        return [
            'slug' => Str::slug($titles['en']) . '-' . $this->faker->unique()->numberBetween(1000, 999999),
            'title' => $titles,
            'description' => [
                'uz' => $this->faker->realText(150),
                'ru' => $this->faker->realText(150),
                'en' => $this->faker->text(150),
            ],
            'content' => [
                'uz' => $this->generateContent('uz'),
                'ru' => $this->generateContent('ru'),
                'en' => $this->generateContent('en'),
            ],
            'image' => null,
            'sort' => $this->faker->numberBetween(0, 100),
            'is_published' => $this->faker->boolean(80),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-1 day'),
            'updated_at' => now(),
        ];
    }

    private function generateContent(string $locale): string
    {
        $paragraphs = $locale === 'en'
            ? $this->faker->paragraphs(4)
            : [
                $this->faker->realText(300),
                $this->faker->realText(300),
                $this->faker->realText(300),
                $this->faker->realText(300),
            ];

        $html = '<h3>' . ($locale === 'uz' ? 'Talablar' : ($locale === 'ru' ? 'Требования' : 'Requirements')) . '</h3>';
        $html .= '<ul>';
        for ($i = 0; $i < 4; $i++) {
            $html .= '<li>' . $this->faker->realText(80) . '</li>';
        }
        $html .= '</ul>';

        $html .= '<h3>' . ($locale === 'uz' ? 'Vazifalar' : ($locale === 'ru' ? 'Обязанности' : 'Responsibilities')) . '</h3>';
        foreach ($paragraphs as $p) {
            $html .= '<p>' . $p . '</p>';
        }

        return $html;
    }

    public function published(): static
    {
        return $this->state(fn () => [
            'is_published' => true,
            'published_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
        ]);
    }

    public function draft(): static
    {
        return $this->state(fn () => [
            'is_published' => false,
            'published_at' => null,
        ]);
    }
}
