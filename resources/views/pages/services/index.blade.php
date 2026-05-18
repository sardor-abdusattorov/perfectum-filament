@php
    use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.primary')

@section('title', $page?->title)
@section('meta_description', $page?->meta_description)

@section('content')
    <div class="section__secondary section-bg">
        <div class="my-container">
            <div class="section__top-secondary">
                <h2 class="block__title mb-24">
                    Xizmatlar
                </h2>
                <div class="btn__group"><button class="secondary-btn active">
                        Uy interneti uchun xizmatlar
                    </button><button class="secondary-btn">
                        Tarmoq xizmatlari
                    </button><button class="secondary-btn">
                        Qo`shimcha xizmatlar
                    </button><button class="secondary-btn">
                        Mobil kabineti
                    </button><button class="secondary-btn">
                        Ishonch dasturi
                    </button><button class="secondary-btn">
                        Balansni bilish
                    </button><button class="secondary-btn">
                        Abonent xizmatlari
                    </button><button class="secondary-btn">
                        Xalqaro aloqa
                    </button><button class="secondary-btn">
                        Kontent - provayderlarining xizmatlari
                    </button></div>
            </div>
            <div class="services-wrapper"><a href="#" class="services-item">
                    <div class="services-item__left"><img
                            src="assets/images/u8P6tYFqjpFnG24zJqroGBpnt2DOnsat5faSZS2M.svg" alt="group-img">
                    </div>
                    <div class="services-item__right">
                        <h3> Xizmat “Statik IP-manzil”</h3>
                        <p> </p>
                    </div>
                </a></div>
        </div>
    </div>
@endsection
