@extends('layout.app')
@section('content')
    <div class="container-fluid padding-side">
        <h6 class="fw-bold mb-0 page-status" style="color: #737373;">
            Produk Kami > Hijab > Hijab Bella Square > <span style="color: #66525E;">Hijab Bella Square</span>
        </h6>
        <div class="product-review d-flex align-items-center justify-content-between px-4 py-4 mt-4 rounded-4">
            <div class="d-flex align-items-center">
                <div class="images d-flex flex-column align-items-center me-4">
                    <img src="{{ asset('assets/images/pdetail.png') }}" alt="" class="rounded-4" style="border: 3px solid #66525E; width: 120px; height: 150px;">
                    {{-- <a href="{{ route('detailproduct') }}" class="btn btn-outline-secondary rounded-4 d-md-none d-flex justify-content-center align-items-center mt-2 btn-review-product-responsive" style="">Lihat Produk</a> --}}
                </div>
                <div class="description">
                    <h5 class="fw-bold mb-0 text-uppercase">Hijab Bella Square</h5>
                    <div class="star-rating mt-2">
                        <span class="fa fa-star checked" style="color: #fcaf23; font-size: 14px;"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23; font-size: 14px;"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23; font-size: 14px;"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23; font-size: 14px;"></span>
                        <span class="fa fa-star" style="color: #fcaf23; font-size: 14px;"></span>
                        <span class="ms-1" style="font-size: 14px;">5.0/5</span>
                    </div>
                    <h5 class="fw-bold mt-2">Rp. 30.000</h5>
                </div>
            </div>
            <a href="{{ route('detailproduct') }}" class="btn btn-outline-secondary me-5 rounded-4 btn-review-product">Lihat Produk</a>
        </div>
        <div class="w-100 d-flex mt-2">
            <div class="rating-container mt-4">
                <div class="rating-box" id="ratingBox">
                    <span class="fa fa-star checked rating-icon"></span>
                    <h6 class="rating-value">5.0</h6>
                    <p class="rating-subtext">/5.0</p>
                </div>
                <div class="filter-box py-4 px-4 mt-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold">Filter Ulasan</h6>
                        <a href="#">
                            <span><i class="fa-solid fa-filter filter-icon"></i></span>
                        </a>
                        <i class="fa-solid fa-xmark d-md-none close-modal-filter"></i>
                    </div>
                    <hr class="divider-line">
                    <h6 class="fw-bold mt-3">Media</h6>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <p class="mb-0">Dengan Foto & Video</p>
                        <input type="checkbox" id="customCheckbox" class="custom-checkbox text-center">
                    </div>
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
                </div>
            </div>
            <div class="review-container w-100 mt-4">
                <div class="d-flex justify-content-between align-items-center d-md-none" id="filterReviewDiv">
                    <h5 class="fw-bold mb-0">Ulasan Produk</h5>
                    <img src="{{ url('assets/images/filter.png') }}" alt="" id="filterIcon">
                </div>
                <div class="review mt-4">
                    <div class="profile-review d-flex">
                        <img class="rounded-5 me-2" src="{{ url('assets/images/profile.png') }}" alt="" style="width: 50px; height: 50px;">
                        <p class="fw-semibold">U*****3</p>
                    </div>
                    <div class="star-review mt-2 d-flex">
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    </div>
                    <p class="mt-2 mb-0" style="color: #8E98A8; font-size: 14px;">Variasi : Putih Gading, Coklat Pramuka</p>
                    <p class="mt-1 fw-semibold" style="font-size: 14px;">
                        Warnanya juga banyak pilihan, jadi bisa di-mix and match sama outfit apa aja. Dan yang paling aku suka, hijab ini gak licin!
                        Jadi gak perlu sering-sering benerin hijab pas lagi dipake. Worth it banget buat jadi hijab andalan sehari-hari. Pokoknya, buat kamu yang cari hijab nyaman, gampang
                        diatur, dan banyak pilihan warna, Hijab Paris ini recommended banget deh
                    </p>
                    <div class="d-flex">
                        <img class="me-2" src="{{ url('assets/images/reviewpict.png') }}" alt="">
                        <img src="{{ url('assets/images/reviewpict.png') }}" alt="">
                    </div>
                </div>
                <div class="review mt-5">
                    <div class="profile-review d-flex">
                        <img class="rounded-5 me-2" src="{{ url('assets/images/profile.png') }}" alt="" style="width: 50px; height: 50px;">
                        <p class="fw-semibold">U*****3</p>
                    </div>
                    <div class="star-review mt-2 d-flex">
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    </div>
                    <p class="mt-2 mb-0" style="color: #8E98A8; font-size: 14px;">Variasi : Putih Gading, Coklat Pramuka</p>
                    <p class="mt-1 fw-semibold" style="font-size: 14px;">
                        Warnanya juga banyak pilihan, jadi bisa di-mix and match sama outfit apa aja. Dan yang paling aku suka, hijab ini gak licin!
                        Jadi gak perlu sering-sering benerin hijab pas lagi dipake. Worth it banget buat jadi hijab andalan sehari-hari. Pokoknya, buat kamu yang cari hijab nyaman, gampang
                        diatur, dan banyak pilihan warna, Hijab Paris ini recommended banget deh
                    </p>
                    <div class="d-flex">
                        <img class="me-2" src="{{ url('assets/images/reviewpict.png') }}" alt="">
                        <img src="{{ url('assets/images/reviewpict.png') }}" alt="">
                    </div>
                </div>
                <div class="review mt-5">
                    <div class="profile-review d-flex">
                        <img class="rounded-5 me-2" src="{{ url('assets/images/profile.png') }}" alt="" style="width: 50px; height: 50px;">
                        <p class="fw-semibold">U*****3</p>
                    </div>
                    <div class="star-review mt-2 d-flex">
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    </div>
                    <p class="mt-2 mb-0" style="color: #8E98A8; font-size: 14px;">Variasi : Putih Gading, Coklat Pramuka</p>
                    <p class="mt-1 fw-semibold" style="font-size: 14px;">
                        Warnanya juga banyak pilihan, jadi bisa di-mix and match sama outfit apa aja. Dan yang paling aku suka, hijab ini gak licin!
                        Jadi gak perlu sering-sering benerin hijab pas lagi dipake. Worth it banget buat jadi hijab andalan sehari-hari. Pokoknya, buat kamu yang cari hijab nyaman, gampang
                        diatur, dan banyak pilihan warna, Hijab Paris ini recommended banget deh
                    </p>
                    <div class="d-flex">
                        <img class="me-2" src="{{ url('assets/images/reviewpict.png') }}" alt="">
                        <img src="{{ url('assets/images/reviewpict.png') }}" alt="">
                    </div>
                </div>
                <div class="review mt-5">
                    <div class="profile-review d-flex">
                        <img class="rounded-5 me-2" src="{{ url('assets/images/profile.png') }}" alt="" style="width: 50px; height: 50px;">
                        <p class="fw-semibold">U*****3</p>
                    </div>
                    <div class="star-review mt-2 d-flex">
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    </div>
                    <p class="mt-2 mb-0" style="color: #8E98A8; font-size: 14px;">Variasi : Putih Gading, Coklat Pramuka</p>
                    <p class="mt-1 fw-semibold" style="font-size: 14px;">
                        Warnanya juga banyak pilihan, jadi bisa di-mix and match sama outfit apa aja. Dan yang paling aku suka, hijab ini gak licin!
                        Jadi gak perlu sering-sering benerin hijab pas lagi dipake. Worth it banget buat jadi hijab andalan sehari-hari. Pokoknya, buat kamu yang cari hijab nyaman, gampang
                        diatur, dan banyak pilihan warna, Hijab Paris ini recommended banget deh
                    </p>
                    <div class="d-flex">
                        <img class="me-2" src="{{ url('assets/images/reviewpict.png') }}" alt="">
                        <img src="{{ url('assets/images/reviewpict.png') }}" alt="">
                    </div>
                </div>
                <div class="review mt-5">
                    <div class="profile-review d-flex">
                        <img class="rounded-5 me-2" src="{{ url('assets/images/profile.png') }}" alt="" style="width: 50px; height: 50px;">
                        <p class="fw-semibold">U*****3</p>
                    </div>
                    <div class="star-review mt-2 d-flex">
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    </div>
                    <p class="mt-2 mb-0" style="color: #8E98A8; font-size: 14px;">Variasi : Putih Gading, Coklat Pramuka</p>
                    <p class="mt-1 fw-semibold" style="font-size: 14px;">
                        Warnanya juga banyak pilihan, jadi bisa di-mix and match sama outfit apa aja. Dan yang paling aku suka, hijab ini gak licin!
                        Jadi gak perlu sering-sering benerin hijab pas lagi dipake. Worth it banget buat jadi hijab andalan sehari-hari. Pokoknya, buat kamu yang cari hijab nyaman, gampang
                        diatur, dan banyak pilihan warna, Hijab Paris ini recommended banget deh
                    </p>
                    <div class="d-flex">
                        <img class="me-2" src="{{ url('assets/images/reviewpict.png') }}" alt="">
                        <img src="{{ url('assets/images/reviewpict.png') }}" alt="">
                    </div>
                </div>
                <div class="review mt-5">
                    <div class="profile-review d-flex">
                        <img class="rounded-5 me-2" src="{{ url('assets/images/profile.png') }}" alt="" style="width: 50px; height: 50px;">
                        <p class="fw-semibold">U*****3</p>
                    </div>
                    <div class="star-review mt-2 d-flex">
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked me-1" style="color: #fcaf23"></span>
                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    </div>
                    <p class="mt-2 mb-0" style="color: #8E98A8; font-size: 14px;">Variasi : Putih Gading, Coklat Pramuka</p>
                    <p class="mt-1 fw-semibold" style="font-size: 14px;">
                        Warnanya juga banyak pilihan, jadi bisa di-mix and match sama outfit apa aja. Dan yang paling aku suka, hijab ini gak licin!
                        Jadi gak perlu sering-sering benerin hijab pas lagi dipake. Worth it banget buat jadi hijab andalan sehari-hari. Pokoknya, buat kamu yang cari hijab nyaman, gampang
                        diatur, dan banyak pilihan warna, Hijab Paris ini recommended banget deh
                    </p>
                    <div class="d-flex">
                        <img class="me-2" src="{{ url('assets/images/reviewpict.png') }}" alt="">
                        <img src="{{ url('assets/images/reviewpict.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterIcon = document.getElementById("filterIcon");
            const closeModalFilter = document.querySelector(".close-modal-filter");
            const ratingContainer = document.querySelector(".rating-container");

            filterIcon.addEventListener("click", function() {
                ratingContainer.classList.toggle("show"); // Toggle the "show" class
            });

            closeModalFilter.addEventListener("click", function() {
                ratingContainer.classList.remove("show"); // Hide the modal with smooth transition
            });

            // JavaScript to toggle the search form visibility when the icon is clicked
            document.getElementById("search-icon-toggle").addEventListener("click", function() {
                var searchForm = document.getElementById("search-form");
                searchForm.classList.toggle("d-none");
            });
        });
    </script>
@endsection