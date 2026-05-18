<?php

// Source: legacy `service_types` table.
// Slugs are English category names; legacy_id is kept so the services
// seeder can map services.service_type_id → service_categories.id.
// The disabled "Оплата госуслуг" row (legacy id 10, status=0) is skipped.

return [
    [
        'legacy_id' => 13,
        'slug' => 'home-internet',
        'title' => [
            'ru' => 'Услуги для домашнего интернета',
            'uz' => 'Uy interneti uchun xizmatlar',
            'en' => 'Home internet services',
        ],
        'sort' => 1,
    ],
    [
        'legacy_id' => 1,
        'slug' => 'network',
        'title' => [
            'ru' => 'Сетевые услуги',
            'uz' => 'Tarmoq xizmatlari',
            'en' => 'Network services',
        ],
        'sort' => 2,
    ],
    [
        'legacy_id' => 2,
        'slug' => 'additional',
        'title' => [
            'ru' => 'Дополнительные услуги',
            'uz' => 'Qo‘shimcha xizmatlar',
            'en' => 'Additional services',
        ],
        'sort' => 3,
    ],
    [
        'legacy_id' => 4,
        'slug' => 'mobile-cabinet',
        'title' => [
            'ru' => 'Мобильный кабинет',
            'uz' => 'Mobil kabineti',
            'en' => 'Mobile cabinet',
        ],
        'sort' => 4,
    ],
    [
        'legacy_id' => 5,
        'slug' => 'loyalty-program',
        'title' => [
            'ru' => 'Программа лояльности',
            'uz' => 'Ishonch dasturi',
            'en' => 'Loyalty program',
        ],
        'sort' => 5,
    ],
    [
        'legacy_id' => 6,
        'slug' => 'check-balance',
        'title' => [
            'ru' => 'Узнать баланс',
            'uz' => 'Balansni bilish',
            'en' => 'Check balance',
        ],
        'sort' => 6,
    ],
    [
        'legacy_id' => 7,
        'slug' => 'subscriber',
        'title' => [
            'ru' => 'Абонентские услуги',
            'uz' => 'Abonent xizmatlari',
            'en' => 'Subscriber services',
        ],
        'sort' => 7,
    ],
    [
        'legacy_id' => 8,
        'slug' => 'international',
        'title' => [
            'ru' => 'Международная связь',
            'uz' => 'Xalqaro aloqa',
            'en' => 'International calls',
        ],
        'sort' => 8,
    ],
    [
        'legacy_id' => 9,
        'slug' => 'content-providers',
        'title' => [
            'ru' => 'Услуги от Контент-провайдеров',
            'uz' => 'Kontent - provayderlarining xizmatlari',
            'en' => 'Content provider services',
        ],
        'sort' => 9,
    ],
];
