@extends('layout.app')
@section('content')
<section id="profile">
    <div class="container-fluid padding-side">
        <div class="d-flex w-100">
            <div class="sidebar-profile px-4 py-4 rounded-4 me-5">
                <div class="d-flex align-items-center">
                    <img src="{{ url('assets/images/profile.png')}}" alt="" class="rounded-5 me-3">
                    <h6 class="fw-bold mb-0" style="color: #66525E;">Natasha Putri</h6>
                </div>
                <div class="divider-line-delivery mt-3"></div>
                <a href="{{ route('profilecustomer')}}">
                    <div class="items-sidebar d-flex align-items-center mt-2 py-1">
                        <img src="{{ url('assets/images/profilesidebar.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Profil Saya</p>
                    </div>
                </a>
                <div class="divider-line"></div>
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
                <a href="{{ route('add-address') }}">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/location.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Lokasi Saya</p>
                    </div>
                </a>
            </div>
            <div id="profile-content">
                <div class="images-profile d-flex justify-content-center position-relative">
                    <div class="edit-profile">
                        <img src="{{ url('assets/images/profilebig.png')}}" alt="" class="profile-image">
                        <a href="{{ url('/editprofile') }}"><i class="fa-solid fa-pen-to-square edit-icon"></i></a>
                    </div>
                    <div class="detail-profile px-5 py-5 rounded-4">
                        <h4 style="color: #987070;" class="fw-bold">Info Profil Pengguna</h4>
                        <div class="px-3 py-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">User Id</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-profile d-flex justify-content-between"
                                    style="border-bottom: 1px solid #b7b7b7;">
                                    <p class="mb-0 fw-semibold" id="userID">12345678910</p>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-1">Salin</p>
                                        <img src="{{ url('assets/images/copyUserID.png')}}" alt="Copy User ID"
                                            style="width: 18px; height: 18px; cursor: pointer;" id="copyImage">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">Username</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-profile d-flex justify-content-between"
                                    style="border-bottom: 1px solid #b7b7b7;">
                                    <p class="mb-0 fw-semibold">Username</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">Nama Pengguna</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-profile d-flex justify-content-between"
                                    style="border-bottom: 1px solid #b7b7b7;">
                                    <p class="mb-0 fw-semibold">Natasha Putri</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">Alamat Email</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-profile d-flex justify-content-between"
                                    style="border-bottom: 1px solid #b7b7b7;">
                                    <p class="mb-0 fw-semibold">user.user@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">No. Telpon</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-profile d-flex justify-content-between">
                                    <p class="mb-0 fw-semibold" style="color: #987070;">Lengkapi Profile Anda</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">Tanggal Lahir</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-profile d-flex justify-content-between">
                                    <p class="mb-0 fw-semibold" style="color: #987070;">Lengkapi Profile Anda</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">Jenis Kelamin</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-profile d-flex justify-content-between">
                                    <p class="mb-0 fw-semibold" style="color: #987070;">Lengkapi Profile Anda</p>
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
    document.addEventListener('DOMContentLoaded', () => {
        const userIDElement = document.getElementById('userID');
        const copyImage = document.getElementById('copyImage');

        copyImage.addEventListener('click', () => {
            const userID = userIDElement.textContent;
            
            // Copy the userID text to clipboard
            navigator.clipboard.writeText(userID).then(() => {
                // Optional: Notify the user that the ID was copied
                alert('User ID copied to clipboard!');
            }).catch(err => {
                console.error('Could not copy text: ', err);
            });
        });

        // JavaScript to toggle the search form visibility when the icon is clicked
        document.getElementById("search-icon-toggle").addEventListener("click", function() {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });
    });
</script>
@endsection