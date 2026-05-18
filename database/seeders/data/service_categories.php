<?php

// Source: legacy `service_types` table.
// Slugs are English category names; legacy_id is kept so the services
// seeder can map services.service_type_id → service_categories.id.
// The disabled "Оплата госуслуг" row (legacy id 10, status=0) is skipped.
// meta_title / meta_description are crafted per category for SEO; the
// blade falls back to `<title> | Perfectum` and to `description` when
// either is left empty in the admin.

return [
    [
        'legacy_id' => 13,
        'slug' => 'home-internet',
        'title' => [
            'ru' => 'Услуги для домашнего интернета',
            'uz' => 'Uy interneti uchun xizmatlar',
            'en' => 'Home internet services',
        ],
        'meta_title' => [
            'ru' => 'Услуги для домашнего интернета | Perfectum',
            'uz' => 'Uy interneti uchun xizmatlar | Perfectum',
            'en' => 'Home internet services | Perfectum',
        ],
        'meta_description' => [
            'ru' => 'Подключение, статический IP и сервисы для домашнего интернета Perfectum.',
            'uz' => 'Perfectum uy interneti uchun ulanish, statik IP va boshqa xizmatlar.',
            'en' => 'Connection, static IP and other Perfectum home internet services.',
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
        'meta_title' => [
            'ru' => 'Сетевые услуги Perfectum',
            'uz' => 'Perfectum tarmoq xizmatlari',
            'en' => 'Perfectum network services',
        ],
        'meta_description' => [
            'ru' => 'Конференц-связь, ограничения вызовов, переадресация — сетевые услуги Perfectum.',
            'uz' => 'Konferens-aloqa, qo‘ng‘iroqlarni cheklash va qayta yo‘naltirish — Perfectum tarmoq xizmatlari.',
            'en' => 'Conference call, call restrictions and forwarding — Perfectum network services.',
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
        'meta_title' => [
            'ru' => 'Дополнительные услуги Perfectum',
            'uz' => 'Perfectum qo‘shimcha xizmatlari',
            'en' => 'Perfectum additional services',
        ],
        'meta_description' => [
            'ru' => 'Полный список дополнительных услуг Perfectum: детализация, бонусы, опции.',
            'uz' => 'Perfectum qo‘shimcha xizmatlarining to‘liq ro‘yxati: detalizatsiya, bonuslar, imkoniyatlar.',
            'en' => 'Full list of Perfectum extras: detailed invoices, bonuses and options.',
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
        'meta_title' => [
            'ru' => 'Мобильный кабинет Perfectum',
            'uz' => 'Perfectum mobil kabineti',
            'en' => 'Perfectum mobile cabinet',
        ],
        'meta_description' => [
            'ru' => 'Управление номером Perfectum: USSD-команды, SMS-коды и личный кабинет.',
            'uz' => 'Perfectum raqamini boshqarish: USSD buyruqlar, SMS kodlar va shaxsiy kabinet.',
            'en' => 'Manage your Perfectum number: USSD codes, SMS shortcodes and self-service.',
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
        'meta_title' => [
            'ru' => 'Программа лояльности Perfectum «Ишонч»',
            'uz' => 'Perfectum «Ishonch» dasturi',
            'en' => 'Perfectum «Ishonch» loyalty program',
        ],
        'meta_description' => [
            'ru' => 'Скидки и бонусы по программе «Ишонч» в зависимости от стажа абонента Perfectum.',
            'uz' => 'Abonent stajiga qarab «Ishonch» dasturi bo‘yicha chegirma va bonuslar.',
            'en' => 'Discounts and bonuses under the «Ishonch» program based on subscriber tenure.',
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
        'meta_title' => [
            'ru' => 'Как узнать баланс Perfectum',
            'uz' => 'Perfectum balansini qanday bilish mumkin',
            'en' => 'How to check your Perfectum balance',
        ],
        'meta_description' => [
            'ru' => 'Способы проверить баланс номера Perfectum: USSD, SMS, мобильный кабинет.',
            'uz' => 'Perfectum raqamining balansini tekshirish usullari: USSD, SMS, mobil kabinet.',
            'en' => 'Ways to check your Perfectum balance: USSD, SMS, mobile cabinet.',
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
        'meta_title' => [
            'ru' => 'Абонентские услуги Perfectum',
            'uz' => 'Perfectum abonent xizmatlari',
            'en' => 'Perfectum subscriber services',
        ],
        'meta_description' => [
            'ru' => 'Услуги для абонентов Perfectum: смена тарифа, замена SIM-карты и многое другое.',
            'uz' => 'Perfectum abonentlari uchun xizmatlar: tarifni almashtirish, SIM-kartani almashtirish va boshqalar.',
            'en' => 'Services for Perfectum subscribers: tariff change, SIM replacement and more.',
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
        'meta_title' => [
            'ru' => 'Международная связь Perfectum',
            'uz' => 'Perfectum xalqaro aloqa',
            'en' => 'Perfectum international calls',
        ],
        'meta_description' => [
            'ru' => 'Подключение и тарификация международных звонков с номера Perfectum.',
            'uz' => 'Perfectum raqamidan xalqaro qo‘ng‘iroqlarni ulash va tarifikatsiyasi.',
            'en' => 'Setup and rates for international calls from a Perfectum number.',
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
        'meta_title' => [
            'ru' => 'Услуги контент-провайдеров Perfectum',
            'uz' => 'Perfectum kontent-provayderlarining xizmatlari',
            'en' => 'Perfectum content provider services',
        ],
        'meta_description' => [
            'ru' => 'Подписки, развлекательные и информационные сервисы от партнёров Perfectum.',
            'uz' => 'Perfectum hamkorlaridan obunalar, ko‘ngilochar va axborot xizmatlari.',
            'en' => 'Subscriptions, entertainment and info services from Perfectum partners.',
        ],
        'sort' => 9,
    ],
];
