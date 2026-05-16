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
                    'en' => $this->contactsUz(),
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
<table><tbody><tr><td rowspan="1" colspan="2"><p>РЕЖИМ РАБОТЫ ОФИСОВ</p></td></tr><tr><td rowspan="2" colspan="1"><p>будние дни <br></p></td><td rowspan="1" colspan="1"><p>Головной офис (г. Ташкент) -  08:00 - 19:00</p></td></tr><tr><td rowspan="1" colspan="1"><p>  Другие офисы  - 09:00 - 18:00</p></td></tr><tr><td rowspan="1" colspan="1"><p>суббота</p></td><td rowspan="1" colspan="1"><p>10:00 - 17:00</p></td></tr></tbody></table><p><strong> </strong></p><table><tbody><tr><td rowspan="1" colspan="1"><p></p></td><td rowspan="1" colspan="1"><p>АДРЕС</p></td><td rowspan="1" colspan="1"><p>ТЕЛЕФОН</p></td></tr><tr><td rowspan="1" colspan="1"><p>ЦЕНТРАЛЬНЫЙ ОФИС</p></td><td rowspan="1" colspan="1"><p>100060, Узбекистан,<br>г.Ташкент, ул. Тараса Шевченко, 21</p></td><td rowspan="1" colspan="1"><p>+998983051111,<br>+998981270077,<br>для абонентов Perfectum: 077 (бесплатно) и 099 - 84,20 сум/ мин.</p></td></tr><tr><td rowspan="1" colspan="1"><p>ЧИЛАНЗАРСКИЙ ОФИС</p></td><td rowspan="1" colspan="1"><p>ул.Гагарина, дом 40</p></td><td rowspan="1" colspan="1"><p>+998981270022</p></td></tr></tbody></table><p><strong> </strong></p><table><tbody><tr><td rowspan="1" colspan="3"><p>ФИЛИАЛЫ В РЕГИОНАХ</p></td></tr><tr><td rowspan="1" colspan="1"><p>АНДИЖАН</p></td><td rowspan="1" colspan="1"><p>Проспект Бобуршох, 22г</p></td><td rowspan="13" colspan="1"><p><br><br><br><br><br><br><br><br><br><br><br><br><br>+998983051111<br></p></td></tr><tr><td rowspan="1" colspan="1"><p>БУХАРА</p></td><td rowspan="1" colspan="1"><p>ул. Мустакиллик, д.28/2,блок 4 (ор-р: к/т «Бухоро»)</p></td></tr><tr><td rowspan="1" colspan="1"><p>ГУЛИСТАН</p></td><td rowspan="1" colspan="1"><p>ул. Сайхун, д.17</p></td></tr><tr><td rowspan="1" colspan="1"><p>ДЖИЗАК</p></td><td rowspan="1" colspan="1"><p>ул. Ш.Рашидова, 300</p></td></tr><tr><td rowspan="1" colspan="1"><p>КАРШИ</p></td><td rowspan="1" colspan="1"><p>Шодлик МФЙ, Насаф к.</p></td></tr><tr><td rowspan="1" colspan="1"><p>КОКАНД</p></td><td rowspan="1" colspan="1"><p>ул.Туркистон д 136Е. Ориентир: Гишт куприк рядом с Пожарной службой</p></td></tr><tr><td rowspan="1" colspan="1"><p>НАВОИ</p></td><td rowspan="1" colspan="1"><p>ул. Ислама Каримова, 103</p></td></tr><tr><td rowspan="1" colspan="1"><p>НАМАНГАН</p></td><td rowspan="1" colspan="1"><p>3 пр. И.Каримова, д.1а</p></td></tr><tr><td rowspan="1" colspan="1"><p>НУКУС</p></td><td rowspan="1" colspan="1"><p>ул. Каракалпакстан, д.20</p></td></tr><tr><td rowspan="1" colspan="1"><p>САМАРКАНД</p></td><td rowspan="1" colspan="1"><p>ул. Шохрух Мирзо, 62а</p></td></tr><tr><td rowspan="1" colspan="1"><p>ТЕРМЕЗ</p></td><td rowspan="1" colspan="1"><p>ул. Ибн Сино дом 29. Ориентир: ж/д вокзал, на против городского военкомата</p></td></tr><tr><td rowspan="1" colspan="1"><p>УРГЕНЧ</p></td><td rowspan="1" colspan="1"><p>ул. Пахловон Махмуд, 17</p></td></tr><tr><td rowspan="1" colspan="1"><p>ФЕРГАНА</p></td><td rowspan="1" colspan="1"><p>ул Б.Маргилоний Машъал 29 М.Ф.Й</p></td></tr></tbody></table><p><strong> </strong></p><table><tbody><tr><td rowspan="1" colspan="2"><p> РЕЖИМ РАБОТЫ СЛУЖБЫ CALL-ЦЕНТРА</p></td></tr><tr><td rowspan="1" colspan="1"><p>с 07:00 до 23:00</p></td><td rowspan="1" colspan="1"><p>+998983051111, +998981270077,<br>077 (бесплатно для абонентов Perfectum),  099 (84.20 сум/мин.)</p></td></tr></tbody></table><p><strong> </strong></p><table><tbody><tr><td rowspan="1" colspan="2"><p>ГРАФИК ПРИЁМА ГРАЖДАН</p></td></tr><tr><td rowspan="1" colspan="1"><p style="text-align: center;"><strong>ВТОРНИК, ПЯТНИЦА</strong></p></td><td rowspan="1" colspan="1"><p>10:00 - 12:00</p></td></tr></tbody></table>
HTML;
    }

    private function contactsUz(): string
    {
        return <<<'HTML'
<table><tbody><tr><td rowspan="1" colspan="2"><p>OFISNI ISH TARTIBI</p></td></tr><tr><td rowspan="2" colspan="1"><p>ish kunlari<br></p></td><td rowspan="1" colspan="1"><p> Bosh ofis (Toshkent sh.) - <strong>08:00</strong>-<strong>19:00</strong></p></td></tr><tr><td rowspan="1" colspan="1"><p>Boshqa ofislar  - <strong>09:00</strong>-<strong>18:00</strong></p></td></tr><tr><td rowspan="1" colspan="1"><p>shanba</p></td><td rowspan="1" colspan="1"><p><strong>10:00 </strong>-<strong>17:00</strong></p></td></tr></tbody></table><p><strong> </strong></p><table><tbody><tr><td rowspan="1" colspan="1"><p></p></td><td rowspan="1" colspan="1"><p>MANZIL</p></td><td rowspan="1" colspan="1"><p>TELEFON</p></td></tr><tr><td rowspan="1" colspan="1"><p>MARKAZIY OFIS</p></td><td rowspan="1" colspan="1"><p>100060, Oʻzbekiston,<br>Toshkent shahri, Taras Shevchenko koʻchasi, 21-uy</p></td><td rowspan="1" colspan="1"><p>+998983051111,<br>+998981270077,<br>«Perfectum» mobil telefondan: 077 (bepul) va 099 - 84,20 so&#039;m / daq.</p></td></tr><tr><td rowspan="1" colspan="1"><p>CHILONZOR OFISI</p></td><td rowspan="1" colspan="1"><p>Gagarina koʻch., 40 uy</p></td><td rowspan="1" colspan="1"><p>+998981270022</p></td></tr></tbody></table><p><strong> </strong></p><table><tbody><tr><td rowspan="1" colspan="3"><p>VILOYATDAGI OFISLAR</p></td></tr><tr><td rowspan="1" colspan="1"><p>ANDIJON</p></td><td rowspan="1" colspan="1"><p>Boburshox prospekti 22.</p></td><td rowspan="13" colspan="1"><p><br><br><br><br><br><br><br><br><br><br><br><br><br>+998983051111<br></p></td></tr><tr><td rowspan="1" colspan="1"><p>BUXORO</p></td><td rowspan="1" colspan="1"><p>Mustaqillik ko`chasi. 28 uy 2 blok 4. Mo`ljal; k/t «Buxoro»)</p></td></tr><tr><td rowspan="1" colspan="1"><p>GULISTON</p></td><td rowspan="1" colspan="1"><p>Sayxun ko`chasi. 17 uy.</p></td></tr><tr><td rowspan="1" colspan="1"><p>JIZZAX</p></td><td rowspan="1" colspan="1"><p>Sharof Rashidov. 300</p></td></tr><tr><td rowspan="1" colspan="1"><p>QARSHI</p></td><td rowspan="1" colspan="1"><p>Shodlik M.F.Y. Nasaf ko`chasi.</p></td></tr><tr><td rowspan="1" colspan="1"><p>QO`QON</p></td><td rowspan="1" colspan="1"><p>Qo`qon sh, Turkiston ko`chasi 136 E uy. Mo`ljal: G`isht ko`prik, yong`in xizmati yonida.</p></td></tr><tr><td rowspan="1" colspan="1"><p>NAVOIY</p></td><td rowspan="1" colspan="1"><p>Islom Karimov  ko`chasi. 103</p></td></tr><tr><td rowspan="1" colspan="1"><p>NAMANGAN</p></td><td rowspan="1" colspan="1"><p>3-ch tor ko`chasi.1</p></td></tr><tr><td rowspan="1" colspan="1"><p>NUKUS</p></td><td rowspan="1" colspan="1"><p>Qoraqalpog`iston ko`chasi  20 uy.</p></td></tr><tr><td rowspan="1" colspan="1"><p>SAMARQAND</p></td><td rowspan="1" colspan="1"><p>Shoxrux Mirzo ko`chasi. 62</p></td></tr><tr><td rowspan="1" colspan="1"><p>TERMEZ</p></td><td rowspan="1" colspan="1"><p>Ibn Sino ko`chasi. 29 uy. Mo`ljal: temir yo&#039;l vokzali, shahar voenkomat ro&#039;parasida</p></td></tr><tr><td rowspan="1" colspan="1"><p>URGANCH</p></td><td rowspan="1" colspan="1"><p>Paxlavon Maxmud. 17</p></td></tr><tr><td rowspan="1" colspan="1"><p>FARG&#039;ONA</p></td><td rowspan="1" colspan="1"><p>B.Marg`iloniy Mashal ko`chasi. 29 M.F.Y.</p></td></tr></tbody></table><p><strong> </strong></p><table><tbody><tr><td rowspan="1" colspan="2"><p>MA&#039;LUMOTLAR XIZMATI (CALL-MARKAZ) NING ISH VAQTLARI:</p></td></tr><tr><td rowspan="1" colspan="1"><p>07:00 dan 23:00 gacha</p></td><td rowspan="1" colspan="1"><p>+998983051111, +998981270077, 077 (Perfectum abonentlari uchun bepul),<br>099 (84.20 so&#039;m/daq.)</p></td></tr></tbody></table><p><strong> </strong></p><table><tbody><tr><td rowspan="1" colspan="2"><p>Fuqarolarning murojaatlarini qabul qilish jadvali.</p></td></tr><tr><td rowspan="1" colspan="1"><p style="text-align: center;"><strong>SESHANBA, JUMA</strong></p></td><td rowspan="1" colspan="1"><p> <strong>10:00 </strong>-<strong>12:00</strong></p></td></tr></tbody></table>
HTML;
    }

    private function aboutRu(): string
    {
        return <<<'HTML'
<p>Perfectum™ — стремительно развивающаяся компания с богатой историей, уверенно смотрящая в будущее.<br>Основанные в 1995 году, сегодня мы внедряем передовые технологии в сфере мобильной и фиксированной связи и формируем новый этап телекоммуникационного рынка Узбекистана.</p><p>В 2023 году Perfectum™ запустил масштабный проект по созданию с нуля национальной сети 5G Standalone. Этот проект позволяет предоставлять услуги связи последнего поколения.</p><p>Наша миссия — обеспечить население и бизнес Узбекистана высокоскоростным, надёжным и безопасным интернетом на базе новейших технологий 5G Standalone.<br>Мы стремимся стать ведущим телеком-провайдером региона, открывая клиентам и партнёрам двери к новым возможностям роста, инноваций и успеха.</p>
HTML;
    }

    private function aboutUz(): string
    {
        return <<<'HTML'
<p>Perfectum™ — tez rivojlanayotgan, boy tarixga ega va jasorat bilan kelajakka qarayotgan kompaniya.<br>1995-yilda asos solingan biz bugun mobil va fiks aloqa sohasidagi ilg&#039;or texnologiyalarni joriy etib, O&#039;zbekiston telekommunikatsiya bozorining yangi bosqichini shakllantirmoqdamiz.</p><p>2023-yilda Perfectum™ mamlakat miqyosidagi 5G Standalone tarmog&#039;ini nol&#039;dan yaratish bo&#039;yicha yirik loyihani ishga tushirdi. Ushbu loyiha eng so&#039;nggi avlod aloqa xizmatlarini taqdim etish imkonini beradi.</p><p>Bizning missiyamiz — O&#039;zbekiston aholisi va biznesini eng yangi 5G Standalone texnologiyalariga asoslangan yuqori tezlikdagi, ishonchli va xavfsiz internet bilan ta&#039;minlashdir.<br>Biz mijozlar va hamkorlar uchun o&#039;sish, innovatsiya va muvaffaqiyat sari yangi imkoniyatlar eshigini ochgan holda, mintaqadagi yetakchi telekom-provayderga aylanishga intilamiz.</p>
HTML;
    }

    private function aboutEn(): string
    {
        return <<<'HTML'
<p>Perfectum™ is a rapidly growing company with a rich history and a confident outlook on the future.<br>Founded in 1995, today we are deploying advanced technologies in mobile and fixed-line communications and shaping a new chapter of the telecommunications market in Uzbekistan.</p><p>In 2023, Perfectum™ launched a large-scale project to build a nationwide 5G Standalone network from the ground up. The project enables us to deliver the latest generation of communication services.</p><p>Our mission is to provide the people and businesses of Uzbekistan with high-speed, reliable and secure internet powered by the latest 5G Standalone technologies.<br>We strive to become the leading telecom provider in the region, opening doors for our customers and partners to new opportunities for growth, innovation and success.</p>
HTML;
    }
}
