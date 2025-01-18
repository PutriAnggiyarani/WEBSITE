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
                    <img src="{{ url('assets/images/profile.png') }} " alt="" class="rounded-5 me-3">
                    <h6 class="fw-bold mb-0" style="color: #66525E;">Natasha Putri</h6>
                </div>
                <div class="divider-line-delivery mt-3"></div>
                <a href="{{ route('profilecustomer') }}">
                    <div class="items-sidebar d-flex align-items-center mt-2 py-1">
                        <img src="{{ url('assets/images/profilesidebar.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Profil Saya</p>
                    </div>
                </a>
                <a href="{{ route('favorite') }}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/favorite.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Favorite Saya</p>
                    </div>
                </a>
                <a href="{{ route('order') }}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/ordericon.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Pesanan Saya</p>
                    </div>
                </a>
                <a href="{{ route('add-address') }}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/location.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Lokasi Saya</p>
                    </div>
                </a>
            </div>
            <div id="chat-order" class="w-100">
                <div class="chat-box w-100">
                    <div class="header px-4 py-4 d-flex justify-content-between align-items-center">
                        <div class="profile-chat d-flex align-items-center">
                            <img src="{{ url('assets/images/profilechat.png') }}" alt="" class="rounded-5 me-3">
                            <h6 class="fw-bold-mb-0 mt-1" style="color: #F0EEEF;">Mindi (Admin FMD)</h6>
                        </div>
                        <img src="{{ url('assets/') }}images/fullscreen-icon.png" alt="">
                    </div>
                    <div class="body px-4 py-5">
                        <div class="chat-receiver d-flex justify-content-end">
                            <div class="chat px-3 py-3 d-flex align-items-center">
                                <img src="{{ url('assets/images/chatimg.png') }}" alt="" class="rounded-4 me-3">
                                <div class="chat-description">
                                    <p class="mb-0 fw-bold" style="font-size: 12px;">Hijab Bella Square</p>
                                    <div class="d-flex align-items-center mt-">
                                        <i class="fa-solid fa-star" style="color: #FCAF23; font-size: 12px;"></i>
                                        <i class="fa-solid fa-star" style="color: #FCAF23; font-size: 12px;"></i>
                                        <i class="fa-solid fa-star" style="color: #FCAF23; font-size: 12px;"></i>
                                        <i class="fa-solid fa-star" style="color: #FCAF23; font-size: 12px;"></i>
                                        <i class="fa-solid fa-star" style="color: #FCAF23; font-size: 12px;"></i>
                                    </div>
                                    <p class="mb-0 fw-bold mt-1" style="font-size: 12px;">Rp. 30.000</p>
                                    <a href="" class="btn btn-primary d-flex justify-content-center align-items-center" style="height: 40px;">
                                        <img src="{{ url('assets/images/carticon2.png') }}" alt="" style="width: 12px; height: auto;" class="me-2">
                                        <p class="mb-0 mt-1" style="font-size: 12px; color: #FFFFFF;">Tambah Keranjang</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="chat-receiver d-flex justify-content-end mt-3">
                            <div class="chat px-3 py-3 d-flex align-items-center">
                                <p class="mb-0 fw-semibold">Apakah produk ini masih tersedia?</p>
                            </div>
                        </div>
                        <div class="chat-admin d-flex justify-content-start mt-5">
                            <div class="chat px-3 py-3 d-flex align-items-center">
                                <p class="mb-0 fw-semibold">
                                    Terima kasih telah menghubungi kami. Untuk memastikan ketersediaan produk, mohon tunggu sebentar ya. 
                                    Kami akan segera mengeceknya dan memberikan informasi lebih lanjut.
                                </p>
                            </div>
                        </div>
                        <div class="chat-admin d-flex justify-content-start mt-3">
                            <div class="chat px-3 py-3 d-flex align-items-center">
                                <p class="mb-0 fw-semibold">
                                    Terima kasih telah menunggu. Kami informasikan bahwa produk yang Anda tanyakan masih tersedia. 
                                    Anda bisa langsung melakukan pemesanan, dan kami siap membantu jika ada yang perlu ditanyakan lebih lanjut.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="footer px-4 py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <form action="" class="w-100 me-4">
                                <input type="text" class="rounded-5 px-3 py-3" name="" id="" placeholder="Tulis Pesan Anda">
                            </form>
                            <a href="">
                                <div class="send-icon px-3 py-3 d-flex align-items-center justify-content-center">
                                    <img src="{{ url('assets/images/sendicon.png') }}" alt="">
                                </div>
                            </a>
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