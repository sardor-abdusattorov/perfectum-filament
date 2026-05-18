<?php

// Source: legacy `menu_pages` table (menu_id = 11, dealers per region).
// Slugs are English region names so the URLs are readable across locales.
// `image` is intentionally omitted — region icons aren't needed.
// Admins can upload one per region from the dashboard if that changes.

return [
    [
        'slug' => 'tashkent-city',
        'title' => [
            'ru' => 'Ташкент',
            'uz' => 'Toshkent shahri',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>Дилер</td><td>Адрес</td><td>Номер</td></tr><tr><td>OOO «CITY JOBS»</td><td>Учтепинский р-н ул.Махорат 30 A ориентир: круг трамвая</td><td>98-3130330</td></tr><tr><td>OOO «OPERATIV AAA»</td><td>Малая кольцевая дорога оринтер Туринский Политехнический Университет</td><td>98-124-41-41</td></tr><tr><td>«ZIYO NUR TA`LIM»</td><td>ул. Фаробий, Чигатай Дарваза за супермаркет Макро</td><td>98-363-63-63</td></tr><tr><td colspan="3">Мирзо-Улугбекский р-н</td></tr><tr><td>ЧП «ENERGY INDUSTRY STAR»</td><td>ул. Буюк Ипак, ориентир: Метро</td><td>98-306-66-03, 98-313-07-77</td></tr><tr><td>OOO “EMPIRE DEALER NETWORK SERVICE”</td><td>ул. Шаббода Д-2Б, Ориентер Авто База-2519</td><td>98-198-90-10</td></tr><tr><td rowspan="2">ЧП “UNIVERSAL NANO TECHNO SERVICE”</td><td>ул.Буюк</td><td rowspan="2">97-133-45-45</td></tr><tr><td>Ипак Йули 430, ТТЗ Дехканский базар рядом с банкоматом.</td></tr><tr><td colspan="3">Сергелийский р-н</td></tr><tr><td>ООО “MUHABBAT MOBILE”</td><td>Сергили 6, ул. Янги Сергили, Машинный базар</td><td>98-127-74-75</td></tr><tr><td colspan="3">Учтепинский р-н</td></tr><tr><td>OOO «GRAND DIGITAL SERVICE»</td><td>ООО «Урикзор савдо комплекс» пав. 5, маг. 65</td><td>98-309-40-00</td></tr><tr><td>ООО “ABASA”</td><td>ул. Лутфий остановка Г-9А ориен. Перекресток - Чупан ота</td><td>97-774-49-79</td></tr><tr><td>ЧПР «BLACK LION MOBILE SYSTEMS»</td><td>Чил. 13, ул. Фарход, в здании ООО»OROMILON»</td><td>98-311-55-11</td></tr><tr><td colspan="3">Чиланзарский р-н</td></tr><tr><td>OOO «PHONE OPTIMA»</td><td>На против базар Ипадром</td><td>98-127-20-70</td></tr><tr><td>OOO «SHOX CONNECT GROUP»</td><td>массив Гулистан, дом 59, кв. 20.»ор:Алгоритм»</td><td>98-311-77-44</td></tr><tr><td colspan="3">Шайхантохурский р-н</td></tr><tr><td>OOO «ESTATE MANAGEMENT COMPANY»</td><td>Малика базар маг 35В</td><td>99-004-66-66</td></tr><tr><td>OOO «OPERATIV AAA»</td><td>Малика базар маг 2В и 9В</td><td>124-4141, 94-628-10-01</td></tr><tr><td>OOO «GRAND GREAT CHORSU»</td><td>ул. Уйгур, останов. комплекс «ЧОР-СУ»</td><td>98-309-72-72</td></tr><tr><td>OOO «GRAND MOBILE SET»</td><td>ул. А. Навоий, дом 44, напротив Toshkent Savdo</td><td>71-244-44-40 98-301-07-50</td></tr><tr><td>ЧП “BRAND NOMER”</td><td>Ташкент Шайхантаурский р-н ул.Беруний д-5 на прот. учебный центр Машхура</td><td>77-777-93-33</td></tr><tr><td>OOO «CDMA PERFECTUM MOBILE BIZNES»</td><td>Малика базар маг 40В</td><td>90-909-00-05</td></tr><tr><td>ХК «SIMLINK»</td><td>Учтепинский р-н,Чиланзар, ул. Лутфий Г9А, дом 1, кв.3</td><td>98-888-02-88</td></tr><tr><td colspan="3">Юнус Абадский р-н</td></tr><tr><td>OOO «MISIRHON MOBILE»</td><td>ООО «Юнус Абад Дехкон бозор» маг. 98</td><td>98-300-70-77; 97-300-70-77</td></tr><tr><td colspan="3">Яшнабадский р-н</td></tr><tr><td>OOO “RUHSHONA PLYUS RISOLAT”</td><td>Ташкент Яшнабадский р-н остан.компл. напротив рынка Авиасозлар (Кадышева)</td><td>98-000-83-40</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>Diler</td><td>Manzil</td><td>Raqam</td></tr><tr><td>«CITY JOBS» MChJ</td><td>Uchtepa tumani, Mahorat ko‘chasi 30A, mo‘ljal — tramvay aylanasi</td><td>98-3130330</td></tr><tr><td>«OPERATIV AAA» MChJ</td><td>Kichik halqa yo`li, mo`ljal: Turin Politexnika universiteti</td><td>98-124-41-41</td></tr><tr><td>«ZIYO NUR TA`LIM»</td><td>Farobiy ko`ch., Chigatay Darvoza, Makro supermarket oldida</td><td>98-363-63-63</td></tr><tr><td colspan="3">Mirzo-Ulug`bek tumani</td></tr><tr><td>«ENERGY INDUSTRY STAR» XK</td><td>Buyuk Ipak Yo'li, metro oldida</td><td>98-306-66-03, 98-313-07-77</td></tr><tr><td>“EMPIRE DEALER NETWORK SERVICE” MChJ</td><td>Shabboda k. D-2B, muljal: Avto Baza-2519</td><td>98-198-90-10</td></tr><tr><td rowspan="2">“UNIVERSAL NANO TECHNO SERVICE” XK</td><td>Buyuk Ipak Yo'li ko`ch.</td><td rowspan="2">97-133-45-45</td></tr><tr><td>Buyuk Ipak Yo'li 430, TTZ, Dehqon bozori, bankomat oldida</td></tr><tr><td colspan="3">Sergeli tumani</td></tr><tr><td>“MUHABBAT MOBILE” MChJ</td><td>Sergeli 6, Yangi Sergeli k., Mashina bozori</td><td>98-127-74-75</td></tr><tr><td colspan="3">Uchtepa tumani</td></tr><tr><td>«GRAND DIGITAL SERVICE» MChJ</td><td>«Urikzor savdo kompleks» MChj, 5 pavilyon, 65 do`koni</td><td>98-309-40-00</td></tr><tr><td>“ABASA” MChJ</td><td>Lutfiy k., G-9А ostanovkasi, mo`ljal: Chupon ota chorraxasi</td><td>97-774-49-79</td></tr><tr><td>«BLACK LION MOBILE SYSTEMS» XK</td><td>Chilonzor 13, Farxod k., "OROMILON" MChJ binosi ichida</td><td>98-311-55-11</td></tr><tr><td colspan="3">Chilonzor tumani</td></tr><tr><td>«PHONE OPTIMA» MChJ</td><td>Ipodrom bozori oldida</td><td>98-127-20-70</td></tr><tr><td>«SHOX CONNECT GROUP» MChJ</td><td>Guliston massiv 59-20, mo`ljal “Algoritm”</td><td>98-311-77-44</td></tr><tr><td colspan="3">Shayxontoxur tumani</td></tr><tr><td>«ESTATE MANAGEMENT COMPANY» MChJ</td><td>Malika bozori, 35B do`koni</td><td>99-004-66-66</td></tr><tr><td>«OPERATIV AAA» MChJ</td><td>Malika bozori, 2B va 9B do`konlari</td><td>124-4141, 94-628-10-01</td></tr><tr><td>«GRAND GREAT CHORSU» MChJ</td><td>Uyg`ur ko`ch., “CHOR-SU” kompleks ostanovkasi</td><td>98-309-72-72</td></tr><tr><td>«GRAND MOBILE SET» MChJ</td><td>A.Navoi ko`ch., 44, Toshkent Savdo oldida</td><td>71-244-44-40 98-301-07-50</td></tr><tr><td>“BRAND NOMER” XK</td><td>Shayxontoxur tum., Beruniy k., 5, “Mashxura” O`quv markazi oldida</td><td>77-777-93-33</td></tr><tr><td>«CDMA PERFECTUM MOBILE BIZNES» MChJ</td><td>Malika bozori, 40B do`koni</td><td>90-909-00-05</td></tr><tr><td>«SIMLINK»</td><td>Uchtepa tumani, Chilonzor, Lutfiy ko‘chasi G9A, 1-uy, 3-xonadon.</td><td>98 888 02 88</td></tr><tr><td colspan="3">Yunusobod tumani</td></tr><tr><td>«MISIRHON MOBILE» MChJ</td><td>«Yunusobod» Dehqon bozori, 98 do`koni</td><td>98-300-70-77; 97-300-70-77</td></tr><tr><td colspan="3">Yashnaobod tumani.</td></tr><tr><td>«RUHSHONA PLYUS RISOLAT» MChJ</td><td>Toshkent sh., Yashnobod tum. Mo`ljal: Aviasozlar bozori ostanovkasi oldida.</td><td>98-000-83-40</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 1,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'tashkent-region',
        'title' => [
            'ru' => 'Ташкентская область',
            'uz' => 'Toshkent viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>OOO "GAZALKENT MOBILE"</td><td>Ташкентская обл. Бустонлыкский р-н пос. Газалкент ул.Ибн-Сино Дехканский бозори</td><td>98-124-00-12</td></tr><tr><td>ЧФ "GOLD MOBILE BUSINESS"</td><td>Ташкентская обл. г. Бекабад ул. Узбекистан торговый центр “Тохир Зухра”</td><td>90-002-0005</td></tr><tr><td>OOO "ABDULLA MAXSUS QURULISH"</td><td>Ташкентская обл. Паркентский р-н Паркент базар</td><td>98-311-02-12</td></tr><tr><td>OOO "ANGREN FLY PREMIUM TRAVEL"</td><td>Ташкентская обл. г. Ангрен ул. Бунйодкор ориентир Самсунг магазин</td><td>98-200-00-39</td></tr><tr><td>ООО "MEGA BONUS SERVIS"</td><td>Ташкентская обл. Уртачирчикский р-н ул. Бектимир дом 101 ориентир кафе чинор</td><td>88-125-05-00</td></tr><tr><td>ООО “INNOVATION MOBILE NETWORK”</td><td>г.Чирчик А.Навоий прос. ул. А. Навоий плошадь</td><td>98-888-03-07</td></tr><tr><td>ООО “INNOVATION MOBILE NETWORK”</td><td>г.Чирчик ,ул. Ш.Рашидов на против Базара</td><td>98-888-03-07</td></tr><tr><td>OOO "PISKENT EXPRESS CONNECTION"</td><td>Ташкентская обл. г.Алмалык ул. Эхтиром Дехканский базар магазин №13</td><td>95 328-11-11; 33 286-33-33</td></tr><tr><td>OOO "PISKENT EXPRESS CONNECTION"</td><td>Ташкентская обл. г.Пскент ул.Бобур ориентир: Рохат маркет</td><td>95 328-11-11; 33 286-33-33</td></tr><tr><td>OOO "PISKENT EXPRESS CONNECTION"</td><td>Ташкентская обл. г.Алмалык ул.Амир Темур 73</td><td>95 328-11-11; 33 286-33-33</td></tr><tr><td>ООО “PLUS ABAKUS”</td><td>г.Янгиюль ул.Самарканд 125/2-дом</td><td>97 765-98-88</td></tr><tr><td>ЧП "CHINOZ MOBILE"</td><td>Чиназский р-н ул. Самарканд ориентир: Халк банк</td><td>99-400-01-10</td></tr><tr><td>ООО “MARFLYAD STROY TRANS”</td><td>Уртачирчикский р-н Истикбол ул. Галаботир</td><td>98-306-87-87</td></tr><tr><td>ЧФ "JOHONGIR MOBILE"</td><td>Зангиотинский р-н г. Келес ор-р РОВД</td><td>98-367-27-27</td></tr><tr><td>OOO “STANDART TELEKOM”</td><td>Ташкентская обл. Ангрен ул.Уз.Мустакиллик 17-д ориентир: Дехканский базар</td><td>98-116-01-01</td></tr><tr><td>OOO "ALFANET BIZNES"</td><td>Ташкентская обл., Уртачирчикский р-н Нурафшон магазин Idea</td><td>98-308-28-83</td></tr><tr><td>ООО "EFFECTIVE VECTOR BUSINESS"</td><td>Ташкентская обл.г. Алмалык ул. Амир Темур оринтер: на территории магазина Корзинка</td><td>88-616-04-04</td></tr><tr><td>ООО “AHROR FAYZ”</td><td>Ташкентская обл. Зангиатинский р-н ул. А. Темура 102-д</td><td>98-314-30-36</td></tr><tr><td>OOO "IMRON UMIDLARI SISTEM"</td><td>Ташкентская обл. г. Чирчик пр. А. Навойи дом 137</td><td>98-335-43-43</td></tr><tr><td>OOO “GOOD LUCK BROKERS S”</td><td>Ташкентская обл. г.Ангрен Тараккиёт 32-массив д-3 кв-14 ор. учебный центр Шанхай</td><td>93-422-99-77</td></tr><tr><td>OOO “OQSAROY”</td><td>Ташкентская обл. г.Ангрен ул. Бунёдкор д-2</td><td>98-304-44-24</td></tr><tr><td>ЧФ “O`TAMISHOV IKROMJON”</td><td>Ташкентская обл. г.Оккурган ул.А. Навои</td><td>90-027-23-23</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>"GAZALKENT MOBILE" MChJ</td><td>Toshkent vil., Bustonliq tum., Gazalkent sh. Ibn-Sino k. Dehqon bozori</td><td>98-124-00-12</td></tr><tr><td>"GOLD MOBILE BUSINESS" XF</td><td>Toshkent vil., Bekobod sh., O`zbekiston k., “Toxir Zuhra” Savdo markazi</td><td>90-002-0005</td></tr><tr><td>"ABDULLA MAXSUS QURULISH" MChJ</td><td>Toshkent vil., Parkent tum., Parkent bozori</td><td>98-311-02-12</td></tr><tr><td>“ANGREN FLY PREMIUM TRAVEL” MChJ</td><td>Toshkent vil., Angren sh., Bunyodqor k., mo`ljal: Samsung do`koni</td><td>98-200-00-39</td></tr><tr><td>"MEGA BONUS SERVIS" MChJ</td><td>Toshkent vil., O`rtachirchiq tum., Bektimir k. 101 mo`ljal: Chinor kafesi</td><td>88-125-05-00</td></tr><tr><td>“INNOVATION MOBILE NETWORK” MChJ</td><td>Chirchiq sh., A.Navoi prospekt, A.Navoi maydoni</td><td>98-888-03-07</td></tr><tr><td>“INNOVATION MOBILE NETWORK” MChJ</td><td>Chirchiq sh., Sh.Rashidov k. Mo`ljal: Bozor</td><td>98-888-03-07</td></tr><tr><td>"PISKENT EXPRESS CONNECTION" MChJ</td><td>Toshkent vil., Olmaliq sh., Extirom k., Dehqon bozori, №13 do`koni</td><td>95 328-11-11; 33 286-33-33</td></tr><tr><td>"PISKENT EXPRESS CONNECTION" MChJ</td><td>Toshkent vil., Pskent sh., Bobur k., mo`ljal: Roxat market</td><td>95 328-11-11; 33 286-33-33</td></tr><tr><td>"PISKENT EXPRESS CONNECTION" MChJ</td><td>Toshkent vil., Olmaliq sh., Amir Temur ko`ch 73</td><td>95 328-11-11; 33 286-33-33</td></tr><tr><td>“PLUS ABAKUS” MChJ</td><td>Yangiyo`l sh., Samarqand k.125/2-uy</td><td>97 765-98-88</td></tr><tr><td>"CHINOZ MOBILE" XK</td><td>Chinoz tum., Samarqand k. mo`ljal: Halq bank</td><td>99-400-01-10</td></tr><tr><td>“MARFLYAD STROY TRANS” MChJ</td><td>O`rtachirchiq tum., Isiqbol k., Galabotir</td><td>98-306-87-87</td></tr><tr><td>"JOHONGIR MOBILE" XF</td><td>Zangiota tum., Keles sh., mo`ljal IIB</td><td>98-367-27-27</td></tr><tr><td>“STANDART TELEKOM” MChJ</td><td>Toshkent vil., Angren sh., O`z. Mustaqilli k., 17-d, mo`ljal: Dehqon bozori</td><td>98-116-01-01</td></tr><tr><td>"ALFANET BIZNES" MChJ</td><td>Toshkent vil., O`rtachirchiq tum., Nurafshon., “Idea” do`koni</td><td>98-308-28-83</td></tr><tr><td>"EFFECTIVE VECTOR BUSINESS" MChJ</td><td>Toshkent vil., Olmaliq sh., A.Temur k., mo`ljal: "Korzinka" xudud ichida</td><td>88-616-04-04</td></tr><tr><td>“AHROR FAYZ” MChJ</td><td>Toshkent vil., Zangiota tum., A.Temur k., 102-d</td><td>98-314-30-36</td></tr><tr><td>"IMRON UMIDLARI SISTEM" MChJ</td><td>Toshkent vil., Chirchiq sh., A.Navoi., 137 uy</td><td>98-335-43-43</td></tr><tr><td>“GOOD LUCK BROKERS S” MChJ</td><td>Toshkent vil., Angren sh., Tarrakkiyot 32-massiv 3-uy, 14-x. mo`ljal: “Shanxay” O`quv markazi</td><td>93-422-99-77</td></tr><tr><td>“OQSAROY” MChJ</td><td>Toshkent vil., Angren sh., Bunyodqor k. 2-uy</td><td>98-304-44-24</td></tr><tr><td>“O`TAMISHOV IKROMJON” XF</td><td>Toshkent vil., Oqqo`rg`on sh., A.Navoi k.</td><td>90-027-23-23</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 2,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'andijan',
        'title' => [
            'ru' => 'Андижанская область',
            'uz' => 'Andijon viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>OOO "SMART MEDIA SHAHRIXON"</td><td>Андижанская обл. Шахриханский р-н, У Юсупов №10</td><td>90-2171727</td></tr><tr><td>ООО "MUAD-XAMRO"</td><td>Андижанская обл. Джалалкудукский р-н, ул.Узбекистон</td><td>93-7069999</td></tr><tr><td>ООО "MUSLIMA MOBIL LYUKS"</td><td>Андижанская обл. Булокбошинский р-н, Гулистон МФЙ, ул.Тождор</td><td>90-5737070</td></tr><tr><td>ЧП “OSIYO BIZNES MOBILE”</td><td>Андижанская обл. Пахтаабадский р-н, Юкори МФЙ, ул.Келажак овози 70</td><td>94-3820110</td></tr><tr><td>ООО “NARGIS TEZKOR MULOQOT”</td><td>Андижанская обл. Кургантепинский р-н, ул. Мустакиллик</td><td>99-9999938</td></tr><tr><td>ЧП “AZIZULLO MOBIL ALOQA”</td><td>Андижанская обл. Олтинкулский р-н, Марказ МСГ, ориентир: Дехканский базар</td><td>90-2200440</td></tr><tr><td>OOO “MOHINUR OLLOYOR KAMRON”</td><td>Андижанская обл. г.Мархамат, ул.Ипак йули, д-101 на против Почты</td><td>90-2202121</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>"SMART MEDIA SHAHRIXON" MChJ</td><td>Andijon vil. Shaxrixon tum., U.Yusupov №10</td><td>90-2171727</td></tr><tr><td>"MUAD-XAMRO" MChJ</td><td>Andijon vil. Jalolkuduk tum., O`zbekiston k.</td><td>93-7069999</td></tr><tr><td>"MUSLIMA MOBIL LYUKS" MChJ</td><td>Andijon vil. Bulokboshi tum., Guliston MFY, Tojdor k.</td><td>90-5737070</td></tr><tr><td>“OSIYO BIZNES MOBILE” XK</td><td>Andijon vil. Paxtaobod tum., Yqori MFY, Kelajak ovozi k. 70</td><td>94-3820110</td></tr><tr><td>“NARGIS TEZKOR MULOQOT” MChJ</td><td>Andijon vil. Qo`rg`ontepa tum., Mustaqillik k.</td><td>99-9999938</td></tr><tr><td>“AZIZULLO MOBIL ALOQA” XK</td><td>Andijon vil. Oltinkul tum., Markaz MSG, mo`ljal: Dehqon bozori</td><td>90-2200440</td></tr><tr><td>“MOHINUR OLLOYOR KAMRON” MChJ</td><td>Andijon vil. Marxamat sh., Ipak yo'li k., 101, Pochta ro`parasida</td><td>90-2202121</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 14,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'bukhara',
        'title' => [
            'ru' => 'Бухарская область',
            'uz' => 'Buxoro viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ЧП "PERFECT TECHNO SERVICE"</td><td>Бухарская обл., г.Когон., ул. Бухоро шох, д.9</td><td>98-774-04-49</td></tr><tr><td>OOO "NASIMJON SERVICE"</td><td>Бухарская обл., Шофирконский р-н, ул. Шофиркон шох, Уз.Мустакил. 68/1 дом 38кв.</td><td>98-180-34-34</td></tr><tr><td>OOO "NILUFAR NOZANIN"</td><td>Каракульский р-н, ул. Улугбек</td><td>98-274-07-33</td></tr><tr><td>OOO "PESHKO` ALOQA IMKON"</td><td>р-н Пешку, кфй Янгибозор ул.Ф.Хужаев д.19</td><td>93-450-00-07</td></tr><tr><td>ЧФ "ЭКСПРЕСС САВДО ПЛЮС"</td><td>Олотский р-н, кфй Чандир</td><td>94-120-40-80</td></tr><tr><td>ЧП "PRESTIGE MOBILE"</td><td>Вобкентский р-н, ул.С.Ярашева</td><td>98-808-88-48</td></tr><tr><td>ЧП "ULUG`BEK ISTAM FAYZ"</td><td>г.Галаосиё, ул.Буюк Ипак Йули</td><td>93-625-53-39</td></tr><tr><td>ООО "EVRO SET"</td><td>Ромитанский р-н, .ул.Амир Темур</td><td>98-774-07-14</td></tr><tr><td>ООО “JAVOHIR NETWORK CENTER”</td><td>Олотский р-н, мфй.Бунёдкор</td><td>99-9674241</td></tr><tr><td>ООО "MUSHTARIY BEKZOD FAYZ"</td><td>г.Бухара, ул.Намозгох д.180</td><td>97-281-11-19</td></tr><tr><td>ООО "FIRDAVS ABDULAZIZ MIRONSHOX</td><td>Жондорский р-н, ул.Мустакиллик д.4</td><td>93-657-17-70</td></tr><tr><td>OOO "SAYYORAI JAHON"</td><td>Гиждуванский р-н, ул.Ю.Хамадоний</td><td>91-977-77-47</td></tr><tr><td>OOО "БУХАРА ИНТЕРТОРГ"</td><td>г.Бухара, ул.Хамза д.14</td><td>93-960-7770</td></tr><tr><td>OOО "БУХАРА ИНТЕРТОРГ"</td><td>г.Бухара, ул.М.Икбол д.88</td><td>93-960-7770</td></tr><tr><td></td><td>Бухарская обл. Жондорский р-н ул. Торобий 95-д. Ориентир: супермаркет ZAHRATUN</td><td>99-706-6667</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>"PERFECT TECHNO SERVICE" XK</td><td>Buxoro vil., Kogon sh., Buxoro k shox, 9</td><td>98-774-04-49</td></tr><tr><td>"NASIMJON SERVICE" MChJ</td><td>Buxoro vil., Shofirkon tum., Shofirkon shox k., O`z.Mustaqil. 68/1 uy 38 x.</td><td>98-180-34-34</td></tr><tr><td>"NILUFAR NOZANIN" MChJ</td><td>Qoraqul tum., Ulug`bek k.</td><td>98-274-07-33</td></tr><tr><td>"PESHKO` ALOQA IMKON" MChJ</td><td>Peshko` tum., Yangibozor kfy, F.Xo`jaev k. 19</td><td>93-450-00-07</td></tr><tr><td>"EKSPRESS SAVDO PLYUS" XF</td><td>Olot tum., Chandir kfy</td><td>94-120-40-80</td></tr><tr><td>"PRESTIGE MOBILE" XK</td><td>Vobkent tum., S.Yarasheva k.</td><td>98-808-88-48</td></tr><tr><td>“ULUG`BEK ISTAM FAYZ” XK</td><td>Galaosiyo sh., Buyuk Ipak Yo`li k.</td><td>93-625-53-39</td></tr><tr><td>"EVRO SET" MChJ</td><td>Romiton tum., A.Temur k.</td><td>98-774-07-14</td></tr><tr><td>“JAVOHIR NETWORK CENTER” MChJ</td><td>Olot tum., Bunyodqor mfy</td><td>99-9674241</td></tr><tr><td>"MUSHTARIY BEKZOD FAYZ" MChJ</td><td>Buxoro sh., Nomozgox k., 180</td><td>97-281-11-19</td></tr><tr><td>"FIRDAVS ABDULAZIZ MIRONSHOX MChJ</td><td>Jondor tum., Mustaqillik k., 4 uy</td><td>93-657-17-70</td></tr><tr><td>"SAYYORAI JAHON" MChJ</td><td>G`ijduvon tum., Yu.Xamadoniy k.</td><td>91-977-77-47</td></tr><tr><td>"BUXARA INTERTORG" MChJ</td><td>Buxoro sh., Xamza k., 14</td><td>93-960-7770</td></tr><tr><td>"BUXARA INTERTORG" MChJ</td><td>Buxoro sh., M.Iqbol k. 88</td><td>93-960-7770</td></tr><tr><td></td><td>Buxoro vil. Jondor tum. Torobiy ko`ch, 95-d. Muljal: ZAHRATUN supermarket</td><td>99-706-6667</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 13,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'kashkadarya',
        'title' => [
            'ru' => 'Кашкадарьинская область',
            'uz' => 'Qashqadaryo viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>"Жураева Гулмира" Х.Ф</td><td>Дехканабадский р-н, Корашина пос., ориентир: Халк банк</td><td>98-7777784</td></tr><tr><td>ООО “Боходир Кафолат Мастер Сервис”</td><td>Китабский р-н, ул. Г. Журабеков, ориентир Хокимят</td><td>98-2757705</td></tr><tr><td>ЧФ "Gamma Bars" филиал г Карши</td><td>г.Карши, ул. Мустакиллик, ориентир: Марко супер-маркет</td><td>97-6710010</td></tr><tr><td>ЧФ "Gamma Bars" Гузарский р-н</td><td>Гузарский р-н, ул. Х.Олимжон, д12, ориентир: Гузарское фин. отделение</td><td>97-6710010</td></tr><tr><td>ООО “SERVIS X MAX J”</td><td>г.Карши, Бахор супер-маркет</td><td>97-6722288</td></tr><tr><td>ЧП “Kesh Shukurov”</td><td>г.Шахрисабз, ул.Ипак Йули, 248, ориентир: Дехканский Базар</td><td>98-7770505</td></tr><tr><td>ООО “MUSOXON BARAKASI”</td><td>Нишанский р-н, ориентир: Нишанский хокимият</td><td>97-2228844</td></tr><tr><td>ООО “BEK MOBILE SERVIS”</td><td>Чирокчинский р-н, ориентир: Дехканский Базар</td><td>99-8998282</td></tr><tr><td>ООО "Qamashi Innovatsion Mobel"</td><td>Камашинский р-н, ул. А.Темур, 37 дом, ориентир: Хокимят</td><td>99-6229000</td></tr><tr><td>ООО “EXTREME PROFIT”</td><td>Мубарекский р-н, ориентир: Дехканский Базар</td><td>91-2070040</td></tr><tr><td>ЧП “ТУКБОЙ РАЖАБ МУХАММАД”</td><td>г.Карши, ориентир: Янги базар</td><td>98-7777097</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>"Juraeva Gulmira" XF</td><td>Dehqonobod tum., Korashina q. mo`ljal: Halq bank</td><td>98-7777784</td></tr><tr><td>“Boxodir Kafolat Master Servis” MChJ</td><td>Kitob tum., G.Jurabekov k., mo`ljal: Hokimiyat</td><td>98-2757705</td></tr><tr><td>"Gamma Bars" XF</td><td>Qarshi sh., Mustaqillik k., mo`ljal: Marko supermarket</td><td>97-6710010</td></tr><tr><td>"Gamma Bars" XF</td><td>Guzor tum., X.Olimjon k., 12, mo`ljal: Moliya ro`parasi</td><td>97-6710010</td></tr><tr><td>“SERVIS X MAX J” MChJ</td><td>Qarshi sh., Baxor supermarket</td><td>97-6722288</td></tr><tr><td>“Kesh Shukurov” XK</td><td>Shaxrisabz sh., Ipak Yo`li k., 248, mo`ljal: Dehqon bozori</td><td>98-7770505</td></tr><tr><td>“MUSOXON BARAKASI” MChJ</td><td>Nishon tum., mo`ljal: Nishon hokimiyati</td><td>97-2228844</td></tr><tr><td>“BEK MOBILE SERVIS” MChJ</td><td>Chiroqchi tum., mo`ljal: Dehqon bozori</td><td>99-8998282</td></tr><tr><td>"Qamashi Innovatsion Mobel" MChJ</td><td>Qamashi tum., A.Temur k., 37, mo`ljal: Hokimiyat</td><td>99-6229000</td></tr><tr><td>“EXTREME PROFIT” MChJ</td><td>Mubarek tum., mo`ljal: Dehqon bozori</td><td>91-2070040</td></tr><tr><td>“TUKBOY RAJAB MUXAMMAD” XK</td><td>Qarshi sh., mo`ljal: Yangi bozor</td><td>98-7777097</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 12,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'fergana',
        'title' => [
            'ru' => 'Ферганская область',
            'uz' => 'Farg\'ona viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ЧП “VERIZON ALOQA”</td><td>г.Фергана ул. Дехкан</td><td>982767970</td></tr><tr><td>OOO “AZAMJON MOBIL ALOQA SERVIS”</td><td>Ферганская обл. Олтиарыкский р-н, Олтиарык ШФЙ, ул. Узбекистон.</td><td>905360000</td></tr><tr><td>ООО "QUBBO AVIA MED"</td><td>Ферганская обл. Кувинский р-н Иттифок кфй ул.Бегобод</td><td>913297005</td></tr><tr><td>ЧПР “ЧИМЁН ТАВАККАЛ ОСМОН”</td><td>Ферганская обл. Ферганский р-н,Чимён КФЙ, Чимен МФЙ.</td><td>902080077</td></tr><tr><td>OOO "GULNOR SIMUS SANS"</td><td>Ферганская обл. Сохский р-н, к.Сариканда</td><td>982763559</td></tr><tr><td>XALOL AZIZ MAKONI MCHJ</td><td>Ферганская обл. г.Маргилан Ул Мустакиллик дом 350</td><td>905309998</td></tr><tr><td>ЧП "SIFR VODIL COMPUTER SERVICE"</td><td>Ферганская обл. Ферганский р-н, с.Водил, ул.Маргилон, д.37, кв.3</td><td>999990998</td></tr><tr><td>ЧФ “MOBI-EL 077”</td><td>Ферганская обл. г.Кува Кайкуббод д-137 А</td><td>978206161</td></tr><tr><td>OOO “QUVASOY YUKSALISH SERVIS”</td><td>Ферганская обл. г.Кувасай ул.А. Навоий</td><td>944440304</td></tr><tr><td>OOO “BRAVO EVENT”</td><td>Ферганская обл. Язъяванский р-н ул. Мустакиллик</td><td>902070000</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>“VERIZON ALOQA” XK</td><td>Farg`ona sh., Dehqon k.</td><td>982767970</td></tr><tr><td>“AZAMJON MOBIL ALOQA SERVIS” MChJ</td><td>Farg`ona vil., Oltiariq tum., Oltiariq SHFY, O`zbekiston k.</td><td>905360000</td></tr><tr><td>"QUBBO AVIA MED" MChJ</td><td>Farg`ona vil., Quva tum., Ittifoq kfy, Begobod k.</td><td>913297005</td></tr><tr><td>“CHIMYON TAVAKKAL OSMON” XK</td><td>Farg`ona vil., Farg`ona tum., Chimyon kfy, Chimyon mfy</td><td>902080077</td></tr><tr><td>“GULNOR SIMUS SANS” MChJ</td><td>Farg`ona vil., Soh tum., Sariqanda k</td><td>982763559</td></tr><tr><td>"XALOL AZIZ MAKONI? MCHJ</td><td>Farg`ona vil., Marg`ilon sh., Mustaqillik k. 350</td><td>905309998</td></tr><tr><td>"SIFR VODIL COMPUTER SERVICE" XK</td><td>Farg`ona vil., Farg`ona tum., Vodil, Marg`ilon k. 37-3</td><td>999990998</td></tr><tr><td>“MOBI-EL 077” XF</td><td>Farg`ona vil., Quva sh., Kaykuobod 137A</td><td>978206161</td></tr><tr><td>“QUVASOY YUKSALISH SERVIS” MChJ</td><td>Farg`ona vil, Quvasay sh., A.Navoi k.</td><td>944440304</td></tr><tr><td>“BRAVO EVENT” MChJ</td><td>Farg`ona vil, Yaz`yavan tum., Mustaqillik k.</td><td>902070000</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 11,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'namangan',
        'title' => [
            'ru' => 'Наманганская область',
            'uz' => 'Namangan viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ЧПр "VIRGIN MOBILE"</td><td>Наманганская обл., г. Наманган, ул. Номонганий, дом 37, кв 14</td><td>98-7722700</td></tr><tr><td>ЧФ "BEHRUZ KUMUSHBIBI ALOQA SERVIS"</td><td>Наманганский обл., Уйчинский р-н, ул. А.Темур 17</td><td>98-2718850</td></tr><tr><td>ЧП “SHARQ UNIVERSAL TELEKOM”</td><td>Наманганская обл., г.Наманган ул. А.Навоий д-31 супермаркет Исфархон</td><td>90-5553370</td></tr><tr><td>ЧП “CHUST SAKINAT”</td><td>Наманганская обл., г.Чуст ул. Чустий ор. Рынок Чуст</td><td>88-6888828</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>"VIRGIN MOBILE" XK</td><td>Namangan vil., Namangan sh., Nomonganiy k. 37-14</td><td>98-7722700</td></tr><tr><td>"BEHRUZ KUMUSHBIBI ALOQA SERVIS" XF</td><td>Namangan vil.., Uychi tum., A.Temur k. 17</td><td>98-2718850</td></tr><tr><td>“SHARQ UNIVERSAL TELEKOM” XK</td><td>Namangan vil., Namangan sh., A,Navoi k. 31, Isfarxon supermarket</td><td>90-5553370</td></tr><tr><td>“CHUST SAKINAT” XK</td><td>Namangan vil., Chust sh., Chustiy k., mo`ljal: Chust bozori</td><td>88-6888828</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 10,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'samarkand',
        'title' => [
            'ru' => 'Самаркандская область',
            'uz' => 'Samarqand viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ЧПР “Бурхон Бизнес сервис”</td><td>Ургутская обл., ул.Навойи шох</td><td>982735353</td></tr><tr><td>ЧП “Азимжон Универсал Мобайл”</td><td>Окдарьинский район.город Лойиш.ул.Зарафшон</td><td>991521112, 954111000</td></tr><tr><td>СЕМ-П Самкат Алока Сервис</td><td>г.Каттакурган, ул.Олтин МФЙ Юнус Ражабий дом 11</td><td>942400110</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>“Burxon Biznes servis” XK</td><td>Urgut vil., Navoi shox k.</td><td>982735353</td></tr><tr><td>“Azimjon Universal Mobayl” Xk</td><td>Oqdaryo tum., Loyish sh., Zarafshon k.</td><td>991521112, 954111000</td></tr><tr><td>SEM-P Samkat Aloqa Servis</td><td>Kattaqo`rg`on sh., Oltin k., MFY Yunus Rajabiy. 11 uy</td><td>942400110</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 9,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'surkhandarya',
        'title' => [
            'ru' => 'Сурхандарьинская область',
            'uz' => 'Surxondaryo viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>OOO "REAL MADRID"</td><td>Сурхандарьинская обл., Бойсунский р-н, ул. А. Термизий, торговый комплекс</td><td>93-0777999</td></tr><tr><td>ЧП “SHO`RCHI SILVER”</td><td>Сурхандарьинская обл. Шурчинский р-н, мах. Боботог, ул.Мустакиллик</td><td>97-5350016</td></tr><tr><td>OOO “ABDURAXIM SERVIS ZAMIN”</td><td>Сурхандарьинская обл. Деновский р-н Богинов МСГ ул. Мустакиллик 64-д</td><td>93-7997779</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>"REAL MADRID" MChJ</td><td>Surxondaryo vil., Boysun tum., A.Termiziy k., Savdo markazi</td><td>93-0777999</td></tr><tr><td>“SHO`RCHI SILVER” XK</td><td>Surxondaryo vil., Shurchi tum., Bobotog` max., Mustaqillik k.</td><td>97-5350016</td></tr><tr><td>“ABDURAXIM SERVIS ZAMIN” MChJ</td><td>Surxondaryo vil., Denov tum., Boginov MSG, Mustaqillik ko`ch. 64-d</td><td>93-7997779</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 8,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'navoi',
        'title' => [
            'ru' => 'Навоийская область',
            'uz' => 'Navoi viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ЧП “AZIZ - ASIL KELAJAGI”</td><td>9 микрорайон, рынок</td><td>91-3080077</td></tr><tr><td>OOO “MOBILE DOCTOR”</td><td>Навоийская обл., г.Навои массив-17 ул. Галаба тор. рынок Гулобод</td><td>98-2106262</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>“AZIZ - ASIL KELAJAGI” XK</td><td>9 mikrorayon, bozor</td><td>91-3080077</td></tr><tr><td>“MOBILE DOCTOR” MChJ</td><td>Navoi tum., Navoi sh., 17-massiv, Galaba k., Gulobod savdo markazi</td><td>98-2106262</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 7,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'jizzakh',
        'title' => [
            'ru' => 'Джизакская область',
            'uz' => 'Jizzax viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ЧП “RUSTAMBEK GOLD ALOQA”</td><td>Джизакская обл. Фариж р-н, г.Богдон, Богдон МФЙ, ул.А.Темур</td><td>97-4847005</td></tr><tr><td>ЧП “IDEAL ELEVATION”</td><td>Джизакская обл. Зоминский р-н, г.Зомин Курган МФЙ</td><td>98-0019200</td></tr><tr><td>ЧП “DENIS YULDUZI RIVOJI”</td><td>Джизакская обл. Пахтакорский р-н, Пахтакор КФЙ ул.Мустакиллик 7-дом 12-кв</td><td>94-5790707</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>“RUSTAMBEK GOLD ALOQA” XK</td><td>Jizzax vil., Farij tum., Bogdon sh., Bogdon mfy, A.Temur k.</td><td>97-4847005</td></tr><tr><td>“IDEAL ELEVATION” XK</td><td>Jizzax vil., Zomin tum., Zomin sh., Qo`rg`on mfy</td><td>98-0019200</td></tr><tr><td>“DENIS YULDUZI RIVOJI” XK</td><td>Jizzax vil., Paxtaqor tum., Paxtaqor kfy, Mustaqillik k., 7-12</td><td>94-5790707</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 6,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'khorezm',
        'title' => [
            'ru' => 'Хорезмская область',
            'uz' => 'Xorazm viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ООО “ZIYOBEK DENIS”</td><td>Хорезмская обл. Хазорапский р-н ул. Равнак д-1</td><td>94-2345434,95-3550102</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>“ZIYOBEK DENIS” MchJ</td><td>Xorazm vil., Xozarasp tum., Ravnak k., 1</td><td>94-2345434,95-3550102</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 5,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'syrdarya',
        'title' => [
            'ru' => 'Сырдарьинская область',
            'uz' => 'Sirdaryo viloyati',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ЧП “GULSEVAR SURAYYO KELAJAGI”</td><td>Сырдарьинская обл., Сардобинский р/н, п.Пахтаобод, ул. Дустлик</td><td>975660660</td></tr><tr><td>OOO «BEST-YANGIYER-TRADE»</td><td>Сырдарьинская обл., г.Янгиер, ул.Пахтакор 12-2-2a</td><td>972751199</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>“GULSEVAR SURAYYO KELAJAGI” XK</td><td>Sirdaryo vil., Sardoba tum., Paxtaobod q., Do`stlik k.</td><td>975660660</td></tr><tr><td>«BEST-YANGIYER-TRADE» MChJ</td><td>Sirdaryo vil., Yangiyer sh., Paxtaqor k. 12-2-2a</td><td>972751199</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 4,
        'created_date' => '2022-04-17 19:00:00',
    ],
    [
        'slug' => 'karakalpakstan',
        'title' => [
            'ru' => 'Республика Каракалпакстан',
            'uz' => 'Qoraqolpog\'iston Respublikasi',
        ],
        'content' => [
            'ru' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>ЧП "KUNGRAD CITY"</td><td>Респуб. Каракалпакистан, р. Кунград, ул. Т.Айбергенов, дом б/н</td><td>(99) 193 1998</td></tr><tr><td>OOO "BERUNIY SHABBOZ"</td><td>Респуб. Каракалпакистан, р. Беруни, ул. Кат, дом б/н</td><td>(91) 302 2212</td></tr><tr><td>OOO "MEBEL ORAYI"</td><td>Респуб. Каракалпакистан, г. Нукус, ул. Досназаров, дом 8а</td><td>(91) 307 1234</td></tr></tbody></table></figure>
HTML,
            'uz' => <<<'HTML'
<figure class="table"><table><tbody><tr><td>"KUNGRAD CITY" XK</td><td>Qoraqalpog`iston R., Kungrad tum., T.Aybergenov k.</td><td>(99) 193 1998</td></tr><tr><td>"BERUNIY SHABBOZ" MChJ</td><td>Qoraqalpog`iston R., Beruniy tum., Kat k.</td><td>(91) 302 2212</td></tr><tr><td>"MEBEL ORAYI" MChJ</td><td>Qoraqalpog`iston R., Nukus sh., Dosnazarov k. 8a</td><td>(91) 307 1234</td></tr></tbody></table></figure>
HTML,
        ],
        'sort' => 3,
        'created_date' => '2022-03-31 19:00:00',
    ],
];
