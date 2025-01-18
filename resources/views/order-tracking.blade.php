@extends('layout.app')
@section('content')
<section id="profile">
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
        <div class="d-flex w-100">
            <div class="sidebar-profile px-4 py-4 rounded-4 me-5">
                <div class="d-flex align-items-center">
                    <img src="{{url('assets/images/profile.png')}}" alt="" class="rounded-5 me-3">
                    <h6 class="fw-bold mb-0" style="color: #66525E;">Natasha Putri</h6>
                </div>
                <div class="divider-line-delivery mt-3"></div>
                <a href="{{ route('profilecustomer') }}">
                    <div class="items-sidebar d-flex align-items-center mt-2 py-1">
                        <img src="{{url('assets/images/profilesidebar.png')}}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Profil Saya</p>
                    </div>
                </a>
                <a href="{{ route('favorite') }}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{url('assets/images/favorite.png')}}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Favorite Saya</p>
                    </div>
                </a>
                <a href="{{ route('order') }}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{url('assets/images/ordericon.png')}}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Pesanan Saya</p>
                    </div>
                </a>
                <div class="divider-line"></div>
                <a href="{{ route('add-address') }}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{url('assets/images/location.png')}}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Lokasi Saya</p>
                    </div>
                </a>
            </div>
            <div id="order-tracking" class="w-100">
                <div class="navbar-order px-4 py-4 rounded-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('order') }}"><span class="me-2"><i class="fa-solid fa-angle-left" style="color: #66525E; font-size: 26px;"></i></span></a>
                            <h5 class="mb-1 fw-bold" style="color: #66525E;">Kembali</h5>
                        </div>
                        <h5 class="mb-1 fw-bold" style="color: #987070;">Menunggu Pembayaran</h5>
                    </div>
                    <ul id="progressbar-1" class="px-4 py-4 d-flex align-items-center justify-content-between">
                        <li class="step0 active d-flex justify-content-center flex-column align-items-center text-center" id="step1"><span class="mt-2 fw-semibold">Pesanan Dibuat</span></li>
                        <li class="step0 active d-flex justify-content-center flex-column align-items-center text-center" id="step2"><span class="mt-2 fw-semibold">Belum Bayar</span></li>
                        <li class="step0 text-muted d-flex justify-content-center flex-column align-items-center text-center" id="step3"><span class="mt-1 fw-semibold">Pesanan Dikemas</span></li>
                        <li class="step0 text-muted d-flex justify-content-center flex-column align-items-center text-center" id="step4"><span class="mt-1 fw-semibold">Pesanan Dikirim</span></li>
                        <li class="step0 text-muted d-flex justify-content-center flex-column align-items-center text-center" id="step5"><span class="mt-1 fw-semibold">Belum Dinilai</span></li>
                    </ul>
                    <div class="btn-container px-5 mt-4">
                        <div class="d-flex justify-content-between">
                            <p class="fw-semibold mb-0">Silahkan lakukan pembayaran paling lambat 02-10-2024 dengan Bank BCA</p>
                            <div class="d-flex flex-column">
                                <a href="{{ route('payment') }}" class="btn btn-primary rounded-4">Bayar Sekarang</a>
                                <a href="{{ route('chat-customer') }}" class="btn btn-primary btn-edit-images rounded-4 mt-3"> Hubungi Admin</a>
                                <a href="" class="btn btn-primary btn-edit-images rounded-4 mt-3"> Batalkan Pesanan</a>
                            </div>
                        </div>
                    </div>
                    <div class="address-track px-5 mt-5">
                        <h5 class="fw-semibold" style="color: #241D21;">Alamat Pengiriman</h5>
                        <div class="receiver-order mt-4">
                            <h6 class="fw-bold mb-0">Natasha Putri</h6>
                            <p class="mb-0 mt-1" style="color: #737373; font-size: 14px;">+6281234567890</p>
                            <p class="mb-0" style="color: #737373; font-size: 14px;">Jl. Ir. Haji Juanda, Betro, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253</p>
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
                                            <p class="mb-0 rounded-3 px-1">Warna : Beige</p>
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
                                            <p class="mb-0 rounded-3 px-1">Warna : Beige</p>
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
                                            <p class="mb-0 rounded-3 px-1">Warna : Beige</p>
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
                                            <p class="mb-0 rounded-3 px-1">Warna : Pink</p>
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
                                            <p class="mb-0 rounded-3 px-1">Warna : Beige</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 115.000</h6>
                                </div>
                                <div class="divider-line-order"></div>
                                <div class="d-flex flex-column px-4 mt-4">
                                    <div class="total-price d-flex justify-content-end align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 180px;">Total Pesanan :</h6>
                                        <h4 class="fw-semibold mb-0" style="color: #595959;">Rp. 450.000</h4>
                                    </div>
                                    <div class="total-price d-flex justify-content-end mt-4 align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 180px;">Total Pesanan :</h6>
                                        <h4 class="fw-semibold mb-0" style="color: #595959;">Rp. 450.000</h4>
                                    </div>
                                    <div class="total-price d-flex justify-content-end mt-4 align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 180px;">Total Pesanan :</h6>
                                        <h4 class="fw-semibold mb-0" style="color: #595959;">Rp. 450.000</h4>
                                    </div>
                                    <div class="total-price d-flex justify-content-end mt-4 align-items-center">
                                        <h6 class="fw-semibold mb-0" style="color: #8E8E93; width: 180px;">Total Pesanan :</h6>
                                        <h4 class="fw-semibold mb-0" style="color: #595959;">Rp. 450.000</h4>
                                    </div>
                                    <div class="divider-line-order"></div>
                                    <div class="final-total-price d-flex justify-content-end mt-4 align-items-center">
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
        // JavaScript to toggle the search form visibility when the icon is clicked
        document.getElementById("search-icon-toggle").addEventListener("click", function() {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });
    });
</script>
@endsection