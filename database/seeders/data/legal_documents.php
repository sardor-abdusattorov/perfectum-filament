<?php

// 7 legal-document placeholders matching the legacy
// /static-pages/yuridiceskie-dokumenty grid.
//
// Each entry may add:
//   'image'        => 'images/<basename>'          // legacy flat path
//   'files'        => [ ['name' => '...', 'file' => 'files/<basename>'], ... ]
//   'published_at' => 'Y-m-d H:i:s'                // drives the Y/m subfolder
//
// The seeder copies images into uploads/images/legal_documents/Y/m/
// and files into uploads/files/legal_documents/Y/m/ — same layout
// Filament's ImageUpload/DocumentUpload produces. If the source isn't
// in storage/app/public the field is left null and admins upload it.

return [
    [
        'slug' => 'personal-data-policy',
        'title' => [
            'ru' => 'Политика обработки персональных данных пользователей',
            'uz' => 'Foydalanuvchilarning shaxsga doir ma\'lumotlariga ishlov berish siyosati',
            'en' => 'User personal data processing policy',
        ],
        'sort' => 1,
    ],
    [
        'slug' => 'cookie-policy',
        'title' => [
            'ru' => 'Политика использования cookie-файлов',
            'uz' => 'Cookie-fayllardan foydalanish siyosati',
            'en' => 'Cookie policy',
        ],
        'sort' => 2,
    ],
    [
        'slug' => 'legal-entity-contracts',
        'title' => [
            'ru' => 'Формы договоров с юридическими лицами и оплата через казначейство',
            'uz' => 'Yuridik shaxslar bilan tuziladigan shartnomalar shakllari hamda g\'aznachilik orqali yuridik shaxslarga oid to\'lovlar',
            'en' => 'Legal entity contract templates and treasury payments',
        ],
        'sort' => 3,
    ],
    [
        'slug' => 'licences',
        'title' => [
            'ru' => 'Лицензии',
            'uz' => 'Litsenziyalar',
            'en' => 'Licences',
        ],
        'sort' => 4,
    ],
    [
        'slug' => 'telecom-service-rules',
        'title' => [
            'ru' => 'Правила оказания телекоммуникационных услуг',
            'uz' => 'Telekommunikatsiya xizmatlarini ko\'rsatish qoidalari',
            'en' => 'Telecommunication service rules',
        ],
        'sort' => 5,
    ],
    [
        'slug' => 'anti-corruption',
        'title' => [
            'ru' => 'Борьба с коррупцией',
            'uz' => 'Korruptsiyaga qarshi kurash',
            'en' => 'Anti-corruption',
        ],
        'sort' => 6,
    ],
    [
        'slug' => 'public-offer',
        'title' => [
            'ru' => 'Оферта',
            'uz' => 'Oferta',
            'en' => 'Public offer',
        ],
        'sort' => 7,
    ],
];
