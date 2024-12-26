@extends('layout.app')
@section('content')
<div class="container-fluid padding-side">
    <div class="search d-none d-lg-block d-lg-none me-4 mb-4 w-100" id="search-form">
        <form class="position-relative align-items-center">
            <a href="#" class="position-absolute top-50 start-0 translate-middle-y p-1 ms-3">
                <i class="fa-solid fa-magnifying-glass" style="color: #667479;"></i>
            </a>
            <input
                type="text"
                class="form-control bg-secondary border-0 rounded-5 px-4 py-2 ps-5"
                placeholder="Search something here!" style="color: #99A2A5; width: 100%; max-width: 400px;"
            />
        </form>
    </div>
    <h6 class="fw-bold mb-0 page-status" style="color: #737373;">
        Produk Kami > Hijab > <span style="color: #66525E;">Hijab Bella Square</span>
    </h6>
    <div class="row mt-4">
        <div class="col-12 col-md-3 d-flex mb-3 me-4 custom-image-container">
            <div class="me-3 small-images">
                <img src="{{ url('assets/images/pdetail1.png') }}" class="small-img img-fluid active mb-2 rounded-4" alt="Small Image 1" />
                <img src="{{ url('assets/images/pdetail2.png') }}" class="small-img img-fluid mb-2 rounded-4" alt="Small Image 2" />
                <img src="{{ url('assets/images/pedetail3.png') }}" class="small-img img-fluid rounded-4" alt="Small Image 3" />
            </div>
            <div class="main-image border-0">
                <img src="{{ url('assets/images/pdetail.png') }}" class="custom-img rounded-4" alt="Main Image" />
            </div>
        </div>
        <div class="col-12 col-md-7 mt-1">
            <div class="product-view">
                <h4 class="card-title fw-bold">
                    HIJAB BELLA SQUARE
                </h4>
                <div class="star-rating mt-2">
                    <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    <span class="fa fa-star checked" style="color: #fcaf23"></span>
                    <span class="fa fa-star" style="color: #fcaf23"></span>
                    <span class="ms-1">5.0/5</span>
                </div>
            </div>
            <div class="mt-2 price-detail-product">
                <h1>Rp. 30.000</h1>
            </div>
            <div class="mt-3">
                <p>
                    Hijab Bella Square berbahan pollycotton yang lembut dan nyaman, dengan finishing jahit tepi rapi. Ukuran 115x115 cm, hijab ini mudah dibentuk dan cocok untuk berbagai kesempatan.
                </p>
            </div>
            <!-- Remaining content omitted for brevity -->
            <div class="color-selection mt-4">
                <h6 class="fw-bold">Warna</h6>
                <div class="color-options-container">
                    <div class="color-options rounded-4 py-3 px-3 d-flex align-items-center">
                        <button class="option-color" style="background-color: #CEA297;"></button>
                        <button class="option-color" style="background-color: #7F7671;"></button>
                        <button class="option-color" style="background-color: #1E3265;"></button>
                        <button class="option-color" style="background-color: #552D19;"></button>
                        <button class="option-color" style="background-color: #726651;"></button>
                        <button class="option-color" style="background-color: #D8C7A9;"></button>
                        <button class="option-color" style="background-color: #C49D74;"></button>
                        <button class="option-color" style="background-color: #AF8A78;"></button>
                        <button class="option-color" style="background-color: #A26D4B;"></button>
                        <button class="option-color" style="background-color: #C19F79;"></button>
                        <button class="option-color" style="background-color: #F0E1C0;"></button>
                        <button class="option-color" style="background-color: #EDEBD4;"></button>
                        <button class="option-color" style="background-color: #603B21;"></button>
                        <button class="show-more border-0 bg-white"> > </button>
                    </div>
                    <div class="color-selection more hidden rounded-4"> <!-- Hide this initially -->
                        <div class="color-options rounded-4 py-3 px-3">
                            <button class="color-option" style="background-color: #CEA297;"></button>
                            <button class="color-option" style="background-color: #7F7671;"></button>
                            <button class="color-option" style="background-color: #1E3265;"></button>
                            <button class="color-option" style="background-color: #552D19;"></button>
                            <button class="color-option" style="background-color: #726651;"></button>
                            <button class="color-option" style="background-color: #D8C7A9;"></button>
                            <button class="color-option" style="background-color: #C49D74;"></button>
                            <button class="color-option" style="background-color: #AF8A78;"></button>
                            <button class="color-option" style="background-color: #A26D4B;"></button>
                            <button class="color-option" style="background-color: #C19F79;"></button>
                            <button class="color-option" style="background-color: #F0E1C0;"></button>
                            <button class="color-option" style="background-color: #EDEBD4;"></button>
                            <button class="color-option" style="background-color: #603B21;"></button>
                            <button class="color-option" style="background-color: #B0C4DE;"></button>
                            <button class="color-option" style="background-color: #4682B4;"></button>
                            <button class="color-option" style="background-color: #5F9EA0;"></button>
                            <button class="color-option" style="background-color: #2E8B57;"></button>
                            <button class="color-option" style="background-color: #FFD700;"></button>
                            <button class="color-option" style="background-color: #FF4500;"></button>
                            <button class="color-option" style="background-color: #DDA0DD;"></button>
                            <button class="color-option" style="background-color: #B22222;"></button>
                            <button class="color-option" style="background-color: #F08080;"></button>
                            <button class="color-option" style="background-color: #98FB98;"></button>
                            <button class="color-option" style="background-color: #FF69B4;"></button>
                            <button class="color-option" style="background-color: #ADFF2F;"></button>
                            <button class="color-option" style="background-color: #00BFFF;"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 d-flex quantity">
                <div class="input-group align-items-center rounded-5 me-2 d-flex justify-content-center">
                    <span class="btn btn1 btn-minus d-flex align-items-center"><i class="fa fa-minus"></i></span>
                    <input type="text" value="1" class="input-quantity" />
                    <span class="btn btn1 btn-plus d-flex align-items-center"><i class="fa fa-plus"></i></span>
                </div>
                <a href="" class="btn btn-primary d-flex align-items-center justify-content-center" id="addtocart">
                    <img src="{{ url('assets/images/carticon2.png') }}" alt="Cart Icon" class="me-2">
                    Masukan Keranjang
                </a>
            </div>
            <div class="mt-4 btn-group" role="group" aria-label="Basic outlined example" style="max-width: 480px; width: 100%;">
                <a href="" class="btn btn-outline-secondary flex-fill d-flex align-items-center justify-content-center">
                    <i class="fa-regular fa-message me-2"></i> Chat
                </a>
                <a href="" class="btn btn-outline-secondary flex-fill d-flex align-items-center justify-content-center">
                    <i class="fa fa-heart me-2"></i> Add To Wishlist
                </a>
            </div>
        </div>
    </div>
</div>
<section id="rating-product">
    <div class="container-fluid padding-side mt-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
                <a class="nav-link active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Ulasan Produk</a>
            </li>
            <li class="nav-item flex-fill" role="presentation">
                <a class="nav-link" id="details-tab" data-bs-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Detail Produk</a>
            </li>
        </ul>
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                <p class="">
                    Bella Square adalah hijab segi empat yang terbuat dari bahan **pollycotton** berkualitas tinggi. Pollycotton dikenal karena kombinasi serat polyester dan katun yang memberikan kelembutan,
                    kenyamanan, serta daya tahan yang baik. Hijab ini terasa ringan namun tetap memberikan struktur yang pas, sehingga mudah dibentuk dan tidak licin saat dikenakan. Cocok untuk digunakan sehari-hari
                    maupun untuk acara formal, Bella Square memberikan kesan elegan dan rapi.
                    <br>
                    <br>
                    Ukuran : 115 cm x 115 cm
                    <br>
                    Finishing : Dijahit dengan tepi rapi, memastikan ketahanan dan tampilan yang lebih halus.
                    <br>
                    <br>
                    Tersedia dalam berbagai pilihan warna, hijab Bella Square menawarkan fleksibilitas dalam styling, sehingga Anda bisa tampil cantik dan nyaman sepanjang hari dengan kesan yang tetap elegan.
                </p>

            </div>
            <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="comtainer w-100 d-flex">
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
                        <a href="" class="d-flex justify-content-end fw-bold mt-4" style="color: #66525E;">
                            <p>Lihat Semua Ulasan ></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Select the input field and the buttons
    const inputQuantity = document.querySelector('.input-quantity');
    const btnMinus = document.querySelector('.btn-minus');
    const btnPlus = document.querySelector('.btn-plus');

    // Add event listeners for the minus and plus buttons
    btnMinus.addEventListener('click', function() {
        let currentValue = parseInt(inputQuantity.value);
        if (currentValue > 1) { // Ensure the value doesn't go below 1
            inputQuantity.value = currentValue - 1;
        }
    });

    btnPlus.addEventListener('click', function() {
        let currentValue = parseInt(inputQuantity.value);
        inputQuantity.value = currentValue + 1; // Increase the value by 1
    });

    let isDescending = true; // Start with descending order (5 stars first)
    document.getElementById('caretToggle').addEventListener('click', function() {
        // Toggle between ascending and descending order
        isDescending = !isDescending;

        // Change caret icon direction
        const caretIcon = document.getElementById('caretIcon');
        if (isDescending) {
            caretIcon.classList.remove('fa-caret-down');
            caretIcon.classList.add('fa-caret-up');
        } else {
            caretIcon.classList.remove('fa-caret-up');
            caretIcon.classList.add('fa-caret-down');
        }

        // Sort the ratings
        const ratingContainer = document.getElementById('ratingContainer');
        const ratingRows = Array.from(ratingContainer.querySelectorAll('.rating-row'));

        ratingRows.sort((a, b) => {
        const ratingA = parseInt(a.getAttribute('data-rating'));
        const ratingB = parseInt(b.getAttribute('data-rating'));

        return isDescending ? ratingB - ratingA : ratingA - ratingB;
        });

        // Re-append sorted rows
        ratingRows.forEach(row => ratingContainer.appendChild(row));
    });

    // Add click event listener to the show-more button
    // Initialize dropdown states on page load
    document.addEventListener('DOMContentLoaded', function() {
        const moreColors = document.querySelector('.color-selection.more');
        if (moreColors) {
            moreColors.style.maxHeight = '0'; // Ensure it starts collapsed
            moreColors.style.opacity = '0'; // Ensure it starts hidden
            moreColors.style.transform = 'translate(-50%, -10%)'; // Ensure it starts in the correct position
        }
    });

    // Add click event listener to the show-more button
    document.querySelector('.show-more').addEventListener('click', function(event) {
        const moreColors = document.querySelector('.color-selection.more');

        // Check if currently hidden
        const isHidden = moreColors.classList.contains('hidden');

        // Toggle visibility of the current dropdown
        moreColors.classList.toggle('hidden');

        if (isHidden) {
            // Calculate the height of the content to animate smoothly
            moreColors.style.maxHeight = `${moreColors.scrollHeight}px`; // Set max-height based on content height
            moreColors.style.opacity = '1'; // Set opacity to 1 for fade-in
            moreColors.style.transform = 'translate(-50%, 0)'; // Reset position to original
            setTimeout(() => {
                moreColors.style.maxHeight = ''; // Remove max-height after animation to allow natural collapsing
            }, 500); // Match this timeout with your CSS transition duration
        } else {
            moreColors.style.maxHeight = '0'; // Collapse it
            moreColors.style.opacity = '0'; // Fade out
            moreColors.style.transform = 'translate(-50%, -10%)'; // Move down while hidden
        }

        // Close other dropdowns if open
        closeOtherDropdowns(moreColors);
    });

    // Function to close other dropdowns
    function closeOtherDropdowns(currentDropdown) {
        const allDropdowns = document.querySelectorAll('.color-selection.more');

        allDropdowns.forEach(dropdown => {
        if (dropdown !== currentDropdown) {
            dropdown.classList.add('hidden'); // Hide any other dropdowns
            dropdown.style.maxHeight = '0'; // Collapse other dropdowns
            dropdown.style.transform = 'translate(-50%, -10%)'; // Move down while hidden
            dropdown.style.opacity = '0'; // Fade out
        }
        });
    }

    // Close the dropdown if clicking outside of it
    document.addEventListener('click', function(event) {
        const dropdown = document.querySelector('.color-selection.more');
        const showMoreButton = document.querySelector('.show-more');

        // Check if the click is outside the dropdown and the button
        if (dropdown && !dropdown.contains(event.target) && !showMoreButton.contains(event.target)) {
            dropdown.classList.add('hidden'); // Hide the dropdown
            dropdown.style.maxHeight = '0'; // Collapse it
            dropdown.style.opacity = '0'; // Fade out
            dropdown.style.transform = 'translate(-50%, -10%)'; // Move down while hidden
        }
    });

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
