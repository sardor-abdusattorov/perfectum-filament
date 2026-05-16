<?php

namespace Database\Seeders;

use App\Enums\PageSettingKey;
use App\Models\PageBlock;
use Illuminate\Database\Seeder;

class PageBlocksSeeder extends Seeder
{
    public function run(): void
    {
        $blocks = [
            [
                'page' => PageSettingKey::Contacts->value,
                'name' => 'main',
                'title' => null,
                'description' => null,
                'content' => [
                    'ru' => $this->contactsRu(),
                    'uz' => $this->contactsUz(),
                    'en' => $this->contactsEn(),
                ],
            ],
            [
                'page' => PageSettingKey::About->value,
                'name' => 'main',
                'title' => null,
                'description' => [
                    'ru' => 'История ООО «Rubicon Wireless Communication» (торговая марка Perfectum):',
                    'uz' => '«Rubicon Wireless Communication» MCHJ tarixi (Perfectum savdo belgisi):',
                    'en' => 'History of «Rubicon Wireless Communication» LLC (Perfectum trademark):',
                ],
                'content' => [
                    'ru' => $this->aboutRu(),
                    'uz' => $this->aboutUz(),
                    'en' => $this->aboutEn(),
                ],
            ],
        ];

        foreach ($blocks as $block) {
            PageBlock::updateOrCreate(
                [
                    'page' => $block['page'],
                    'name' => $block['name'],
                ],
                [
                    'title' => $block['title'],
                    'description' => $block['description'],
                    'content' => $block['content'],
                    'image' => null,
                    'is_published' => true,
                ],
            );
        }

        $this->command?->info('Imported ' . count($blocks) . ' page blocks.');
    }

    private function contactsRu(): string
    {
        return <<<'HTML'
<table><tbody><tr><td colspan="2"><p>РЕЖИМ РАБОТЫ ОФИСОВ</p></td></tr><tr><td rowspan="2"><p>будние дни</p></td><td><p>Головной офис (г. Ташкент) — 08:00 — 19:00</p></td></tr><tr><td><p>Другие офисы — 09:00 — 18:00</p></td></tr><tr><td><p>суббота</p></td><td><p>10:00 — 17:00</p></td></tr></tbody></table>
<table><tbody><tr><td></td><td><p>АДРЕС</p></td><td><p>ТЕЛЕФОН</p></td></tr><tr><td><p>ЦЕНТРАЛЬНЫЙ ОФИС</p></td><td><p>100060, Узбекистан,<br>г. Ташкент, ул. Тараса Шевченко, 21</p></td><td><p>+998983051111,<br>+998981270077,<br>для абонентов Perfectum: 077 (бесплатно) и 099 — 84,20 сум/мин.</p></td></tr><tr><td><p>ЧИЛАНЗАРСКИЙ ОФИС</p></td><td><p>ул. Гагарина, дом 40</p></td><td><p>+998981270022</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="3"><p>ФИЛИАЛЫ В РЕГИОНАХ</p></td></tr><tr><td><p>АНДИЖАН</p></td><td><p>Проспект Бобуршох, 22г</p></td><td rowspan="13"><p>+998983051111</p></td></tr><tr><td><p>БУХАРА</p></td><td><p>ул. Мустакиллик, д. 28/2, блок 4 (ор-р: к/т «Бухоро»)</p></td></tr><tr><td><p>ГУЛИСТАН</p></td><td><p>ул. Сайхун, д. 17</p></td></tr><tr><td><p>ДЖИЗАК</p></td><td><p>ул. Ш. Рашидова, 300</p></td></tr><tr><td><p>КАРШИ</p></td><td><p>Шодлик МФЙ, ул. Насаф</p></td></tr><tr><td><p>КОКАНД</p></td><td><p>ул. Туркистон, д. 136Е. Ориентир: Гишт куприк, рядом с пожарной службой</p></td></tr><tr><td><p>НАВОИ</p></td><td><p>ул. Ислама Каримова, 103</p></td></tr><tr><td><p>НАМАНГАН</p></td><td><p>3 пр. И. Каримова, д. 1а</p></td></tr><tr><td><p>НУКУС</p></td><td><p>ул. Каракалпакстан, д. 20</p></td></tr><tr><td><p>САМАРКАНД</p></td><td><p>ул. Шохрух Мирзо, 62а</p></td></tr><tr><td><p>ТЕРМЕЗ</p></td><td><p>ул. Ибн Сино, д. 29. Ориентир: ж/д вокзал, напротив городского военкомата</p></td></tr><tr><td><p>УРГЕНЧ</p></td><td><p>ул. Пахловон Махмуд, 17</p></td></tr><tr><td><p>ФЕРГАНА</p></td><td><p>ул. Б. Маргилоний Машъал, 29 МФЙ</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="2"><p>РЕЖИМ РАБОТЫ СЛУЖБЫ CALL-ЦЕНТРА</p></td></tr><tr><td><p>с 07:00 до 23:00</p></td><td><p>+998983051111, +998981270077,<br>077 (бесплатно для абонентов Perfectum), 099 (84,20 сум/мин.)</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="2"><p>ГРАФИК ПРИЁМА ГРАЖДАН</p></td></tr><tr><td><p style="text-align: center;"><strong>ВТОРНИК, ПЯТНИЦА</strong></p></td><td><p>10:00 — 12:00</p></td></tr></tbody></table>
HTML;
    }

    private function contactsUz(): string
    {
        return <<<'HTML'
<table><tbody><tr><td colspan="2"><p>OFISNING ISH TARTIBI</p></td></tr><tr><td rowspan="2"><p>ish kunlari</p></td><td><p>Bosh ofis (Toshkent sh.) — <strong>08:00</strong>—<strong>19:00</strong></p></td></tr><tr><td><p>Boshqa ofislar — <strong>09:00</strong>—<strong>18:00</strong></p></td></tr><tr><td><p>shanba</p></td><td><p><strong>10:00</strong>—<strong>17:00</strong></p></td></tr></tbody></table>
<table><tbody><tr><td></td><td><p>MANZIL</p></td><td><p>TELEFON</p></td></tr><tr><td><p>MARKAZIY OFIS</p></td><td><p>100060, Oʻzbekiston,<br>Toshkent shahri, Taras Shevchenko koʻchasi, 21-uy</p></td><td><p>+998983051111,<br>+998981270077,<br>«Perfectum» mobil telefondan: 077 (bepul) va 099 — 84,20 soʻm/daq.</p></td></tr><tr><td><p>CHILONZOR OFISI</p></td><td><p>Gagarina koʻch., 40-uy</p></td><td><p>+998981270022</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="3"><p>VILOYATDAGI OFISLAR</p></td></tr><tr><td><p>ANDIJON</p></td><td><p>Boburshox prospekti, 22.</p></td><td rowspan="13"><p>+998983051111</p></td></tr><tr><td><p>BUXORO</p></td><td><p>Mustaqillik koʻchasi, 28-uy, 2-blok, 4. Moʻljal: k/t «Buxoro»</p></td></tr><tr><td><p>GULISTON</p></td><td><p>Sayxun koʻchasi, 17-uy</p></td></tr><tr><td><p>JIZZAX</p></td><td><p>Sharof Rashidov, 300</p></td></tr><tr><td><p>QARSHI</p></td><td><p>Shodlik MFY, Nasaf koʻchasi</p></td></tr><tr><td><p>QOʻQON</p></td><td><p>Qoʻqon sh., Turkiston koʻchasi, 136E uy. Moʻljal: Gʻisht koʻprik, yongʻin xizmati yonida</p></td></tr><tr><td><p>NAVOIY</p></td><td><p>Islom Karimov koʻchasi, 103</p></td></tr><tr><td><p>NAMANGAN</p></td><td><p>3-ch tor koʻchasi, 1</p></td></tr><tr><td><p>NUKUS</p></td><td><p>Qoraqalpogʻiston koʻchasi, 20-uy</p></td></tr><tr><td><p>SAMARQAND</p></td><td><p>Shoxrux Mirzo koʻchasi, 62</p></td></tr><tr><td><p>TERMEZ</p></td><td><p>Ibn Sino koʻchasi, 29-uy. Moʻljal: temir yoʻl vokzali, shahar voenkomati roʻparasida</p></td></tr><tr><td><p>URGANCH</p></td><td><p>Paxlavon Maxmud, 17</p></td></tr><tr><td><p>FARGʻONA</p></td><td><p>B. Margʻiloniy Mashʼal koʻchasi, 29 MFY</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="2"><p>MAʼLUMOTLAR XIZMATI (CALL-MARKAZ) NING ISH VAQTLARI:</p></td></tr><tr><td><p>07:00 dan 23:00 gacha</p></td><td><p>+998983051111, +998981270077, 077 (Perfectum abonentlari uchun bepul),<br>099 (84,20 soʻm/daq.)</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="2"><p>Fuqarolarning murojaatlarini qabul qilish jadvali</p></td></tr><tr><td><p style="text-align: center;"><strong>SESHANBA, JUMA</strong></p></td><td><p><strong>10:00</strong>—<strong>12:00</strong></p></td></tr></tbody></table>
HTML;
    }

    private function contactsEn(): string
    {
        return <<<'HTML'
<table><tbody><tr><td colspan="2"><p>OFFICE HOURS</p></td></tr><tr><td rowspan="2"><p>weekdays</p></td><td><p>Head office (Tashkent) — <strong>08:00</strong>—<strong>19:00</strong></p></td></tr><tr><td><p>Other offices — <strong>09:00</strong>—<strong>18:00</strong></p></td></tr><tr><td><p>Saturday</p></td><td><p><strong>10:00</strong>—<strong>17:00</strong></p></td></tr></tbody></table>
<table><tbody><tr><td></td><td><p>ADDRESS</p></td><td><p>PHONE</p></td></tr><tr><td><p>HEAD OFFICE</p></td><td><p>100060, Uzbekistan,<br>Tashkent, 21 Taras Shevchenko street</p></td><td><p>+998983051111,<br>+998981270077,<br>for Perfectum subscribers: 077 (free) and 099 — 84.20 UZS/min.</p></td></tr><tr><td><p>CHILANZAR OFFICE</p></td><td><p>40 Gagarin street</p></td><td><p>+998981270022</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="3"><p>REGIONAL OFFICES</p></td></tr><tr><td><p>ANDIJAN</p></td><td><p>22 Boburshokh avenue</p></td><td rowspan="13"><p>+998983051111</p></td></tr><tr><td><p>BUKHARA</p></td><td><p>28/2 Mustaqillik street, block 4 (landmark: «Bukhoro» cinema)</p></td></tr><tr><td><p>GULISTAN</p></td><td><p>17 Sayhun street</p></td></tr><tr><td><p>JIZZAKH</p></td><td><p>300 Sharof Rashidov street</p></td></tr><tr><td><p>KARSHI</p></td><td><p>Shodlik MFY, Nasaf street</p></td></tr><tr><td><p>KOKAND</p></td><td><p>136E Turkiston street. Landmark: Gisht Kuprik, next to the fire service</p></td></tr><tr><td><p>NAVOI</p></td><td><p>103 Islam Karimov street</p></td></tr><tr><td><p>NAMANGAN</p></td><td><p>1a, 3rd lane, I. Karimov avenue</p></td></tr><tr><td><p>NUKUS</p></td><td><p>20 Karakalpakstan street</p></td></tr><tr><td><p>SAMARKAND</p></td><td><p>62a Shokhrukh Mirzo street</p></td></tr><tr><td><p>TERMEZ</p></td><td><p>29 Ibn Sino street. Landmark: railway station, opposite the city military registration office</p></td></tr><tr><td><p>URGENCH</p></td><td><p>17 Pakhlavon Makhmud street</p></td></tr><tr><td><p>FERGANA</p></td><td><p>29 B. Margiloniy Mashal street, MFY</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="2"><p>CALL CENTER WORKING HOURS</p></td></tr><tr><td><p>from 07:00 to 23:00</p></td><td><p>+998983051111, +998981270077,<br>077 (free for Perfectum subscribers), 099 (84.20 UZS/min.)</p></td></tr></tbody></table>
<table><tbody><tr><td colspan="2"><p>CITIZEN APPOINTMENT SCHEDULE</p></td></tr><tr><td><p style="text-align: center;"><strong>TUESDAY, FRIDAY</strong></p></td><td><p><strong>10:00</strong>—<strong>12:00</strong></p></td></tr></tbody></table>
HTML;
    }

    private function aboutRu(): string
    {
        return <<<'HTML'
<p>Perfectum™ — стремительно развивающаяся компания с богатой историей, уверенно смотрящая в будущее.<br>Основанные в 1995 году, сегодня мы внедряем передовые технологии в сфере мобильной и фиксированной связи и формируем новый этап телекоммуникационного рынка Узбекистана.</p>
<p>В 2023 году Perfectum™ запустил масштабный проект по созданию с нуля национальной сети 5G Standalone. Этот проект позволяет предоставлять услуги связи последнего поколения.</p>
<p>Наша миссия — обеспечить население и бизнес Узбекистана высокоскоростным, надёжным и безопасным интернетом на базе новейших технологий 5G Standalone.<br>Мы стремимся стать ведущим телеком-провайдером региона, открывая клиентам и партнёрам двери к новым возможностям роста, инноваций и успеха.</p>
HTML;
    }

    private function aboutUz(): string
    {
        return <<<'HTML'
<p>Perfectum™ — tez rivojlanayotgan, boy tarixga ega va jasorat bilan kelajakka qarayotgan kompaniya.<br>1995-yilda asos solingan biz bugun mobil va fiks aloqa sohasidagi ilgʻor texnologiyalarni joriy etib, Oʻzbekiston telekommunikatsiya bozorining yangi bosqichini shakllantirmoqdamiz.</p>
<p>2023-yilda Perfectum™ mamlakat miqyosidagi 5G Standalone tarmogʻini noldan yaratish boʻyicha yirik loyihani ishga tushirdi. Ushbu loyiha eng soʻnggi avlod aloqa xizmatlarini taqdim etish imkonini beradi.</p>
<p>Bizning missiyamiz — Oʻzbekiston aholisi va biznesini eng yangi 5G Standalone texnologiyalariga asoslangan yuqori tezlikdagi, ishonchli va xavfsiz internet bilan taʼminlashdir.<br>Biz mijozlar va hamkorlar uchun oʻsish, innovatsiya va muvaffaqiyat sari yangi imkoniyatlar eshigini ochgan holda, mintaqadagi yetakchi telekom-provayderga aylanishga intilamiz.</p>
HTML;
    }

    private function aboutEn(): string
    {
        return <<<'HTML'
<p>Perfectum™ is a rapidly growing company with a rich history and a confident outlook on the future.<br>Founded in 1995, today we are deploying advanced technologies in mobile and fixed-line communications and shaping a new chapter of the telecommunications market in Uzbekistan.</p>
<p>In 2023, Perfectum™ launched a large-scale project to build a nationwide 5G Standalone network from the ground up. The project enables us to deliver the latest generation of communication services.</p>
<p>Our mission is to provide the people and businesses of Uzbekistan with high-speed, reliable and secure internet powered by the latest 5G Standalone technologies.<br>We strive to become the leading telecom provider in the region, opening doors for our customers and partners to new opportunities for growth, innovation and success.</p>
HTML;
    }
}
