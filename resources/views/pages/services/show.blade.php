@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->meta_description)

@section('content')
    <div class="section__secondary">
        <div class="my-container">
            <div class="block__wrap">

                <nav class="breadcrumbs">
                    <ul class="breadcrumbs__ul">
                        <li class="breadcrumbs__item">
                            <a href="../index.htm" class="breadcrumbs__link">Asosiy</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="../services.html" class="breadcrumbs__link">Xizmatlar</a>
                        </li>

                        <li class="breadcrumbs__item" id="services_show_service_type" type_id="2"
                            url="https://perfectum.uz/services">
                            <a href="#!" class="breadcrumbs__link">Qo`shimcha xizmatlar</a>
                        </li>

                        <li class="breadcrumbs__item">
                            <a href="limitsiz-tunlar.html" class="breadcrumbs__link">Limitsiz tunlar</a>
                        </li>
                    </ul>
                </nav>

                <h2 class="block__title mb-20">Limitsiz tunlar</h2>
                <div class="content__text mb-4">
                    <p>
                    <p>"Limitsiz tunlar" xizmati, ushbu xizmatni aktivlashtirgan abonentlarga "Mobil Internet"
                        bilan tungi vaqtda cheksiz foydalanishlariga taqdim etiladi.<br>Abonent to'lovi – 5 000
                        so'm kuniga</p>
                    <p>Ushbu xizmatga&nbsp;<a href="https://www.perfectum.uz/service-show/ishonch-dasturi"><span
                                style="color:rgb(230,0,0);">"Ishonch"</span></a><span
                            style="color:rgb(230,0,0);">&nbsp;</span>dasturi bo'yicha maxsus narxi amalda,
                        abonent tajribasiga ko'ra (Misol: 10 yil =10%). Tajriba kanchalik ko'p bo'lsa,
                        shunchalik xizmat arzon.<br>"Limitsiz tunlar" xizmatida "Mobil internet" xizmatining
                        tarifikasiyasi:<br>01:00 dan 08:00 gacha-0 so'm; 08:00 dan 01:00 gacha – tanlangan tarif
                        reja shartlari asosida.<br>"Limitsiz tunlar" xizmatini kuniga 1 (bir) marotaba 1 (bir)
                        marta ulash (o'chirish) mumkin.<br>Tarifikasiyalashni "Kunduzgi" vaqtdan "tungi" vaqtga
                        to'g'ri o'tishi uchun tarmoq abonentlariga amaldagi ulanishni to'xtatib yangi ulanishni
                        o'rnatish tavsiya etiladi.<br>Tarifikasiya 10 Kb dan boshlab, yuqori tomonga qarab
                        yaxlitlanib hisoblanadi.<br>Ochiq Internet-sessiya vaqtida ovozli xizmatlarni
                        ishlatish/qabul qilish faqat EVDO Rev.A xizmat doirasidagi xududda amalga oshadi. 2000
                        1X xizmat doirasi xududida - ishlatish mumkin emas.</p>
                    <p>Xizmat barcha abonentlarga amalda, korporativ abonentlarga ham.<br>Xizmatni barcha
                        kompaniyaning ofislarida yoki "sShaxsiy kabinet" xizmati orqali aktivlashtirish
                        mumkin.<br>Abonentlar mustaqil ravishda "Limitsiz tunlar" xizmatini "Mobil kabinet"
                        orqali ulash/ o'chirishlari mumkin:</p>
                    <figure class="table">
                        <table>
                            <tbody>
                            <tr>
                                <td>Usul</td>
                                <td>Yoqish</td>
                                <td>O'chirish&nbsp;</td>
                            </tr>
                            <tr>
                                <td>USSD komanda</td>
                                <td>&nbsp;7*291<span style="color:rgb(230,0,0);">📞</span></td>
                                <td>&nbsp;7*290<span style="color:rgb(230,0,0);">📞</span></td>
                            </tr>
                            <tr>
                                <td>0777&nbsp;raqamiga SMS-kodi</td>
                                <td>&nbsp;291</td>
                                <td>&nbsp;290</td>
                            </tr>
                            </tbody>
                        </table>
                    </figure>
                    <p>Dastlabki to'lov 1000 so'm tushirilsa "Ma'lumotlar uzatish" xizmati taqdim qilinmaydi.
                    </p>
                    <div class="chip">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis harum eaque hic deserunt, veritatis expedita sequi quibusdam voluptatem, et dolore iste natus porro eveniet soluta unde odit cupiditate, incidunt asperiores?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
