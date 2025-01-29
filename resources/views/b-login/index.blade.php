@extends('layout.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide container-fluid padding-side" data-bs-ride="carousel"
    data-bs-interval="3000">
    <div class="search d-none d-lg-block d-lg-none me-4 mb-4 w-100" id="search-form">
        <form class="position-relative align-items-center">
            <a href="#" class="position-absolute top-50 start-0 translate-middle-y p-1 ms-3">
                <i class="fa-solid fa-magnifying-glass" style="color: #667479;"></i>
            </a>
            <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2 ps-5"
                placeholder="Search something here!" style="color: #99A2A5; width: 100%; max-width: 400px;" />
        </form>
    </div>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ url('assets/images/slider1.png') }}" class="d-block rounded-5 w-100" alt="..."
                style="max-height: 85vh;" />
        </div>
        <div class="carousel-item">
            <img src="{{ url('assets/images/slider2.png') }}" class="d-block rounded-5 w-100" alt="..."
                style="max-height: 85vh;" />
        </div>
        <div class="carousel-item">
            <img src="{{ url('assets/images/slider3.png') }}" class="d-block rounded-5 w-100" alt="..."
                style="max-height: 85vh;" />
        </div>
    </div>
</div>

<section id="about-us" class="mt-5">
    <div class="container-fluid padding-side" data-aos="fade-up">
        <h3 class="display-5 w-100 text-center fw-semibold">PRODUK BARU</h3>
        <div class="container-fluid mt-5  h-100">
            <div class="row h-100">
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/bl-detailproduct') }}" class="card text-center lightning-card"
                        style="border: none; text-decoration: none; color: inherit">
                        <div class="position-relative image-container">
                            <img src="{{ url('assets/images/produk1.png') }}"
                                class="card-img-top rounded-4 hover-enlarge-img" alt="..." />
                            <div class="heart-icon position-absolute">
                                <div class="heart-circle addtocart">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
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
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/bl-detailproduct') }}" class="card text-center lightning-card"
                        style="border: none; text-decoration: none; color: inherit">
                        <div class="position-relative image-container">
                            <img src="{{ url('assets/images/produk2.png') }}"
                                class="card-img-top rounded-4 hover-enlarge-img" alt="..." />
                            <div class="heart-icon position-absolute">
                                <div class="heart-circle addtocart">
                                    <i class="fas fa-heart"></i>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Button Up Charm</h5>
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
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/bl-detailproduct') }}" class="card text-center lightning-card"
                        style="border: none; text-decoration: none; color: inherit">
                        <div class="position-relative image-container">
                            <img src="{{ url('assets/images/produk3.png') }}"
                                class="card-img-top rounded-4 hover-enlarge-img" alt="..." />
                            <div class="heart-icon position-absolute">
                                <div class="heart-circle addtocart">
                                    <i class="fas fa-heart"></i>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Denim Stripe Vest</h5>
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
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/bl-detailproduct') }}" class="card text-center lightning-card"
                        style="border: none; text-decoration: none; color: inherit">
                        <div class="position-relative image-container">
                            <img src="{{ url('assets/images/produk4.png') }}"
                                class="card-img-top rounded-4 hover-enlarge-img" alt="..." />
                            <div class="heart-icon position-absolute">
                                <div class="heart-circle addtocart">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
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
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-4">
                    <a href="{{ url('/') }}" class="btn btn-arrow btn-custom-width btn-primary mt-3">
                        <span>Lainnya<svg width="18" height="18">
                                <use xlink:href="#arrow-right"></use>
                            </svg></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-2" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-login modal-dialog-centered d-flex justify-content-center">
            <div class="modal-content rounded-4" style="width: 600px">
                <div class="modal-header px-4 mb-0 mt-2">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img src="{{ url('assets/images/logo.png') }}" alt="">
                    </div>
                    <div class="mt-4 px-4">
                        <h5 class="fw-bold">Selamat Datang !!</h5>
                        <p style="color: #595959;">Silakan login untuk melanjutkan
                            Berbelanja</p>
                        <form action="#">
                            <div class="mb-4 position-relative">
                                <input type="text" class="form-control rounded-3 py-2 custom-input" id="email"
                                    placeholder="Alamat Email"
                                    onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                    onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                <label for="email" class="floating-label">Alamat
                                    Email</label>
                            </div>
                            <div class="mb-3 position-relative">
                                <input type="password" class="form-control rounded-3 py-2 custom-input" id="password"
                                    placeholder="Password"
                                    onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                    onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                <label for="password" class="floating-label">Password</label>
                            </div>
                            <div class="text-end mb-3">
                                <a href="#" style="font-size: 12px; color: #66525E;">Lupa
                                    Kata Sandi?</a>
                            </div>
                            <a href="#" id="loginButton" class="btn btn-primary w-100 mb-4">Login</a>
                        </form>
                        <div class="text-center line-container px-5 mb-4">
                            <span class="line"></span>
                            <span class="text">atau</span>
                            <span class="line"></span>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <a href="#" class="d-flex justify-content-center border align-items-center rounded-5"
                                style="width: 340px; height: 50px; border-color: #66525E !important;">
                                <img src="{{ url('assets/images/google.png') }}" alt="" class="me-4">
                                <p class="mb-0 mt-1">Lanjutkan dengan Google</p>
                            </a>
                        </div>
                        <div class="text-center">
                            <p style="color: #a7a7a7;">Belum punya akun? <span style="color: #66525E;"><a href="#"
                                        id="registerLink">Daftar Disini</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="info" class="mt-5">
    <div class="container-fluid" data-aos="fade-up">
        <h3 class="display-5 w-100 text-center fw-semibold">KATEGORI PRODUK</h3>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <a href="{{ Request::route()->getName() === 'index-login' ? route('ktghijab') :
    (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'about-us' ||
        Request::route()->getName() === 'ktghijab' ? route('ktghijab') : route('bl-ktghijab')) }}">
                    <img src="{{ url('assets/images/phijab.png') }}" alt="" class="rectangle-image" />
                    <p class="text-capitalize fw-bold mt-2">Hijab</p>
                </a>
            </div>
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <a href="{{ Request::route()->getName() === 'index-login' ? route('ktghijab') :
    (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'about-us' ||
        Request::route()->getName() === 'ktghijab' ? route('ktghijab') : route('bl-ktghijab')) }}">
                    <img src="{{ url('assets/images/patasan.png') }}" alt="" class="rectangle-image" />
                    <p class="text-capitalize fw-bold mt-2">Atasan</p>
                </a>
            </div>
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <a href="{{ Request::route()->getName() === 'index-login' ? route('ktghijab') :
    (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'about-us' ||
        Request::route()->getName() === 'ktghijab' ? route('ktghijab') : route('bl-ktghijab')) }}">
                    <img src="{{ url('assets/images/pmukenah.png') }}" alt="" class="rectangle-image" />
                    <p class="text-capitalize fw-bold mt-2">Mukenah</p>
                </a>
            </div>
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <a href="{{ Request::route()->getName() === 'index-login' ? route('ktghijab') :
    (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'about-us' ||
        Request::route()->getName() === 'ktghijab' ? route('ktghijab') : route('bl-ktghijab')) }}">
                    <img src="{{ url('assets/images/pbawahan.png') }}" alt="" class="rectangle-image" />
                    <p class="text-capitalize fw-bold mt-2">Bawahan</p>
                </a>
            </div>
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <a href="{{ Request::route()->getName() === 'index-login' ? route('ktghijab') :
    (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'about-us' ||
        Request::route()->getName() === 'ktghijab' ? route('ktghijab') : route('bl-ktghijab')) }}">
                    <img src="{{ url('assets/images/plainnya.png') }}" alt="" class="rectangle-image" />
                    <p class="text-capitalize fw-bold mt-2">Lainnya</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="about-us" class="mt-5">
    <div class="container-fluid padding-side" data-aos="fade-up">
        <h3 class="display-5 w-100 text-center fw-semibold">PRODUK TERLARIS</h3>
        <div class="container-fluid mt-5 h-100">
            <div class="row h-100">
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/bl-detailproduct') }}" class="card text-center lightning-card"
                        style="border: none; text-decoration: none; color: inherit">
                        <div class="position-relative image-container">
                            <img src="{{ url('assets/images/produk5.png') }}"
                                class="card-img-top rounded-4 hover-enlarge-img" alt="..." />
                            <div class="heart-icon position-absolute">
                                <div class="heart-circle addtocart">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
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
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/bl-detailproduct') }}" class="card text-center lightning-card"
                        style="border: none; text-decoration: none; color: inherit">
                        <div class="position-relative image-container">
                            <img src="{{ url('assets/images/produk6.png') }}"
                                class="card-img-top rounded-4 hover-enlarge-img" alt="..." />
                            <div class="heart-icon position-absolute">
                                <div class="heart-circle addtocart">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Button Up Charm</h5>
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
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/bl-detailproduct') }}" class="card text-center lightning-card"
                        style="border: none; text-decoration: none; color: inherit">
                        <div class="position-relative image-container">
                            <img src="{{ url('assets/images/produk7.png') }}"
                                class="card-img-top rounded-4 hover-enlarge-img" alt="..." />
                            <div class="heart-icon position-absolute">
                                <div class="heart-circle addtocart">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Denim Stripe Vest</h5>
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
                <div class="col-6 col-md-3 d-flex justify-content-center">
                    <a href="{{ url('/bl-detailproduct') }}" class="card text-center lightning-card"
                        style="border: none; text-decoration: none; color: inherit">
                        <div class="position-relative image-container">
                            <img src="{{ url('assets/images/produk8.png') }}"
                                class="card-img-top rounded-4 hover-enlarge-img" alt="..." />
                            <div class="heart-icon position-absolute">
                                <div class="heart-circle addtocart">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
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
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-4">
                    <a href="{{ url('/') }}" class="btn btn-arrow btn-custom-width btn-primary mt-3">
                        <span>
                            Lainnya<svg width="18" height="18">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="info" class="mt-5">
    <div class="container-fluid" data-aos="fade-up">
        <h3 class="display-5 w-100 text-center fw-semibold">JAMINAN KAMI</h3>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-4 text-center mb-4 mb-lg-0">
                <img src="{{ url('assets/images/boxtruck.png') }}" alt="" style="height: 153.99px" />
                <p class="text-capitalize fw-bold mt-5">Pengiriman Cepat</p>
            </div>
            <div class="col-md-4 text-center mb-4 mb-lg-0">
                <img src="{{ url('assets/images/kualitas.png') }}" alt="" />
                <p class="text-capitalize fw-bold mt-5">Kualitas Premium</p>
            </div>
            <div class="col-md-4 text-center mb-4 mb-lg-0">
                <img src="{{ url('assets/images/pelayanan.png') }}" alt="" style="height: 153.99px" />
                <p class="text-capitalize fw-bold mt-5">Pelayanan Ramah</p>
            </div>
        </div>
    </div>
</section>

<script>
    // JavaScript to toggle the search form visibility when the icon is clicked
    document.getElementById("search-icon-toggle").addEventListener("click", function () {
        var searchForm = document.getElementById("search-form");
        searchForm.classList.toggle("d-none");
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Pilih semua elemen dengan class 'addtocart'
        const addToCartButtons = document.querySelectorAll(".addtocart");

        addToCartButtons.forEach(function (button) {
            button.addEventListener("click", function (event) {
                // Prevent the default behavior
                event.preventDefault();

                // Show SweetAlert with options "Yes" and "Cancel"
                Swal.fire({
                    title: "Anda Belum Login",
                    text: "Klik Ya untuk melakukan Login",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Ya",
                    cancelButtonText: "Batal",
                    reverseButtons: true,
                    customClass: {
                        confirmButton: 'btn btn-primary custom-confirm-btn',
                        cancelButton: 'btn btn-secondary custom-cancel-btn'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If 'Ya' is clicked, show the login modal
                        const loginModal = document.getElementById("loginModal");
                        if (loginModal) {
                            $('#loginModal').modal('show');
                        }
                    }
                });
            });
        });
    });

</script>
@endsection