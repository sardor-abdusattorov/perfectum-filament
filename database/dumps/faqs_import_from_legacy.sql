-- ============================================================
-- Импорт FAQ из старой MySQL/MariaDB (perfectum_website.faqs)
-- в PostgreSQL (perfectum_site.faqs)
--
-- Запуск:
--   psql -U perfectum -d perfectum_site -f database/dumps/faqs_import_from_legacy.sql
-- или вставить в pgAdmin → Query Tool → Execute.
--
-- Маппинг колонок:
--   order        -> sort
--   is_active    -> is_published
--   user_question, user_question_id, mail_sent -> отброшены (legacy)
--   created_at / updated_at -> NOW() (в старой таблице их не было)
-- ============================================================

BEGIN;

-- При повторном запуске сбросит существующие записи.
-- Закомментируй строку ниже, если хочешь докинуть, а не перезаписать.
TRUNCATE faqs RESTART IDENTITY;

INSERT INTO faqs (id, question, answer, slug, sort, image, is_published, created_at, updated_at) VALUES
(
  1760,
  $json${"ru": "Что такое 5G Standalone?", "uz": "5G Standalone nima?"}$json$,
  $json${"ru": "<p><span style=\"color: rgb(62, 62, 62);\">5G Standalone — это полноценная сеть пятого поколения, не зависящая от предыдущих поколений связи. Она обеспечивает сверхбыстрый интернет, минимальную задержку и стабильную работу даже при высокой нагрузке.</span></p>", "uz": "<p><span style=\"color: rgb(62, 62, 62);\">5G Standalone — bu avvalgi aloqa avlodlariga bogʻliq bo‘lmagan to‘liq beshinchi avlod tarmogʻidir. U juda yuqori tezlikdagi internet, minimal kechikish va katta yuklama ostida ham barqaror ishlashni ta'minlaydi.</span></p>"}$json$,
  $json${"ru": "cto-takoe-5g-standalone", "uz": "5g-standalone-nima"}$json$,
  1, NULL, TRUE, NOW(), NOW()
),
(
  1761,
  $json${"ru": "Когда 5G Standalone появится в моем районе?", "uz": "Mening tumanimda 5G Standalone qachon paydo bo‘ladi?"}$json$,
  $json${"ru": "<p><span style=\"color: rgb(62, 62, 62);\">Мы ежедневно подключаем новые базовые станции 5G Standalone. В течение 2025 года планируется покрытие всего Ташкента и крупных городов Узбекистана. Следите за обновлениями на нашем сайте и в соцсетях.</span></p>", "uz": "<p><span style=\"color: rgb(62, 62, 62);\">Biz har kuni yangi 5G Standalone bazaviy stansiyalarini ulaymiz. 2025-yil davomida Toshkent shahri va Oʻzbekistonning yirik shaharlarida qamrovni taʼminlash rejalashtirilgan. Yangiliklarimizni veb-saytimizda va ijtimoiy tarmoqlarda kuzatib boring.</span></p>"}$json$,
  $json${"ru": "kogda-5g-standalone-poyavitsya-v-moem-raione", "uz": "mening-tumanimda-5g-standalone-qachon-paydo-boladi"}$json$,
  1, NULL, TRUE, NOW(), NOW()
),
(
  1762,
  $json${"ru": "Как найти свой район на карте покрытия?", "uz": "O'z hududingizni qamrov xaritasida qanday topish mumkin?"}$json$,
  $json${"ru": "<p><span style=\"color: rgb(62, 62, 62);\">Вы можете вручную найти свой район на карте или воспользоваться строкой поиска, указав название района.</span></p><p><span style=\"color: rgb(62, 62, 62);\">Например:&nbsp;Мирзо-Улугбекский район</span></p>", "uz": "<p><span style=\"color: rgb(62, 62, 62);\">Siz xaritadan tumanni qo‘lda topishingiz yoki qidiruv qatoriga tuman nomini yozishingiz mumkin.</span></p><p><span style=\"color: rgb(62, 62, 62);\">Masalan: Mirzo-Ulugʻbek tumani</span></p>"}$json$,
  $json${"ru": "kak-naiti-svoi-raion-na-karte-pokrytiya", "uz": "oz-hududingizni-qamrov-xaritasida-qanday-topish-mumkin"}$json$,
  1, NULL, TRUE, NOW(), NOW()
),
(
  1763,
  $json${"ru": "Как подключить 5G Standalone?", "uz": "5G Standalone xizmatini qanday ulash mumkin?"}$json$,
  $json${"ru": "<p><strong>Вариант 1: Онлайн-заявка</strong></p><p><span style=\"color: rgb(65, 65, 65);\">•&nbsp;</span>Оставьте заявку на сайте.</p><p><span style=\"color: rgb(65, 65, 65);\">•&nbsp;</span>Мы свяжемся с вами, проверим техническую возможность подключения и договоримся о времени установки.</p><p><span style=\"color: rgb(65, 65, 65);\">•&nbsp;</span>В указанное время наш специалист приедет, привезёт оборудование (роутер и SIM-карту Perfectum), подключит и настроит домашний интернет.</p><p><br></p><p><strong>Вариант 2: Посетите офисы Perfectum</strong></p><p><span style=\"color: rgb(65, 65, 65);\">•&nbsp;</span>Центральный офис: ул. Шевченко, 21</p><p><span style=\"color: rgb(65, 65, 65);\">•&nbsp;</span>Филиал в&nbsp;Чиланзарском районе: ул. Гагарина, дом 40</p>", "uz": "<p>1-variant: Onlayn ariza topshirish</p><p><span style=\"color: rgb(65, 65, 65);\">•&nbsp;</span>Saytimiz orqali ariza yuboring.</p><p><span style=\"color: rgb(65, 65, 65);\">•&nbsp;</span>Biz siz bilan bogʻlanamiz, texnik imkoniyatni tekshiramiz va o‘rnatish vaqtini kelishib olamiz.</p><p><span style=\"color: rgb(65, 65, 65);\">•&nbsp;</span>Belgilangan vaqtda mutaxassisimiz keladi, uskunani (router va Perfectum SIM-kartasi) olib keladi, internetni ulaydi va sozlaydi.</p><p><br></p><p>2-variant: Perfectum ofislariga tashrif buyuring</p><p>• Markaziy ofis: Shevchenko ko‘chasi, 21-uy</p><p>• Chilonzor tumanidagi filial: Gagarin ko‘chasi, 40-uy</p>"}$json$,
  $json${"ru": "kak-podklyucit-5g-standalone", "uz": "5g-standalone-xizmatini-qanday-ulash-mumkin"}$json$,
  1, NULL, TRUE, NOW(), NOW()
);

-- Сдвинуть sequence, чтобы следующая запись из Filament получила корректный id.
SELECT setval('faqs_id_seq', (SELECT COALESCE(MAX(id), 1) FROM faqs));

COMMIT;
