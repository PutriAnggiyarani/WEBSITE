@extends('layout.app')
@section('content')
<section id="profile">
    <div class="container-fluid padding-side">
        <!-- Modal -->
        <div class="modal fade" id="buyAgain" tabindex="-1" aria-labelledby="yourModalIdLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable d-flex justify-content-center">
                <div class="modal-content modal-buyAgain rounded-4" style="background-color: #F0EEEF;">
                    <div class="modal-header px-4 py-4">
                        <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x" id="yourModalIdLabel" style="font-size: 18px">Tambah ke Keranjang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4">
                        <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4" style="background-color: #ffff">
                            <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                            <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                            <div class="cart-description">
                                <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                                <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                            </div>
                            <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                                <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                            </div>
                        </div>  
                        <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4" style="background-color: #ffff">
                            <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                            <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                            <div class="cart-description">
                                <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                                <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                            </div>
                            <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                                <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                            </div>
                        </div> 
                        <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4" style="background-color: #ffff">
                            <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                            <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                            <div class="cart-description">
                                <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                                <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                            </div>
                            <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                                <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                            </div>
                        </div> 
                        <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4" style="background-color: #ffff">
                            <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                            <img src="{{ url('assets/images/cart2.png') }}" class="rounded-2 me-3" alt="">
                            <div class="cart-description">
                                <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                                <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                            </div>
                            <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                                <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                            </div>
                        </div> 
                        <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4" style="background-color: #ffff">
                            <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                            <img src="{{ url('assets/images/cart3.png') }}" class="rounded-2 me-3" alt="">
                            <div class="cart-description">
                                <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                                <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                            </div>
                            <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                                <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-edit-images rounded-4" data-bs-dismiss="modal">Batalkan</a>
                        <a href="{{ route('cart') }}" class="btn btn-primary rounded-4">Submit</a>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="d-flex w-100">
            <div class="sidebar-profile px-4 py-4 rounded-4 me-5">
                <div class="d-flex align-items-center">
                    <img src="{{ url('assets/images/profile.png') }}" alt="" class="rounded-5 me-3">
                    <h6 class="fw-bold mb-0" style="color: #66525E;">Natasha Putri</h6>
                </div>
                <div class="divider-line-delivery mt-3"></div>
                <a href="{{ route('profilecustomer')}}">
                    <div class="items-sidebar d-flex align-items-center mt-2 py-1">
                        <img src="{{ url('assets/images/profilesidebar.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Profil Saya</p>
                    </div>
                </a>
                <a href="{{ route('favorite')}}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/favorite.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Favorite Saya</p>
                    </div>
                </a>
                <a href="{{ route('order')}}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/ordericon.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Pesanan Saya</p>
                    </div>
                </a>
                <div class="divider-line"></div>
                <a href="{{ route('add-address') }}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/location.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Lokasi Saya</p>
                    </div>
                </a>
            </div>
            <div id="order-tracking" class="w-100">
                <div class="navbar-order px-4 py-4 rounded-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2"><i class="fa-solid fa-angle-left" style="color: #66525E; font-size: 26px;"></i></span>
                            <h5 class="mb-1 fw-bold" style="color: #66525E;">Kembali</h5>
                        </div>
                        <h5 class="mb-1 fw-bold" style="color: #987070;">Selesai</h5>
                    </div>
                    <ul id="progressbar-1-done" class="px-4 py-4 d-flex align-items-center">
                        <li class="step0 active d-flex justify-content-center flex-column align-items-center text-center" id="step1"><span class="mt-2 fw-semibold">Pesanan Dibuat</span></li>
                        <li class="step0 active d-flex justify-content-center flex-column align-items-center text-center" id="step2"><span class="mt-2 fw-semibold">Belum Bayar</span></li>
                        <li class="step0 active d-flex justify-content-center flex-column align-items-center text-center" id="step3"><span class="mt-2 fw-semibold">Pesanan Dikemas</span></li>
                        <li class="step0 active d-flex justify-content-center flex-column align-items-center text-center" id="step4"><span class="mt-2 fw-semibold">Pesanan Dikirim</span></li>
                        <li class="step0 active d-flex justify-content-center flex-column align-items-center text-center" id="step5"><span class="mt-2 fw-semibold">Belum Dinilai</span></li>
                    </ul>
                    <div class="btn-container">
                        <div class="d-flex justify-content-end px-md-5 mt-4">
                            <div class="d-flex flex-column">
                                <a href="#" class="btn btn-primary rounded-4" data-bs-toggle="modal" data-bs-target="#scrollableModal">Nilai</a>
                                <a href="{{ route('chat-customer') }}" class="btn btn-primary btn-edit-images rounded-4 mt-3">Hubungi Admin</a>
                                <a href="#" class="btn btn-primary btn-edit-images rounded-4 mt-3" data-bs-toggle="modal" data-bs-target="#buyAgain">Beli Lagi</a>
                            </div>
                            <div class="modal fade" id="scrollableModal" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable d-flex justify-content-center">
                                    <div class="modal-content modal-rating px-md-3 py-3 rounded-4">
                                        <div class="modal-header justify-content-center position-relative">
                                            <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x" id="scrollableModalLabel">Nilai Produk</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="rating-list px-md-4 py-3">
                                                <div class="rating-produk px-4 py-3 d-flex justify-content-between align-items-center rounded-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 100px; height: 100px;">
                                                        <div class="cart-description">
                                                            <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                                                            <h6 class="fw-semibold mb-0 mt-2" style="color: #66525E;">1x</h6>
                                                            <p class="mb-0 mt-2 rounded-3 px-2">Warna : Beige</p>
                                                        </div>
                                                    </div>
                                                    <p class="fw-semibold mb-0" style="color: #66525E;">Rp. 35.000</p>
                                                </div>
                                                <div class="d-flex justify-content-center mt-3 align-items-center star-rating" data-rating-id="1">
                                                    <i class="fa-regular fa-star me-2 star" data-value="1" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="2" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="3" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="4" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star star" data-value="5" style="font-size: 35px;"></i>
                                                </div>
                                            </div>
                                            <div class="rating-list px-md-4 py-3">
                                                <div class="rating-produk px-4 py-3 d-flex justify-content-between align-items-center rounded-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 100px; height: 100px;">
                                                        <div class="cart-description">
                                                            <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                                                            <h6 class="fw-semibold mb-0 mt-2" style="color: #66525E;">1x</h6>
                                                            <p class="mb-0 mt-2 rounded-3 px-2">Warna : Beige</p>
                                                        </div>
                                                    </div>
                                                    <p class="fw-semibold mb-0" style="color: #66525E;">Rp. 35.000</p>
                                                </div>
                                                <div class="d-flex justify-content-center mt-3 align-items-center star-rating" data-rating-id="2">
                                                    <i class="fa-regular fa-star me-2 star" data-value="1" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="2" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="3" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="4" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star star" data-value="5" style="font-size: 35px;"></i>
                                                </div>
                                            </div>
                                            <div class="rating-list px-md-4 py-3">
                                                <div class="rating-produk px-4 py-3 d-flex justify-content-between align-items-center rounded-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 100px; height: 100px;">
                                                        <div class="cart-description">
                                                            <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                                                            <h6 class="fw-semibold mb-0 mt-2" style="color: #66525E;">1x</h6>
                                                            <p class="mb-0 mt-2 rounded-3 px-2">Warna : Beige</p>
                                                        </div>
                                                    </div>
                                                    <p class="fw-semibold mb-0" style="color: #66525E;">Rp. 35.000</p>
                                                </div>
                                                <div class="d-flex justify-content-center mt-3 align-items-center star-rating" data-rating-id="3">
                                                    <i class="fa-regular fa-star me-2 star" data-value="1" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="2" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="3" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="4" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star star" data-value="5" style="font-size: 35px;"></i>
                                                </div>
                                            </div>
                                            <div class="rating-list px-md-4 py-3">
                                                <div class="rating-produk px-4 py-3 d-flex justify-content-between align-items-center rounded-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ url('assets/images/cart2.png') }}" alt="" class="rounded-3 me-3" style="width: 100px; height: 100px;">
                                                        <div class="cart-description">
                                                            <h6 class="fw-bold mb-0">Serenade Strips</h6>
                                                            <h6 class="fw-semibold mb-0 mt-2" style="color: #66525E;">1x</h6>
                                                            <p class="mb-0 mt-2 rounded-3 px-2">Warna : Pink</p>
                                                        </div>
                                                    </div>
                                                    <p class="fw-semibold mb-0" style="color: #66525E;">Rp. 185.000</p>
                                                </div>
                                                <div class="d-flex justify-content-center mt-3 align-items-center star-rating" data-rating-id="4">
                                                    <i class="fa-regular fa-star me-2 star" data-value="1" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="2" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="3" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="4" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star star" data-value="5" style="font-size: 35px;"></i>
                                                </div>
                                            </div>
                                            <div class="rating-list px-md-4 py-3">
                                                <div class="rating-produk px-4 py-3 d-flex justify-content-between align-items-center rounded-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ url('assets/images/cart3.png') }}" alt="" class="rounded-3 me-3" style="width: 100px; height: 100px;">
                                                        <div class="cart-description">
                                                            <h6 class="fw-bold mb-0">Scuba Slim-Fit Pants</h6>
                                                            <h6 class="fw-semibold mb-0 mt-2" style="color: #66525E;">1x</h6>
                                                            <p class="mb-0 mt-2 rounded-3 px-2">Warna : Beige</p>
                                                        </div>
                                                    </div>
                                                    <p class="fw-semibold mb-0" style="color: #66525E;">Rp. 115.000</p>
                                                </div>
                                                <div class="d-flex justify-content-center mt-3 align-items-center star-rating" data-rating-id="5">
                                                    <i class="fa-regular fa-star me-2 star" data-value="1" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="2" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="3" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star me-2 star" data-value="4" style="font-size: 35px;"></i>
                                                    <i class="fa-regular fa-star star" data-value="5" style="font-size: 35px;"></i>
                                                </div>
                                            </div>
                                            <div class="comment-review px-md-4 py-3">
                                                <div class="comment px-4 py-3 rounded-4">
                                                    <h6 class="fw-bold mb-0">
                                                        Tambahkan Detail Ulasan
                                                    </h6>
                                                    <textarea name="" id="" class="rounded-3 mt-3 mb-0 w-100 px-2 py-1" placeholder="Tambahkan Ulasan"></textarea>
                                                    <a href="#" class="btn btn-primary btn-edit-images rounded-4 mt-2 d-flex justify-content-center align-items-center" style="width: fit-content; height: 50px;" id="openFileDialog">
                                                        <span class="mb-0" style="font-size: 14px;">Tambah Foto/Video</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-container d-flex justify-content-end mt-5">
                                                <a href="" class="btn btn-primary btn-edit-images me-3">Batalkan</a>
                                                <a href="{{ route('order-tracking-done-rating') }}" id="submitButton" class="btn btn-primary">Submit</a>
                                            </div>
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="address-track px-5 d-flex flex-column flex-lg-row justify-content-between mt-5">
                        <div class="address-receiver me-5">
                            <h5 class="fw-bold" style="color: #241D21;">Alamat Pengiriman</h5>
                            <div class="receiver-order mt-3">
                                <h6 class="fw-bold mb-0">Natasha Putri</h6>
                                <p class="mb-0 mt-1" style="color: #737373; font-size: 14px;">+6281234567890</p>
                                <p class="mb-0" style="color: #737373; font-size: 14px;">Jl. Ir. Haji Juanda, Betro, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253</p>
                            </div>
                        </div>
                        <div class="timeline-order w-100 px-5 py-5 rounded-4 mt-3 mt-md-0">
                            <ul class="timeline-with-icons">
                                <li class="timeline-item mb-5">
                                    <span class="timeline-icon-full">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    <h6 class="fw-bold">Terkirim</h6>
                                    <p class="mb-1 fw-semibold" style="color: #595959;">03-10-2024</p>
                                    <p class="fw-semibold" style="color: #999999; font-size: 14px;">
                                        Pesanan telah sampai diterima oleh pihak yang bersangkutan
                                    </p>
                                </li>
                                <li class="timeline-item mb-5">
                                    <span class="timeline-icon">
                                        <img src="{{ url('assets/images/timeline2.png') }}" alt="">
                                    </span>
                                    <h6 class="fw-bold">Terkirim</h6>
                                    <p class="mb-1 fw-semibold" style="color: #595959;">03-10-2024</p>
                                    <p class="fw-semibold" style="color: #999999; font-size: 14px;">
                                        Pesanan dalam pengiriman
                                    </p>
                                </li>
                                <li class="timeline-item mb-2">
                                    <span class="timeline-icon-full">
                                        <!-- <i class="fa-solid fa-truck-fast"></i> -->
                                    </span>
                                    <!-- <h6 class="fw-bold">Terkirim</h6> -->
                                    <p class="mb-1 fw-semibold" style="color: #595959;">01-10-2024</p>
                                    <p class="fw-semibold" style="color: #999999; font-size: 14px;">
                                        Pesanan Telah sampai di lokasi Transit
                                    </p>
                                </li>
                                <li class="timeline-item mb-5">
                                    <span class="timeline-icon">
                                        <img src="{{ url('assets/images/timeline4.png') }}" alt="">
                                    </span>
                                    <h6 class="fw-bold">Sedang Dikemas</h6>
                                    <p class="mb-1 fw-semibold" style="color: #595959;">01-10-2024</p>
                                    <p class="fw-semibold" style="color: #999999; font-size: 14px;">
                                        Admin telah mengatur jadwal pengiriman. Menunggu pesanan diserahkan ke pihak jasa kirim
                                    </p>
                                </li><li class="timeline-item mb-0">
                                    <span class="timeline-icon">
                                        <img src="{{ url('assets/images/timeline5.png') }}" alt="">
                                    </span>
                                    <h6 class="fw-bold">Pesanan Dibuat</h6>
                                    <p class="mb-1 fw-semibold" style="color: #595959;">01-10-2024</p>
                                    <p class="fw-semibold" style="color: #999999; font-size: 14px;">
                                        Pesanan Dibuat
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="order-list" class="px-5 mt-5">
                        <div class="order-list rounded-4">
                            <div class="header d-flex justify-content-end align-items-center px-4 py-4 ">
                                <img src="{{ url('assets/images/logo.png') }}" alt="" style="width: 61px; height: 32px;" class="me-2">
                                <p class="mb-0 mt-1">No Order : F00000000001</p>
                            </div>
                            <div class="body py-5">
                                <div class="order-item px-4 py-4 d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                                        <div class="cart-description">
                                            <h6 class="mb-2 fw-bold">Hijab Bella Square</h6>
                                            <h6 class="mb-2 fw-bold">1x</h6>
                                            <p class="mb-0 rounded-3">Warna : Beige</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 35.000</h6>
                                </div>
                                <div class="divider-line-order"></div>
                                <div class="order-item px-4 py-4 d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                                        <div class="cart-description">
                                            <h6 class="mb-2 fw-bold">Hijab Bella Square</h6>
                                            <h6 class="mb-2 fw-bold">1x</h6>
                                            <p class="mb-0 rounded-3">Warna : Beige</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 35.000</h6>
                                </div>
                                <div class="divider-line-order"></div>
                                <div class="order-item px-4 py-4 d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                                        <div class="cart-description">
                                            <h6 class="mb-2 fw-bold">Hijab Bella Square</h6>
                                            <h6 class="mb-2 fw-bold">1x</h6>
                                            <p class="mb-0 rounded-3">Warna : Beige</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 35.000</h6>
                                </div>
                                <div class="divider-line-order"></div>
                                <div class="order-item px-4 py-4 d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('assets/images/cart2.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                                        <div class="cart-description">
                                            <h6 class="mb-2 fw-bold">Serenade Strips</h6>
                                            <h6 class="mb-2 fw-bold">1x</h6>
                                            <p class="mb-0 rounded-3">Warna : Pink</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 185.000</h6>
                                </div>
                                <div class="divider-line-order"></div>
                                <div class="order-item px-4 py-4 d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('assets/images/cart3.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                                        <div class="cart-description">
                                            <h6 class="mb-2 fw-bold">Scuba Slim-Fit Pants</h6>
                                            <h6 class="mb-2 fw-bold">1x</h6>
                                            <p class="mb-0 rounded-3">Warna : Beige</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 115.000</h6>
                                </div>
                                <div class="divider-line-order"></div>
                                <div class="d-flex flex-column px-4 mt-4">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 180px;">Total Pesanan :</h6>
                                        <h4 class="fw-semibold mb-0" style="color: #595959;">Rp. 450.000</h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4 align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 180px;">Total Pesanan :</h6>
                                        <h4 class="fw-semibold mb-0" style="color: #595959;">Rp. 450.000</h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4 align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 180px;">Total Pesanan :</h6>
                                        <h4 class="fw-semibold mb-0" style="color: #595959;">Rp. 450.000</h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4 align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 180px;">Total Pesanan :</h6>
                                        <h4 class="fw-semibold mb-0" style="color: #595959;">Rp. 450.000</h4>
                                    </div>
                                    <div class="divider-line-order"></div>
                                    <div class="d-flex justify-content-end mt-4 align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 148px;">Total Pesanan :</h6>
                                        <h3 class="fw-bold mb-0" style="color: #595959;">Rp. 450.000</h3>
                                    </div>
                                    <div class="d-flex justify-content-end mt-5 align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 220px;">Metode Pembayaran</h6>
                                        <h5 class="fw-semibold mb-0" style="color: #595959;">Bank BCA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Select all star rating containers
        const starRatingContainers = document.querySelectorAll('.star-rating');

        starRatingContainers.forEach(container => {
            const stars = container.querySelectorAll('.star');
            let currentRating = 0; // Track the current rating for each product separately

            stars.forEach(star => {
                // Set rating on click
                star.addEventListener('click', () => {
                    currentRating = star.getAttribute('data-value');
                    updateStars(stars, currentRating);
                    console.log('Selected rating for product', container.getAttribute('data-rating-id'), ':', currentRating);
                });

                // Preview rating on hover
                star.addEventListener('mouseover', () => {
                    const hoverValue = star.getAttribute('data-value');
                    updateStars(stars, hoverValue, true);
                });

                // Reset to selected rating on mouse out
                star.addEventListener('mouseout', () => {
                    updateStars(stars, currentRating);
                });
            });
        });

        // Function to update stars based on rating for a specific product
        function updateStars(stars, rating, isHover = false) {
            stars.forEach(star => {
                const starValue = star.getAttribute('data-value');
                if (starValue <= rating) {
                    star.classList.add('fa-solid');
                    star.classList.remove('fa-regular');
                    if (isHover) star.classList.add('hovered');
                    else star.classList.remove('hovered');
                } else {
                    star.classList.add('fa-regular');
                    star.classList.remove('fa-solid');
                    star.classList.remove('hovered');
                }
            });
        }

        document.getElementById('openFileDialog').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor behavior

            // Create a file input element dynamically
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*,video/*'; // Accept image and video files

            // Trigger the file dialog
            fileInput.click();

            // Optional: Add an event listener to handle file selection
            fileInput.addEventListener('change', function() {
                const files = fileInput.files;
                if (files.length > 0) {
                    console.log('Selected file:', files[0]); // You can handle the file as needed
                }
            });
        });

        // JavaScript to toggle the search form visibility when the icon is clicked
        document.getElementById("search-icon-toggle").addEventListener("click", function() {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });

        // let resizeTimeout;
        // function adjustTextForResponsive() {
        //     const steps = document.querySelectorAll('#progressbar-1-done .step0 span');
        //     const screenWidth = window.innerWidth;

        //     steps.forEach(step => {
        //         const text = step.innerHTML;

        //         if (screenWidth < 768) {
        //             step.innerHTML = text.replace(' ', ' <br> ');
        //         } else {
        //             step.innerHTML = text.replace('<br>', ' ');
        //         }
        //     });
        // }
        // Debounced resize event listener
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);  // Clear any previously set timeout
            resizeTimeout = setTimeout(adjustTextForResponsive, 200);  // Wait for 200ms before running the function
        });
        // Initial adjustment on page load
        adjustTextForResponsive();
    });
</script>
@endsection