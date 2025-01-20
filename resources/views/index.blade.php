@extends('layout.app')
@section('content')
    <div
        id="carouselExampleIndicators"
        class="carousel slide container-fluid padding-side"
        data-bs-ride="carousel"
        data-bs-interval="3000"
    >
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
        <div class="carousel-indicators">
        <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
        ></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img
            src="{{ url('assets/images/slider1.png') }}"
            class="d-block rounded-5 w-100"
            alt="..."
            style="max-height: 85vh;"
            />
        </div>
        <div class="carousel-item">
            <img
            src="{{ url('assets/images/slider2.png') }}"
            class="d-block rounded-5 w-100"
            alt="..."
            style="max-height: 85vh;"
            />
        </div>
        <div class="carousel-item">
            <img
            src="{{ url('assets/images/slider3.png') }}"
            class="d-block rounded-5 w-100"
            alt="..."
            style="max-height: 85vh;"
            />
        </div>
        </div>
    </div>

    <section id="about-us" class="mt-5">
        <div class="container-fluid padding-side" data-aos="fade-up">
        <h3 class="display-5 text-center fw-semibold col-lg-4 offset-lg-4">
            PRODUK BARU
        </h3>
        <div class="container-fluid mt-5  h-100">
            <div class="row h-100">
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <a
                href="#"
                class="card text-center lightning-card"
                style="border: none; text-decoration: none; color: inherit"
                >
                <div class="position-relative image-container">
                    <img
                    src="{{ url('assets/images/produk1.png') }}"
                    class="card-img-top rounded-4 hover-enlarge-img"
                    alt="..."
                    />
                    <div class="heart-icon position-absolute">
                    <div class="heart-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Rose Detail Classic</h5>
                    <div class="star-rating">
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span class="fa fa-star" style="color: #fcaf23"></span>
                    <span class="ms-1">5.0/5</span>
                    </div>
                    <p class="card-text">Rp. 185.000</p>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <a
                href="#"
                class="card text-center lightning-card"
                style="border: none; text-decoration: none; color: inherit"
                >
                <div class="position-relative image-container">
                    <img
                    src="{{ url('assets/images/produk2.png') }}"
                    class="card-img-top rounded-4 hover-enlarge-img"
                    alt="..."
                    />
                    <div class="heart-icon position-absolute">
                    <div class="heart-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Button Up Charm</h5>
                    <div class="star-rating">
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span class="fa fa-star" style="color: #fcaf23"></span>
                    <span class="ms-1">5.0/5</span>
                    </div>
                    <p class="card-text">Rp. 185.000</p>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <a
                href="#"
                class="card text-center lightning-card"
                style="border: none; text-decoration: none; color: inherit"
                >
                <div class="position-relative image-container">
                    <img
                    src="{{ url('assets/images/produk3.png') }}"
                    class="card-img-top rounded-4 hover-enlarge-img"
                    alt="..."
                    />
                    <div class="heart-icon position-absolute">
                    <div class="heart-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Denim Stripe Vest</h5>
                    <div class="star-rating">
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span class="fa fa-star" style="color: #fcaf23"></span>
                    <span class="ms-1">5.0/5</span>
                    </div>
                    <p class="card-text">Rp. 185.000</p>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <a
                href="#"
                class="card text-center lightning-card"
                style="border: none; text-decoration: none; color: inherit"
                >
                <div class="position-relative image-container">
                    <img
                    src="{{ url('assets/images/produk4.png') }}"
                    class="card-img-top rounded-4 hover-enlarge-img"
                    alt="..."
                    />
                    <div class="heart-icon position-absolute">
                    <div class="heart-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Rose Detail Classic</h5>
                    <div class="star-rating">
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
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
                <a
                href="{{ route('produkbaru') }}"
                class="btn btn-arrow btn-custom-width btn-primary mt-3"
                >
                <span
                    >Lainnya<svg width="18" height="18">
                    <use xlink:href="#arrow-right"></use></svg
                ></span>
                </a>
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
                <img src="{{ url('assets/images/phijab.png') }}" alt="" class="rectangle-image" />
                <p class="text-capitalize fw-bold mt-2">Hijab</p>
            </div>
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <img src="{{ url('assets/images/patasan.png') }}" alt="" class="rectangle-image" />
                <p class="text-capitalize fw-bold mt-2">Atasan</p>
            </div>
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <img src="{{ url('assets/images/pmukenah.png') }}" alt="" class="rectangle-image" />
                <p class="text-capitalize fw-bold mt-2">Mukenah</p>
            </div>
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <img src="{{ url('assets/images/pbawahan.png') }}" alt="" class="rectangle-image" />
                <p class="text-capitalize fw-bold mt-2">Bawahan</p>
            </div>
            <div class="col-md-2 text-center mb-4 mb-lg-0">
                <img src="{{ url('assets/images/plainnya.png') }}" alt="" class="rectangle-image" />
                <p class="text-capitalize fw-bold mt-2">Lainnya</p>
            </div>
        </div>
        </div>
    </section>

    <section id="about-us" class="mt-5">
        <div class="container-fluid padding-side" data-aos="fade-up">
        <h3 class="display-6 text-center fw-semibold col-lg-4 offset-lg-4">
            PRODUK TERLARIS
        </h3>
        <div class="container-fluid mt-5 h-100">
            <div class="row h-100">
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <a
                href="{{ Request::route()->getName() === 'index-login' ? route('detailproduct') : route('bl-detailproduct') }}"
                class="card text-center lightning-card"
                style="border: none; text-decoration: none; color: inherit"
                >
                <div class="position-relative image-container">
                    <img
                    src="{{ url('assets/images/produk5.png') }}"
                    class="card-img-top rounded-4 hover-enlarge-img"
                    alt="..."
                    />
                    <div class="heart-icon position-absolute">
                    <div class="heart-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Rose Detail Classic</h5>
                    <div class="star-rating">
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span class="fa fa-star" style="color: #fcaf23"></span>
                    <span class="ms-1">5.0/5</span>
                    </div>
                    <p class="card-text">Rp. 185.000</p>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <a
                href="#"
                class="card text-center lightning-card"
                style="border: none; text-decoration: none; color: inherit"
                >
                <div class="position-relative image-container">
                    <img
                    src="{{ url('assets/images/produk6.png') }}"
                    class="card-img-top rounded-4 hover-enlarge-img"
                    alt="..."
                    />
                    <div class="heart-icon position-absolute">
                    <div class="heart-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Button Up Charm</h5>
                    <div class="star-rating">
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span class="fa fa-star" style="color: #fcaf23"></span>
                    <span class="ms-1">5.0/5</span>
                    </div>
                    <p class="card-text">Rp. 185.000</p>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <a
                href="#"
                class="card text-center lightning-card"
                style="border: none; text-decoration: none; color: inherit"
                >
                <div class="position-relative image-container">
                    <img
                    src="{{ url('assets/images/produk7.png') }}"
                    class="card-img-top rounded-4 hover-enlarge-img"
                    alt="..."
                    />
                    <div class="heart-icon position-absolute">
                    <div class="heart-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Denim Stripe Vest</h5>
                    <div class="star-rating">
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span class="fa fa-star" style="color: #fcaf23"></span>
                    <span class="ms-1">5.0/5</span>
                    </div>
                    <p class="card-text">Rp. 185.000</p>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-3 d-flex justify-content-center">
                <a
                href="#"
                class="card text-center lightning-card"
                style="border: none; text-decoration: none; color: inherit"
                >
                <div class="position-relative image-container">
                    <img
                    src="{{ url('assets/images/produk8.png') }}"
                    class="card-img-top rounded-4 hover-enlarge-img"
                    alt="..."
                    />
                    <div class="heart-icon position-absolute">
                    <div class="heart-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Rose Detail Classic</h5>
                    <div class="star-rating">
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
                    <span
                        class="fa fa-star checked"
                        style="color: #fcaf23"
                    ></span>
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
                <a
                href="{{ route('produkterlaris') }}"
                class="btn btn-arrow btn-custom-width btn-primary mt-3"
                >
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
        document.getElementById("search-icon-toggle").addEventListener("click", function() {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });
    </script>
@endsection