@extends ('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Ulasan Produk</h4>
                <h6>Lihat Ulasan Produk Anda</h6>
            </div>
        </div>


        <section id="rating-product">
            <div class="container-fluid padding-side mt-4">
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="comtainer w-100 d-flex">
                            <div class="rating-container mt-4">
                                <div class="ulasan-box" id="ratingBox">
                                    <div class="imgulasan">
                                        <img src="assets/images/ktgatasan/1.png" alt="Rating" class="rating-image">
                                    </div>
                                    <p class="namaulasan">Serenade Stripes</p>
                                </div>
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
                                        <a href="" class="btn-terapkan" id="terapkan">
                                            <img src="{{ url('assets/images/carticon2.png') }}" class="me-2">
                                            Terapkan
                                        </a>
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
                                <a href="" class="d-flex justify-content-end fw-bold mt-4" style="color: #66525E;">
                                    <p>Lihat Semua Ulasan ></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection
