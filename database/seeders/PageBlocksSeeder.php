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
<figure class="table"><table class="table"><tbody><tr><td colspan="2">РЕЖИМ РАБОТЫ ОФИСОВ</td></tr><tr><td rowspan="2">будние дни<br>&nbsp;</td><td><span style="color:rgb(0,0,0);">&nbsp;Головной офис (г. Ташкент) -</span> <span style="color:rgb(230,0,0);"><strong>08:00 </strong>-<strong> 19:00</strong></span></td></tr><tr><td>Другие офисы &nbsp;- <span style="color:rgb(230,0,0);"><strong>09:00 </strong>-<strong> 18:00</strong></span></td></tr><tr><td>суббота</td><td><span style="color:rgb(230,0,0);"><strong>10:00&nbsp;</strong>-<strong> 17:00</strong></span></td></tr></tbody></table></figure><p>&nbsp;</p><figure class="table"><table class="table"><tbody><tr><td>&nbsp;</td><td>АДРЕС</td><td>ТЕЛЕФОН</td></tr><tr><td><span style="color:rgb(102,102,102);">ЦЕНТРАЛЬНЫЙ ОФИС</span></td><td>100060, Узбекистан,<br>г.Ташкент, ул. Тараса Шевченко, 21</td><td><span style="color:rgb(102,102,102);">+998983051111,</span><br><span style="color:rgb(102,102,102);">+998981270077,</span><br><span style="color:rgb(102,102,102);">для абонентов Perfectum: 077 (бесплатно) и 099 - 84,20 сум/ мин.</span></td></tr><tr><td>ЧИЛАНЗАРСКИЙ ОФИС</td><td><span style="color:rgb(102,102,102);">ул.Гагарина, дом 40</span></td><td><span style="color:rgb(102,102,102);">+998981270022</span></td></tr></tbody></table></figure><p>&nbsp;</p><figure class="table"><table class="table"><tbody><tr><td colspan="3"><span style="color:rgb(0,0,0);">ФИЛИАЛЫ В РЕГИОНАХ</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">АНДИЖАН</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Проспект Бобуршох, 22г</span></td><td rowspan="13"><br><br><br><br><br><br><br><br><br><br><br><br><br><span style="color:rgb(102,102,102);">+998983051111</span><br><span style="color:rgb(102,102,102);">&nbsp;</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">БУХАРА</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул. Мустакиллик, д.28/2,блок 4 (ор-р: к/т «Бухоро»)</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">ГУЛИСТАН</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул. Сайхун, д.17</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">ДЖИЗАК</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул. Ш.Рашидова, 300</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">КАРШИ</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Шодлик МФЙ, Насаф к.&nbsp;</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">КОКАНД</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул.Туркистон д 136Е. Ориентир: Гишт куприк рядом с Пожарной службой</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">НАВОИ</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул. Ислама Каримова, 103</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">НАМАНГАН</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">3 пр. И.Каримова, д.1а</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">НУКУС</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул. Каракалпакстан, д.20&nbsp;</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">САМАРКАНД</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул. Шохрух Мирзо, 62а</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">ТЕРМЕЗ</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул. Ибн Сино дом 29. Ориентир: ж/д вокзал, на против городского военкомата</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">УРГЕНЧ</span></td><td><span style="color:hsl(0,0%,30%);">ул. Пахловон Махмуд, 17</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">ФЕРГАНА</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">ул Б.Маргилоний Машъал 29 М.Ф.Й</span></td></tr></tbody></table></figure><p>&nbsp;</p><figure class="table"><table class="table"><tbody><tr><td colspan="2">РЕЖИМ РАБОТЫ СЛУЖБЫ CALL-ЦЕНТРА</td></tr><tr><td>с <span style="color:rgb(230,0,0);">07:00</span> до <span style="color:rgb(230,0,0);">23:00</span></td><td>+998983051111, +998981270077,<br>077 (бесплатно для абонентов Perfectum), 099 (84.20 сум/мин.)</td></tr></tbody></table></figure><p>&nbsp;</p><figure class="table"><table class="table"><tbody><tr><td colspan="2">ГРАФИК ПРИЁМА ГРАЖДАН</td></tr><tr><td><p style="text-align:center;"><span style="color:rgb(0,0,0);">ВТОРНИК, ПЯТНИЦА</span></p></td><td><span style="color:rgb(230,0,0);">&nbsp;<strong>10:00&nbsp;</strong>-<strong> 12:00</strong></span></td></tr></tbody></table></figure>
HTML;
    }

    private function contactsUz(): string
    {
        return <<<'HTML'
<figure class="table"><table class="table"><tbody><tr><td colspan="2">OFISNI ISH TARTIBI</td></tr><tr><td rowspan="2">ish kunlari<br>&nbsp;</td><td><span style="color:rgb(0,0,0);">&nbsp;Bosh ofis (Toshkent sh.) -</span> <span style="color:rgb(230,0,0);"><strong>08:00 </strong>-<strong> 19:00</strong></span></td></tr><tr><td>Boshqa ofislar &nbsp;- <span style="color:rgb(230,0,0);"><strong>09:00 </strong>-<strong> 18:00</strong></span></td></tr><tr><td>shanba</td><td><span style="color:rgb(230,0,0);"><strong>10:00&nbsp;</strong>-<strong> 17:00</strong></span></td></tr></tbody></table></figure><p>&nbsp;</p><figure class="table"><table class="table"><tbody><tr><td>&nbsp;</td><td>MANZIL</td><td>TELEFON</td></tr><tr><td><span style="color:rgb(102,102,102);">MARKAZIY OFIS</span></td><td>100060, Oʻzbekiston,<br>Toshkent shahri, Taras Shevchenko koʻchasi, 21-uy</td><td><span style="color:rgb(102,102,102);">+998983051111,</span><br><span style="color:rgb(102,102,102);">+998981270077,</span><br><span style="color:rgb(102,102,102);">«Perfectum» mobil telefondan: 077 (bepul) va 099 - 84,20 so'm / daq.</span></td></tr><tr><td>CHILONZOR OFISI</td><td><span style="color:rgb(102,102,102);">Gagarina koʻch., 40 uy</span></td><td><span style="color:rgb(102,102,102);">+998981270022</span></td></tr></tbody></table></figure><p>&nbsp;</p><figure class="table"><table class="table"><tbody><tr><td colspan="3"><span style="color:rgb(0,0,0);">VILOYATDAGI OFISLAR</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">ANDIJON</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Boburshox prospekti 22.</span></td><td rowspan="13"><br><br><br><br><br><br><br><br><br><br><br><br><br><span style="color:rgb(102,102,102);">+998983051111</span><br><span style="color:rgb(102,102,102);">&nbsp;</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">BUXORO</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Mustaqillik ko`chasi. 28 uy 2 blok 4. Mo`ljal; k/t «Buxoro»)</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">GULISTON</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Sayxun ko`chasi. 17 uy.</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">JIZZAX</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Sharof Rashidov. 300</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">QARSHI</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Shodlik M.F.Y. Nasaf ko`chasi.&nbsp;</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">QO`QON</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Qo`qon sh, Turkiston ko`chasi 136 E uy. Mo`ljal: G`isht ko`prik, yong`in xizmati yonida.</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">NAVOIY</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Islom Karimov &nbsp;ko`chasi. 103</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">NAMANGAN</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">3-ch tor ko`chasi.1</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">NUKUS</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Qoraqalpog`iston ko`chasi &nbsp;20 uy.&nbsp;</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">SAMARQAND</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Shoxrux Mirzo ko`chasi. 62</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">TERMEZ</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">Ibn Sino ko`chasi. 29 uy. Mo`ljal: temir yo'l vokzali, shahar voenkomat ro'parasida</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">URGANCH</span></td><td><span style="color:hsl(0,0%,30%);">Paxlavon Maxmud. 17</span></td></tr><tr><td><span style="color:hsl(0,0%,30%);">FARG'ONA</span></td><td><span style="background-color:rgb(247,247,247);color:hsl(0,0%,30%);">B.Marg`iloniy Mashal ko`chasi. 29 M.F.Y.</span></td></tr></tbody></table></figure><p>&nbsp;</p><figure class="table"><table class="table"><tbody><tr><td colspan="2">MA'LUMOTLAR XIZMATI (CALL-MARKAZ) NING ISH VAQTLARI:</td></tr><tr><td><span style="color:rgb(230,0,0);">07:00</span> dan <span style="color:rgb(230,0,0);">23:00</span> gacha</td><td>+998983051111, +998981270077, 077 (Perfectum abonentlari uchun bepul),<br>099 (84.20 so'm/daq.)</td></tr></tbody></table></figure><p>&nbsp;</p><figure class="table"><table class="table"><tbody><tr><td colspan="2">Fuqarolarning murojaatlarini qabul qilish jadvali.</td></tr><tr><td><p style="text-align:center;"><span style="color:rgb(0,0,0);">SESHANBA, JUMA</span></p></td><td><span style="color:rgb(230,0,0);">&nbsp;<strong>10:00&nbsp;</strong>-<strong> 12:00</strong></span></td></tr></tbody></table></figure>
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
<p>Perfectum™ — tez rivojlanayotgan, boy tarixga ega va jasorat bilan kelajakka qarayotgan kompaniya.<br>1995-yilda asos solingan biz bugun mobil va fiks aloqa sohasidagi ilg'or texnologiyalarni joriy etib, O'zbekiston telekommunikatsiya bozorining yangi bosqichini shakllantirmoqdamiz.</p><p>2023-yilda Perfectum™ mamlakat miqyosidagi 5G Standalone tarmog'ini nol'dan yaratish bo'yicha yirik loyihani ishga tushirdi. Ushbu loyiha eng so'nggi avlod aloqa xizmatlarini taqdim etish imkonini beradi.</p><p>Bizning missiyamiz — O'zbekiston aholisi va biznesini eng yangi 5G Standalone texnologiyalariga asoslangan yuqori tezlikdagi, ishonchli va xavfsiz internet bilan ta'minlashdir.<br>Biz mijozlar va hamkorlar uchun o'sish, innovatsiya va muvaffaqiyat sari yangi imkoniyatlar eshigini ochgan holda, mintaqadagi yetakchi telekom-provayderga aylanishga intilamiz.</p>
HTML;
    }

    private function aboutEn(): string
    {
        return <<<'HTML'
<p>Perfectum™ is a rapidly growing company with a rich history and a confident outlook on the future.<br>Founded in 1995, today we are deploying advanced technologies in mobile and fixed-line communications and shaping a new chapter of the telecommunications market in Uzbekistan.</p><p>In 2023, Perfectum™ launched a large-scale project to build a nationwide 5G Standalone network from the ground up. The project enables us to deliver the latest generation of communication services.</p><p>Our mission is to provide the people and businesses of Uzbekistan with high-speed, reliable and secure internet powered by the latest 5G Standalone technologies.<br>We strive to become the leading telecom provider in the region, opening doors for our customers and partners to new opportunities for growth, innovation and success.</p>
HTML;
    }
}
