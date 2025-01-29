@extends('layout.app')
{{-- Mengambil file ktg.css khusus untuk halaman konten --}}
@push('styles')
    <link rel="stylesheet" href="{{ url('assets/css/ktg.css') }}">
@endpush
@section('content')

<header>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ url('assets/images/produkterbaru/banner.png')}}" alt="Shop Image 1" class="img-fluid">
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
                        <img src="{{ url('assets/images/produkterbaru/prod1.png') }}" alt="Hijab Bella Square">
                        <h4>Button Up Charm</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod2.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Ebony Lace Knit</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod3.png') }}" alt="Hijab Bella Square">
                        <h4>Lace Hem Blouse</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod4.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Motif Mossy Rock</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 65.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod5.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Horizon Camo Scarf</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 75.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod6.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Motif Dried Leaves</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 65.000</p>
                    </div>
                    
                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod7.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Patchwork Elegance</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod8.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Rose Detail Classic</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod9.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Bold Strips Knit</h4>
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