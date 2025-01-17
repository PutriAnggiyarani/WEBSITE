@extends('layout.app')
{{-- Mengambil file ktg.css khusus untuk halaman konten --}}
@push('styles')
    <link rel="stylesheet" href="{{ url('assets/css/ktg.css') }}">
@endpush
@section('content')

<header>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ url('assets/images/ktghijab/banner.png')}}" alt="Shop Image 1" class="img-fluid">
        </div>
    </div>
</header>

<div class="container">
    <div class="content">
        <div class="ktg">
            <span>
                <a href="halaman-beranda.html" class="breadcrumb-link">Beranda</a> >
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
                <div class="filter-section">
                    <label for="rating">Rating Produk</label>
                    <div class="rating">
                        <label>
                            <input type="checkbox">
                            <span>⭐⭐⭐⭐⭐</span>
                        </label>
                        <label>
                            <input type="checkbox">
                            <span>⭐⭐⭐⭐</span>
                        </label>
                        <label>
                            <input type="checkbox">
                            <span>⭐⭐⭐</span>
                        </label>
                        <label>
                            <input type="checkbox">
                            <span>⭐⭐</span>
                        </label>
                        <label>
                            <input type="checkbox">
                            <span>⭐</span>
                        </label>
                    </div>
                </div>

                <!-- Tombol Terapkan -->
                <button class="apply-button">Terapkan</button>
            </div>
            <div class="product-list">
                <div class="products">
                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/1.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/2.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Segitiga Inner</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/3.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/4.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Segitiga Inner</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/5.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/6.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Segitiga Inner</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/7.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Bella Square</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/8.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Segitiga Inner</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/ktghijab/9.png') }}" alt="Hijab Bella Square">
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