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
                    <img src="{{ url('assets/images/profile.png') }}" alt="" class="rounded-5 me-3">
                    <h6 class="fw-bold mb-0" style="color: #66525E;">Natasha Putri</h6>
                </div>
                <div class="divider-line-delivery mt-3"></div>
                <a href="profile.html">
                    <div class="items-sidebar d-flex align-items-center mt-2 py-1">
                        <img src="{{ url('assets/images/profilesidebar.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Profil Saya</p>
                    </div>
                </a>
                <a href="favorite.html">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/favorite.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Favorite Saya</p>
                    </div>
                </a>
                <div class="divider-line"></div>
                <a href="order.html">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/ordericon.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Pesanan Saya</p>
                    </div>
                </a>
                <a href="add-address.html">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/location.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Lokasi Saya</p>
                    </div>
                </a>
            </div>
            <div id="edit-profile-content" class="px-4 px-md-4 py-4 rounded-4">
                <h5 class="fw-bold" style="color: #987070;">Favorite Saya</h5>
                <div class="custom-grid-container mt-5 px-md-3 w-100">
                    <div class="favorite-box px-4 py-3 rounded-4 mb-3 h-100">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="detailproduct.html" class="text-center lightning-card" style="border: none; text-decoration: none; color: inherit;">
                                <div class="position-relative image-container">
                                    <img src="{{ url('assets/images/fav1.png') }}" class="card-img-top rounded-4 hover-enlarge-img" alt="..."/>
                                </div>
                                <div class="card-body mt-4">
                                    <h5 class="card-title fw-semibold">Layered Stripes</h5>
                                    <div class="star-rating">
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star" style="color: #fcaf23"></span>
                                        <span class="ms-1">5.0/5</span>
                                    </div>
                                    <p class="card-text">Rp. 185.000</p>
                                </div>
                            </a>
                        </div>
                        <div class="mt-auto d-md-none">
                            <a href="#" class="btn btn-primary d-flex align-items-center justify-content-center w-100" id="addtocart" style="height: 40px; border-radius: 12px;">
                                <img src="{{ url('assets/images/carticon2.png') }}" alt="Cart Icon" class="me-2">
                                <span style="font-size: 12px;">Masukan Keranjang</span>
                            </a>
                        </div>
                    </div>
                    <div class="favorite-box px-4 py-3 rounded-4 mb-3 h-100">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="detailproduct.html" class="text-center lightning-card" style="border: none; text-decoration: none; color: inherit;">
                                <div class="position-relative image-container">
                                    <img src="{{ url('assets/images/fav2.png') }}" class="card-img-top rounded-4 hover-enlarge-img" alt="..."/>
                                </div>
                                <div class="card-body mt-4">
                                    <h5 class="card-title fw-semibold">Hijab Segitiga Inner</h5>
                                    <div class="star-rating">
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star" style="color: #fcaf23"></span>
                                        <span class="ms-1">5.0/5</span>
                                    </div>
                                    <p class="card-text">Rp. 65.000</p>
                                </div>
                            </a>
                        </div>
                        <div class="mt-auto d-md-none">
                            <a href="#" class="btn btn-primary d-flex align-items-center justify-content-center w-100" id="addtocart" style="height: 40px; border-radius: 12px;">
                                <img src="{{ url('assets/images/carticon2.png') }}" alt="Cart Icon" class="me-2">
                                <span style="font-size: 12px;">Masukan Keranjang</span>
                            </a>
                        </div>
                    </div>
                    <div class="favorite-box px-4 py-3 rounded-4 mb-3 h-100">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="detailproduct.html" class="text-center lightning-card" style="border: none; text-decoration: none; color: inherit;">
                                <div class="position-relative image-container">
                                    <img src="{{ url('assets/images/fav3.png') }}" class="card-img-top rounded-4 hover-enlarge-img" alt="..."/>
                                </div>
                                <div class="card-body mt-4">
                                    <h5 class="card-title fw-semibold">Rose Detail Classic</h5>
                                    <div class="star-rating">
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star checked" style="color: #fcaf23"></span>
                                        <span class="fa fa-star" style="color: #fcaf23"></span>
                                        <span class="ms-1">5.0/5</span>
                                    </div>
                                    <p class="card-text">Rp. 185.000</p>
                                </div>
                            </a>
                        </div>
                        <div class="mt-auto d-md-none">
                            <a href="#" class="btn btn-primary d-flex align-items-center justify-content-center w-100" id="addtocart" style="height: 40px; border-radius: 12px;">
                                <img src="{{ url('assets/images/carticon2.png') }}" alt="Cart Icon" class="me-2">
                                <span style="font-size: 12px;">Masukan Keranjang</span>
                            </a>
                        </div>
                    </div>
                </div>                                                
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btn-close').forEach(button => {
            button.addEventListener('click', function () {
                // Remove the closest favorite-box element
                const favoriteBox = this.closest('.favorite-box');
                if (favoriteBox) {
                    favoriteBox.remove();
                    alert('Item deleted successfully!');
                }
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