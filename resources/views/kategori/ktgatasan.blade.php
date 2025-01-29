@extends('layout.app')

{{-- Mengambil file ktg.css khusus untuk konten di halaman ini --}}
@push('styles')
    <link rel="stylesheet" href="{{ url('assets/css/ktg.css') }}">
@endpush

@section('content')

<header>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ url('assets/images/ktgatasan/banner.png')}}" alt="Shop Image 1" class="img-fluid">
        </div>
    </div>
</header>

<div class="container">
    <div class="content">
        <div class="ktg">
            <span>
                <a href="{{ Request::route()->getName() === 'index-login' ? route('index-login') :
    (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'about-us' ||
        Request::route()->getName() === 'ktghijab' ? route('index-login') : route('index')) }}"
                    class="breadcrumb-link">Beranda</a> >
                <span class="active">Hijab</span>
            </span>
        </div>
        <div class="flex-wrapper">
            <button id="toggle-filter" class="apply-button mobile-only">
                <i class="fas fa-cog"></i>
            </button>

            <div class="sidebar" id="filter-sidebar">
                <h3>Filter Produk</h3>
                <hr>
                <!-- Filter Berdasarkan Harga -->
                <div class="filter-section">
                    <label for="min-price">Harga Minimum</label>
                    <input type="number" id="min-price" placeholder="Masukkan harga minimum">

                    <label for="max-price">Harga Maximum</label>
                    <input type="number" id="max-price" placeholder="Masukkan harga maksimum">
                </div>

                <!-- Filter Berdasarkan Rating -->
                <div class="d-flex justify-content-between mt-4">
                    <h6 class="fw-bold">Rating Produk</h6>
                    <span id="caretToggle" style="cursor: pointer;">
                        <i id="caretIcon" class="fa-solid fa-caret-up" style="font-size: 18px;"></i>
                    </span>
                </div>
                <div id="ratingContainer">
                    <div class="d-flex justify-content-between mt-3 rating-row" data-rating="5">
                        <div class="d-flex">
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked" style="color: #fcaf23"></span>
                        </div>
                        <input type="checkbox" class="custom-checkbox text-center">
                    </div>
                    <div class="d-flex justify-content-between mt-3 rating-row" data-rating="4">
                        <div class="d-flex">
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked" style="color: #fcaf23"></span>
                        </div>
                        <input type="checkbox" class="custom-checkbox text-center">
                    </div>
                    <div class="d-flex justify-content-between mt-3 rating-row" data-rating="3">
                        <div class="d-flex">
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked" style="color: #fcaf23"></span>
                        </div>
                        <input type="checkbox" class="custom-checkbox text-center">
                    </div>
                    <div class="d-flex justify-content-between mt-3 rating-row" data-rating="2">
                        <div class="d-flex">
                            <span class="fa fa-star checked me-2" style="color: #fcaf23"></span>
                            <span class="fa fa-star checked" style="color: #fcaf23"></span>
                        </div>
                        <input type="checkbox" class="custom-checkbox text-center">
                    </div>
                    <div class="d-flex justify-content-between mt-3 rating-row" data-rating="1">
                        <div class="d-flex">
                            <span class="fa fa-star checked" style="color: #fcaf23"></span>
                        </div>
                        <input type="checkbox" class="custom-checkbox text-center">
                    </div>
                </div>

                <!-- Tombol Terapkan -->
                <button class="apply-button mt-3">Terapkan</button>
            </div>

            <div class="product-list">
                <div class="products">
                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/1.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/2.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Segitiga Inner</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/3.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/4.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Segitiga Inner</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/5.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/6.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Segitiga Inner</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/7.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/8.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Segitiga Inner</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktgatasan/9.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- Mengambil file style.css untuk navbar dan footer --}}
@push('styles')
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
@endpush