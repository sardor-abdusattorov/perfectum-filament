<?php

// Source: legacy `actions` table (7 rows).
// Schema mapping:
//   legacy name        → title (json)
//   legacy title       → description (json, short tagline like "Акция")
//   legacy description → content (json HTML)
//   legacy slug.ru     → slug (single English string)
//   legacy created_date → published_at + Y/m image folder
//   legacy is_active   → is_published
// Legacy id 14 had slug="11" (broken) — replaced with a meaningful one.
// `image` target follows uploads/images/actions/Y/m/<basename>.
// HTML kept verbatim from the dump; admins can clean up via the editor.

return [
    [
        'slug' => 'kasko-insurance-discount',
        'title' => [
            'ru' => '«КАСКО (автострахование) до -50%»!',
            'uz' => '«KASKO (avtosug\'urta) aksiyasi: -50%» gacha!',
        ],
        'description' => [
            'ru' => 'Акция',
            'uz' => 'Aksiyasi',
        ],
        'content' => [
            'ru' => <<<'HTML'
<p>Хотите получить скидку до -50% на страховой полис КАСКО от «Кафолат» (страхование автотранспортных средств)?</p>
<p>1. Подключитесь к Perfectum на любой тариф категории «6+К»:</p>
<figure class="table"><table><tbody>
<tr><td>Вид страхования</td><td>Скидка на страховой полис</td><td>Тариф категории "6+К"</td></tr>
<tr><td rowspan="5">Страховой полис КАСКО от "Кафолат" (страхование автотранспортных средств)</td><td>10%</td><td>"888+" (6+К)</td></tr>
<tr><td>20%</td><td>"2000" (6+К)</td></tr>
<tr><td>25%</td><td>"Talk 2" (6+К)</td></tr>
<tr><td>30%</td><td>"10 000" (6+К)</td></tr>
<tr><td>50%</td><td>"30 000" (6+К)</td></tr>
</tbody></table></figure>
<p>2. Предоставьте «Кафолат» Регистрационный бланк и Ваучер, выданные при подключении по акции «КАСКО (автострахование): до -50%» в офисах Perfectum.<br>3. Получите разовую скидку на страховой полис КАСКО от «Кафолат».<br>Важно! Передача Ваучера третьему лицу не допускается.</p>
<p>Акция доступна для всех категорий лиц: физические лица, достигшие 18 лет, граждане Республики Узбекистан, иностранные граждане и лица без гражданства, имеющие вид на жительство, индивидуальные предприниматели, юридические лица.</p>
<p>Информацию по страховому полису КАСКО от «Кафолат» можно получить по тел.: +99897 400 33 37, +99871 2028822, www.kafolat.uz.</p>
HTML,
            'uz' => <<<'HTML'
<p>«Kaolat» (transport vositalarini sug`urtalash) avtotransport sug`urtasidan KASKO sug`urta polisi bo`yicha -50% gacha chegirma olishni xohlaysizmi?</p>
<p>1. Perfectum ning «6+K» toifasidagi har qanday tarifiga ulang:</p>
<figure class="table"><table><tbody>
<tr><td>«Kafolat» kompaniyasi KASKO sug`urta polisi bo`yicha chegirma miqdori</td><td>«6+K» tarif toifasi</td></tr>
<tr><td>10%</td><td>«888+» (6+K)</td></tr>
<tr><td>20%</td><td>«2 000» (6+K)</td></tr>
<tr><td>25%</td><td>«Talk 2» (6+K)</td></tr>
<tr><td>30%</td><td>«10 000» (6+K)</td></tr>
<tr><td>50%</td><td>«30 000» (6+K)</td></tr>
</tbody></table></figure>
<p>2. Kompaniya ofislarida «KASKO (avtosugurta): -50%gacha» aksiyasi doirasidagi ulanganingizda berilgan «Kafolat» ro`yxatga o`tish varaqasi va vaucherni taqdim eting.<br>3. «Kafolat»dan KASKO polisi operatsiyasi bir martalik chegirmaga ega bo`ling.</p>
<p>«Kafolat»dan KASKO sug`urta polisi bo`yicha ushbu telefonlar orqali ma`lumot olishingiz mumkin: +99897 400 33 37, +99871 2028822, www.kafolat.uz.</p>
HTML,
        ],
        'image' => 'images/zcJiN8AQ3kUhWT0mxFJYYuZnRDw013kUD6XMWxUL.jpg',
        'sort' => 6,
        'is_published' => false,
        'published_at' => '2021-09-19 19:00:00',
    ],
    [
        'slug' => 'internet-1-plus-1-night-bonus',
        'title' => [
            'ru' => '"1+1"',
            'uz' => '"1+1"',
        ],
        'description' => [
            'ru' => 'Интернет-пакет = Ночной бонус!',
            'uz' => 'Internet-paketlar = Tungi bonus!',
        ],
        'content' => [
            'ru' => <<<'HTML'
<p><span style="color:rgb(230,0,0);">Подключайте Интернет-пакеты по акции "1+1" и получайте столько же мегабайт ночью!</span></p>
<figure class="table"><table><tbody>
<tr><td>АИП</td><td>Итого Мб</td><td>USSD/SMS*</td><td>Стоимость</td></tr>
<tr><td>150+150 Мb</td><td>150 Мb + 150 Мb (00:00-06:00)</td><td>7*5*150 Вызов или отправить A 150 на №0777</td><td>12 000 сум</td></tr>
<tr><td>300+300 Мb</td><td>300 Мb + 300 Мb (00:00-06:00)</td><td>7*5*300 Вызов или отправить A 300 на №0777</td><td>20 000 сум</td></tr>
<tr><td>600+600 Мb</td><td>600 Мb + 600 Мb (00:00-06:00)</td><td>7*5*600 Вызов или отправить A 600 на №0777</td><td>30 000 сум</td></tr>
<tr><td>1200+1200 Мb</td><td>1200 Мb + 1200 Мb (00:00-06:00)</td><td>7*5*1200 Вызов или отправить A 1200 на №0777</td><td>40 000 сум</td></tr>
<tr><td>2400+2400 Мb</td><td>2400 Мb + 2400 Мb (00:00-06:00)</td><td>7*5*2400 Вызов или отправить A 2400 на №0777</td><td>50 000 сум</td></tr>
<tr><td>3600+3600 Мb</td><td>3600 Мb + 3600 Мb (00:00-06:00)</td><td>7*5*3600 Вызов или отправить A 3600 на №0777</td><td>60 000 сум</td></tr>
<tr><td>4800+4800 Мb</td><td>4800 Мb + 4800 Мb (00:00-06:00)</td><td>7*5*4800 Вызов или отправить A 4800 на №0777</td><td>75 000 сум</td></tr>
</tbody></table></figure>
<p>Условия:<br>При активации любого АИП автоматически предоставляется ночной ИП того же номинала только в ночной период с 00:00 до 06:00. Срок действия — 30 дней с даты активации. Не допускается одновременное использование более пяти АИП.</p>
HTML,
            'uz' => <<<'HTML'
<p><span style="color:rgb(230,0,0);">Internet-paketlarni ulang va kechasi bir hil miqdordagi megabaytlarni oling!</span></p>
<figure class="table"><table><tbody>
<tr><td>Jami Mb</td><td>USSD/SMS*</td><td>Narxi</td></tr>
<tr><td>150 Мb + 150 Мb (00:00-06:00)</td><td>7*5*150 Chaqiruv yoki №0777ga A 150 SMS-kodi</td><td>12 000 so`m</td></tr>
<tr><td>300 Мb + 300 Мb (00:00-06:00)</td><td>7*5*300 Chaqiruv yoki №0777ga A 300 SMS-kodi</td><td>20 000 so`m</td></tr>
<tr><td>600 Мb + 600 Мb (00:00-06:00)</td><td>7*5*600 Chaqiruv yoki №0777ga A 600 SMS-kodi</td><td>30 000 so`m</td></tr>
<tr><td>1200 Мb + 1200 Мb (00:00-06:00)</td><td>7*5*1200 Chaqiruv yoki №0777ga A 1200 SMS-kodi</td><td>40 000 so`m</td></tr>
<tr><td>2400 Мb + 2400 Мb (00:00-06:00)</td><td>7*5*2400 Chaqiruv yoki №0777ga A 2400 SMS-kodi</td><td>50 000 so`m</td></tr>
<tr><td>3600 Мb + 3600 Мb (00:00-06:00)</td><td>7*5*3600 Chaqiruv yoki №0777ga A 3600 SMS-kodi</td><td>60 000 so`m</td></tr>
<tr><td>4800 Мb + 4800 Мb (00:00-06:00)</td><td>7*5*4800 Chaqiruv yoki №0777ga A 4800 SMS-kodi</td><td>75 000 so`m</td></tr>
</tbody></table></figure>
<p>Shartlari:<br>Har qanday AIP aktivlashtirilganda huddi shu nominaldagi tungi IP avtomatik ravishda 00:00 dan 06:00 gacha 30 kun faqat tungi vaqtda foydalanish uchun taqdim qilinadi. AIP amal qilish muddati - 30 kun. Bir vaqtning o`zida beshtadan ortiq AIP bilan foydalanishga yo`l qo`yilmaydi.</p>
HTML,
        ],
        'image' => 'images/nYzPLBnKr2G0bfNoWAYSG0aYnocS5UTCIOzstQS3.png',
        'sort' => 4,
        'is_published' => true,
        'published_at' => '2022-05-11 19:00:00',
    ],
    [
        'slug' => 'internet-bonus',
        'title' => [
            'ru' => '"Internet bonus"',
            'uz' => '"Internet bonus"',
        ],
        'description' => [
            'ru' => 'Акция',
            'uz' => 'Aksiya',
        ],
        'content' => [
            'ru' => <<<'HTML'
<p><span style="color:rgb(230,0,0);">ИНТЕРНЕТ ПАКЕТЫ НА 30 ДНЕЙ:</span></p>
<figure class="table"><table><tbody>
<tr><td>Интернет-пакет</td><td>Цена</td><td>USSD</td><td>SMS на 0777</td></tr>
<tr><td>АКЦИЯ "INTERNET BONUS": 7200 МБ + 7200 МБ</td><td>95 000 сум</td><td>7*7*7200</td><td>7200</td></tr>
<tr><td>АКЦИЯ "INTERNET BONUS": 9600 МБ + 9600 МБ</td><td>125 000 сум</td><td>7*7*9600</td><td>9600</td></tr>
<tr><td>АКЦИЯ "INTERNET BONUS": 19200 МБ + 19200 МБ</td><td>175 000 сум</td><td>7*7*19200</td><td>19200</td></tr>
</tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<p><span style="color:rgb(230,0,0);">30 KUNGA INTERNET PAKETLARI:</span></p>
<figure class="table"><table><tbody>
<tr><td>Internet-paket</td><td>Narxi</td><td>USSD</td><td>SMS 0777 ga</td></tr>
<tr><td>AKSIYA "INTERNET BONUS": 7200 MB + 7200 MB</td><td>95 000 so`m</td><td>7*7*7200</td><td>7200</td></tr>
<tr><td>AKSIYA "INTERNET BONUS": 9600 MB + 9600 MB</td><td>125 000 so`m</td><td>7*7*9600</td><td>9600</td></tr>
<tr><td>AKSIYA "INTERNET BONUS": 19200 MB + 19200 MB</td><td>175 000 so`m</td><td>7*7*19200</td><td>19200</td></tr>
</tbody></table></figure>
HTML,
        ],
        'image' => 'images/TsTRtX8RKL1jDRHSykeAa8lufWhqt0fQxuDsua11.png',
        'sort' => 3,
        'is_published' => true,
        'published_at' => '2022-05-11 19:00:00',
    ],
    [
        'slug' => 'novey-phone-promo',
        'title' => [
            'ru' => 'Акция «Novey»!',
            'uz' => '«Novey» aksiyasi!',
        ],
        'description' => null,
        'content' => [
            'ru' => <<<'HTML'
<p>При покупке телефона модели «NOVEY Z1+» — <span style="color:rgb(255,102,0);">БЕСПЛАТНЫЙ ТАРИФ</span> «NOVEY» <span style="color:rgb(255,102,0);">целых 3 месяца</span>!</p>
<p>Только при новом подключении в офисах Компании абонентского номера с покупкой телефона модели «Novey Z1+», чьи серийные номера зарегистрированы в базе данных Компании в течение срока, не превышающего 1 (одного) календарного месяца с даты покупки, предоставляется право подключения на тарифный план «Novey»:</p>
<p>Абонентская плата — <span style="color:rgb(255,102,0);">0 сум</span> (не оплачивается в течении срока действия).<br>Лимит на исходящие звонки по Узбекистану — <span style="color:rgb(255,102,0);">2000 минут</span> в месяц.<br>Лимит на исходящие SMS по Узбекистану — <span style="color:rgb(255,102,0);">2 000 SMS</span> в месяц.</p>
<p>Тарификация сверх лимита: Исходящие звонки по Узбекистану — 200 сум/мин. Исходящие SMS — 100 сум/SMS. Входящие звонки и SMS — 0 сум.</p>
<p>Срок действия тарифа «Novey» — с даты подключения и на протяжении 2 (двух) месяцев. По истечении срока тариф автоматически переводится на «PRO-100».</p>
<p>Стоимость телефона «Novey Z1+» — 564 000 сум.</p>
HTML,
            'uz' => <<<'HTML'
<p>"NOVEY Z1+" telefon modelini sotib olayotganda — «NOVEY» TARIFI <span style="color:rgb(255,102,0);">butun 3 oy BEPUL</span>.</p>
<p>Kompaniya ofislarida faqat abonent raqami yangi ulanganda Novey Z1+ rusumidagi telefonni sotib olganda, ushbu telefon apparati Kompaniyada sotib olingan kundan boshlab 1 (bir) kalendar oydan ko`p bo`lmagan muddatda Kompaniyaning ma`lumotlar bazasida seriya raqamlari ro`yxatga olingan holda, "Novey" tarif rejasiga ulanish huquqi beriladi.</p>
<p>Abonent to`lovi — <span style="color:rgb(255,102,0);">0 so`m</span>. O`zbekiston bo`ylab chiquvchi qo`ng`iroqlar uchun limit — <span style="color:rgb(255,102,0);">2000 daqiqa</span> oyiga. O`zbekiston bo`ylab chiquvchi SMS uchun limit — <span style="color:rgb(255,102,0);">2 000 SMS</span> oyiga.</p>
<p>«Novey Z1+» rusumdagi telefonining narxi — 564 000 so`m.</p>
HTML,
        ],
        'image' => 'images/Z484VWTAxh2JE6VLCuVAW5nEJJVeEX1LVZ3mrvvf.jpg',
        'sort' => 5,
        'is_published' => false,
        'published_at' => '2023-04-11 19:00:00',
    ],
    [
        'slug' => 'oquvchi-tariff-cashback',
        'title' => [
            'ru' => 'Новый тариф «O`quvchi» и «100% Cashback за телефон» от Perfectum!',
            'uz' => 'Perfectumdan yangi "O`quvchi" tarifi va "Telefon uchun 100% Cashback"!',
        ],
        'description' => [
            'ru' => 'Новый тариф',
            'uz' => 'Yangi tarif',
        ],
        'content' => [
            'ru' => <<<'HTML'
<p>Специально для детей, посещающих школьные учебные заведения, колледжи и лицеи, разработан специальный тариф <span style="color:rgb(255,102,0);">«O`quvchi»</span> с включенным объемом — 600 минут на локальную голосовую связь и 600 SMS по Узбекистану за 23 000 сумов в месяц.</p>
<p>Новый тариф «O`quvchi» от Perfectum позволит юному пользователю мобильной связи не только оставаться всегда на связи с родителями, но и общаться со своими сверстниками.</p>
<p>Только для данного тарифа действует эксклюзивное предложение — «100% Cashback за телефон»: при новом подключении на тарифный план «O`quvchi» с покупкой телефона модели «Novey C10», Perfectum вернёт полную стоимость телефона (300 000 сумов) путём ежемесячного зачисления по 10 000 сумов на абонентский счёт.</p>
<p>Отличительной особенностью телефона модели «Novey C10» является встроенная функция «СуперАОН».</p>
<p>Подключение на тариф «O`quvchi» оформляется на родителя ребёнка на основании свидетельства о рождении ребёнка, не достигшего совершеннолетия.</p>
HTML,
            'uz' => <<<'HTML'
<p>Maktab o`quv muassasalari, kollejlar va litseylarga qatnaydigan bolalar uchun, daqiqalar va SMSlarni o`z ichiga olgan maxsus <span style="color:rgb(255,102,0);">«O`quvchi»</span> tarifi ishlab chiqilgan bo`lib, unda mahalliy ovozli aloqa uchun 600 daqiqa va O`zbekiston bo`yicha 600 SMS oyiga 23 000 so`m evaziga mavjud.</p>
<p>Perfectumning yangi "O`quvchi" tarifi yosh uyali aloqa foydalanuvchisiga nafaqat ota-onasi bilan doimo aloqada bo`lish, balki tengdoshlari bilan ham muloqot qilish imkonini beradi.</p>
<p>Faqatgina ushbu tarif uchun eksklyuziv taklif — "Telefon uchun 100% Cashback" amal qiladi: "O`quvchi" tarif rejasiga yangi ulanishda "Novey C10" modelli telefonni sotib olinganda, Perfectum har oyda 10 000 so`mdan telefonning to`liq narxini (300 000 so`m) abonent hisobiga qaytaradi.</p>
<p>"Novey C10" modelli telefonining o`ziga xos xususiyati "SuperARA" funktsiyasi.</p>
HTML,
        ],
        'image' => 'images/pqER0qqlS3eEz9R5hQdUl4g7FF6zOs9sPkDIgTbJ.jpg',
        'sort' => 7,
        'is_published' => false,
        'published_at' => '2023-10-25 19:00:00',
    ],
    [
        'slug' => 'new-year-numbers-discount',
        'title' => [
            'ru' => '🎄 Новогодние скидки на красивые номера! 🎉',
            'uz' => '🎄 Yangi yil chegirmalari chiroyli raqamlarga! 🎉',
        ],
        'description' => [
            'ru' => 'Акция',
            'uz' => 'Aksiya',
        ],
        'content' => [
            'ru' => <<<'HTML'
<p><strong>Поторопитесь! Только до 31 декабря 2025 вы можете приобрести красивый номер со скидкой до 80%!</strong></p>
<p>Акция действует на полугодовые тарифы Qulay.</p>
<p>📲 Подробности и подбор номера: +998 98 305 11 11 (Telegram)</p>
HTML,
            'uz' => <<<'HTML'
<p><strong>Shoshiling! Faqat 2025-yil 31-dekabrgacha chiroyli raqamlarni 80% gacha chegirma bilan xarid qilishingiz mumkin!</strong></p>
<p>Aksiya Qulay yarim yillik tariflariga amal qiladi.</p>
<p>📲 Batafsil ma`lumot va raqam tanlash: +998 98 305 11 11 (Telegram)</p>
HTML,
        ],
        'image' => 'images/1hssIBSrUiMuwMJeQ83ZaL0VZuzygow65vN2OV3V.jpg',
        'sort' => 2,
        'is_published' => false,
        'published_at' => '2025-12-11 19:00:00',
    ],
    [
        'slug' => 'numbers-discount-90',
        'title' => [
            'ru' => 'Акция «Скидки на номера — до 90%!»',
            'uz' => 'Aksiya "Raqamlarga chegirmalar — 90% gacha!"',
        ],
        'description' => [
            'ru' => 'Акция',
            'uz' => 'Aksiya',
        ],
        'content' => [
            'ru' => <<<'HTML'
<p><strong>Успейте забрать</strong> свой неповторимый номер со скидкой до 90%!</p>
<p>При подключении / смене / перезаключении платного привилегированного номера в офисах и дилерских пунктах Компании предоставляются специальные цены на платные привилегированные номера:</p>
<figure class="table"><table><tbody>
<tr><td>Номинальная стоимость номера</td><td>Специальная цена номера</td></tr>
<tr><td>50 000 сўм</td><td>5 000 сўм</td></tr>
<tr><td>100 000 сўм</td><td>30 000 сўм</td></tr>
<tr><td>125 000 сўм</td><td>37 500 сўм</td></tr>
<tr><td>200 000 сўм</td><td>60 000 сўм</td></tr>
<tr><td>225 000 сўм</td><td>67 500 сўм</td></tr>
<tr><td>325 000 сўм</td><td>97 500 сўм</td></tr>
<tr><td>425 000 сўм</td><td>170 000 сўм</td></tr>
<tr><td>450 000 сўм</td><td>180 000 сўм</td></tr>
<tr><td>500 000 сўм</td><td>250 000 сўм</td></tr>
<tr><td>650 000 сўм</td><td>325 000 сўм</td></tr>
<tr><td>750 000 сўм</td><td>375 000 сўм</td></tr>
<tr><td>850 000 сўм</td><td>425 000 сўм</td></tr>
<tr><td>1 000 000 сўм</td><td>500 000 сўм</td></tr>
<tr><td>1 500 000 сўм</td><td>750 000 сўм</td></tr>
<tr><td>2 000 000 сўм</td><td>1 000 000 сўм</td></tr>
<tr><td>3 000 000 сўм</td><td>1 500 000 сўм</td></tr>
<tr><td>4 000 000 сўм</td><td>2 000 000 сўм</td></tr>
<tr><td>4 250 000 сўм</td><td>2 125 000 сўм</td></tr>
<tr><td>5 000 000 сўм</td><td>2 500 000 сўм</td></tr>
<tr><td>8 000 000 сўм</td><td>4 000 000 сўм</td></tr>
<tr><td>8 500 000 сўм</td><td>4 250 000 сўм</td></tr>
<tr><td>10 000 000 сўм</td><td>5 000 000 сўм</td></tr>
<tr><td>12 500 000 сўм</td><td>6 250 000 сўм</td></tr>
<tr><td>15 000 000 сўм</td><td>7 500 000 сўм</td></tr>
<tr><td>20 000 000 сўм</td><td>10 000 000 сўм</td></tr>
<tr><td>25 000 000 сўм</td><td>12 500 000 сўм</td></tr>
<tr><td>30 000 000 сўм</td><td>15 000 000 сўм</td></tr>
<tr><td>35 000 000 сўм</td><td>17 500 000 сўм</td></tr>
<tr><td>45 000 000 сўм</td><td>22 500 000 сўм</td></tr>
<tr><td>50 000 000 сўм</td><td>25 000 000 сўм</td></tr>
</tbody></table></figure>
<p>В Маркетинговом мероприятии принимают участие физические лица, достигшие 18 лет, граждане Республики Узбекистан, постоянно проживающие на территории Республики Узбекистан, иностранные граждане и лица без гражданства, имеющие вид на жительство, индивидуальные предприниматели и юридические лица (в том числе абоненты, имеющие статус «Корпоративный»).</p>
<p>Данное маркетинговое мероприятие не распространяется на услугу «Номер в рассрочку».</p>
HTML,
            'uz' => <<<'HTML'
<p>Takrorlanmas raqamingizni 90% gacha chegirma bilan olishga ulgurib qoling!</p>
<p>Kompaniya ofislari va dilerlik shoxobchalarida pulli imtiyozli raqamni ulash/o`zgartirish/qayta ulash paytida pullik imtiyozli raqamlar uchun maxsus narxlar taqdim etiladi:</p>
<figure class="table"><table><tbody>
<tr><td>Raqamning nominal narxi</td><td>Raqamning maxsus narxi</td></tr>
<tr><td>50 000 so`m</td><td>5 000 so`m</td></tr>
<tr><td>100 000 so`m</td><td>30 000 so`m</td></tr>
<tr><td>125 000 so`m</td><td>37 500 so`m</td></tr>
<tr><td>200 000 so`m</td><td>60 000 so`m</td></tr>
<tr><td>225 000 so`m</td><td>67 500 so`m</td></tr>
<tr><td>325 000 so`m</td><td>97 500 so`m</td></tr>
<tr><td>425 000 so`m</td><td>170 000 so`m</td></tr>
<tr><td>450 000 so`m</td><td>180 000 so`m</td></tr>
<tr><td>500 000 so`m</td><td>250 000 so`m</td></tr>
<tr><td>650 000 so`m</td><td>325 000 so`m</td></tr>
<tr><td>750 000 so`m</td><td>375 000 so`m</td></tr>
<tr><td>850 000 so`m</td><td>425 000 so`m</td></tr>
<tr><td>1 000 000 so`m</td><td>500 000 so`m</td></tr>
<tr><td>1 500 000 so`m</td><td>750 000 so`m</td></tr>
<tr><td>2 000 000 so`m</td><td>1 000 000 so`m</td></tr>
<tr><td>3 000 000 so`m</td><td>1 500 000 so`m</td></tr>
<tr><td>4 000 000 so`m</td><td>2 000 000 so`m</td></tr>
<tr><td>4 250 000 so`m</td><td>2 125 000 so`m</td></tr>
<tr><td>5 000 000 so`m</td><td>2 500 000 so`m</td></tr>
<tr><td>8 000 000 so`m</td><td>4 000 000 so`m</td></tr>
<tr><td>8 500 000 so`m</td><td>4 250 000 so`m</td></tr>
<tr><td>10 000 000 so`m</td><td>5 000 000 so`m</td></tr>
<tr><td>12 500 000 so`m</td><td>6 250 000 so`m</td></tr>
<tr><td>15 000 000 so`m</td><td>7 500 000 so`m</td></tr>
<tr><td>20 000 000 so`m</td><td>10 000 000 so`m</td></tr>
<tr><td>25 000 000 so`m</td><td>12 500 000 so`m</td></tr>
<tr><td>30 000 000 so`m</td><td>15 000 000 so`m</td></tr>
<tr><td>35 000 000 so`m</td><td>17 500 000 so`m</td></tr>
<tr><td>45 000 000 so`m</td><td>22 500 000 so`m</td></tr>
<tr><td>50 000 000 so`m</td><td>25 000 000 so`m</td></tr>
</tbody></table></figure>
<p>Marketing tadbirida 18 yoshga to`lgan jismoniy shaxslar: O`zbekiston Respublikasi hududida doimiy yashovchi O`zbekiston Respublikasi fuqarolari, yashash uchun ruxsatnomaga ega bo`lgan chet el fuqarolari va fuqaroligi bo`lmagan shaxslar, shuningdek yakka tartibdagi tadbirkorlar va yuridik shaxslar ishtirok etishlari mumkin.</p>
<p>Ushbu marketing tadbiri "Muddatli to`lovga raqam" xizmatiga taalluqli emas.</p>
HTML,
        ],
        'image' => 'images/Qmz4Akmfc8EPDxmGXCdl7P5ho4j0evbgxHoVRw0h.jpg',
        'sort' => 1,
        'is_published' => true,
        'published_at' => '2024-11-30 19:00:00',
    ],
];
