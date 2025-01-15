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
        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-2" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-login modal-dialog-centered d-flex justify-content-center">
                <div class="modal-content rounded-4" style="width: 600px">
                    <div class="modal-header px-4 mb-0 mt-2">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('assets/images/logo.png') }}" alt="">
                        </div>
                        <div class="mt-4 px-4">
                            <h5 class="fw-bold">Selamat Datang !!</h5>
                            <p style="color: #595959;">Silakan login untuk melanjutkan Berbelanja</p>
                            <form action="#">
                                <div class="mb-4 position-relative">
                                    <input type="text" class="form-control rounded-3 py-2 custom-input" id="email" placeholder="Alamat Email" 
                                        onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                        onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="email" class="floating-label">Alamat Email</label>
                                </div>
                                <div class="mb-3 position-relative">
                                    <input type="password" class="form-control rounded-3 py-2 custom-input" id="password" placeholder="Password" 
                                        onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                        onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="password" class="floating-label">Password</label>
                                </div>
                                <div class="text-end mb-3">
                                    <a href="#" style="font-size: 12px; color: #66525E;">Lupa Kata Sandi?</a>
                                </div>
                                <a href="#" id="loginButton" class="btn btn-primary w-100 mb-4">Login</a>                     
                            </form>
                            <div class="text-center line-container px-5 mb-4">
                                <span class="line"></span>
                                <span class="text">atau</span>
                                <span class="line"></span>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <a href="#" class="d-flex justify-content-center border align-items-center rounded-5" style="width: 340px; height: 50px; border-color: #66525E !important;">
                                    <img src="{{ url('assets/images/google.png') }}" alt="" class="me-4">
                                    <p class="mb-0 mt-1">Lanjutkan dengan Google</p>
                                </a>
                            </div>
                            <div class="text-center">
                                <p style="color: #a7a7a7;">Belum punya akun? <span style="color: #66525E;"><a href="#" id="registerLink">Daftar Disini</a></span></p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Register Modal -->
        <div class="modal fade" id="registerModal" tabindex="-2" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-login modal-dialog-centered d-flex justify-content-center">
                <div class="modal-content rounded-4" style="width: 600px">
                    <div class="modal-header px-4 mb-0 mt-2">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('assets/images/logo.png') }}" alt="">
                        </div>
                        <div class="mt-4 px-4">
                            <h5 class="fw-bold">Daftar</h5>
                            <p style="color: #595959;">Buat akun untuk mulai menjelajah !</p>
                            <form action="#" id="registrationForm">
                                <div class="mb-4 position-relative">
                                    <input type="text" class="form-control rounded-3 py-2 custom-input" id="username" placeholder="Username"
                                        onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                        onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                    <label for="username" class="floating-label">Username</label>
                                    <small class="text-danger error-message d-none">Username tidak boleh kosong</small>
                                </div>
                                <div class="mb-4 position-relative">
                                    <input type="text" class="form-control rounded-3 py-2 custom-input" id="email" placeholder="Alamat Email"
                                        onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                        onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                    <label for="email" class="floating-label">Alamat Email</label>
                                    <small class="text-danger error-message d-none">Alamat Email tidak boleh kosong</small>
                                </div>
                                <div class="mb-3 position-relative">
                                    <input type="password" class="form-control rounded-3 py-2 custom-input" id="password" placeholder="Password"
                                        onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                        onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                    <label for="password" class="floating-label">Password</label>
                                    <small class="text-danger error-message d-none">Password tidak boleh kosong</small>
                                </div>
                                <!-- Agreement Checkbox -->
                                <div class="agreement-container mt-3 mb-3">
                                    <div class="d-flex agreement align-items-center">
                                        <input type="checkbox" class="custom-checkbox me-3" id="agreementCheckbox">
                                        <p class="mb-0">Dengan membuat akun, Anda harus menyetujui syarat & ketentuan kami</p>
                                    </div>
                                    <small class="text-danger error-message d-none">Anda harus menyetujui syarat & ketentuan</small>
                                </div>                                
                                <button type="button" id="registerButton" class="btn btn-primary w-100 mb-4">Daftar</button>
                            </form>
                            <div class="text-center line-container px-5 mb-4">
                                <span class="line"></span>
                                <span class="text">atau</span>
                                <span class="line"></span>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <a href="#" class="d-flex justify-content-center border align-items-center rounded-5" style="width: 340px; height: 50px; border-color: #66525E !important;">
                                    <img src="{{ url('assets/images/google.png') }}" alt="" class="me-4">
                                    <p class="mb-0 mt-1">Lanjutkan dengan Google</p>
                                </a>
                            </div>
                            <div class="text-center">
                                <p style="color: #a7a7a7;">Sudah punya akun? <span style="color: #66525E;"><a href="#" id="loginLink">Login Disini</a></span></p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- OTP Modal -->
        <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-otp modal-dialog-centered d-flex justify-content-center align-item-center">
                <div class="modal-content rounded-4">
                    <div class="modal-header px-4 mb-0 mt-2">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="px-2 py-2" style="background-color: #D0C9CD; border-radius: 100%; width: fit-content;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 48 48" style="color: #66525E;">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M24 43.5c12.764-5.885 14.86-15.67 14.86-21.982V16.91S33.43 14.286 24 14.286S9.14 16.909 9.14 16.909v4.61c0 6.31 2.096 16.096 14.86 21.981"/>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M32.013 14.96v-2.447a8.013 8.013 0 0 0-16.026 0v2.448m9.837 12.109a3.79 3.79 0 1 0-3.648 0a5.67 5.67 0 0 0-3.849 5.368h11.346a5.67 5.67 0 0 0-3.849-5.367"/>
                                </svg>
                            </div>
                            <h5 class="mt-3 fw-bold">Masukkan Kode OTP!</h5>
                            <p class="mt-1">Kode verifikasi telah dikirim melalui email Anda!</p>
                            <div class="otp-field mb-4">
                                <input type="number" maxlength="1" class="otp-input" />
                                <input type="number" maxlength="1" class="otp-input" disabled />
                                <input type="number" maxlength="1" class="otp-input" disabled />
                                <input type="number" maxlength="1" class="otp-input" disabled />
                                <input type="number" maxlength="1" class="otp-input" disabled />
                            </div>
                            <p class="mt-1" style="color: #8C8C8C;">Belum Menerima Kode OTP? <span style="color: #66525E;"><a href="#">Kirim Ulang</a></span></p>
                            <a href="{{ route('index-login') }}" class="btn btn-primary d-flex justify-content-center align-items-center mt-1 mb-2" style="width: 250px;">Verifikasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                href="{{ url('/detailproduct') }}"
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

        document.getElementById('loginButton').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior
        
            // Close the login modal
            let loginModalElement = document.getElementById('loginModal');
            let loginModalInstance = bootstrap.Modal.getInstance(loginModalElement); // Get existing modal instance
            if (loginModalInstance) {
                loginModalInstance.hide();
            }
        
            // Show the otpModal with options to close when clicking outside
            let otpModalElement = document.getElementById('otpModal');
            let otpModalInstance = new bootstrap.Modal(otpModalElement, {
                backdrop: true, // Allow closing when clicking outside
                keyboard: true  // Allow closing with "Esc" key
            });
            otpModalInstance.show();
        });
        
        document.querySelectorAll('.otp-input').forEach((input, index, inputs) => {
            input.addEventListener('input', function (e) {
                const value = e.target.value;
                
                // Allow only one digit
                if (value.length > 1) {
                    e.target.value = value.charAt(0); // Keep only the first character
                }
    
                // Enable the next input and focus on it
                if (value && index < inputs.length - 1) {
                    inputs[index + 1].disabled = false;
                    inputs[index + 1].focus();
                }
            });
    
            input.addEventListener('keydown', function (e) {
                // Move to the previous input on Backspace
                if (e.key === 'Backspace' && e.target.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
        document.getElementById('registerLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
    
            // Close the login modal
            const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
            if (loginModal) {
                loginModal.hide();
            }
    
            // Show the register modal
            const registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
            registerModal.show();
        }); 

        document.getElementById('loginLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
    
            // Close the register modal
            const registerModal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
            if (registerModal) {
                registerModal.hide();
            }
    
            // Show the login modal
            const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        });

        document.getElementById('registerButton').addEventListener('click', function () {
            let isValid = true;
            const inputs = document.querySelectorAll('#registrationForm .form-control');
            const checkbox = document.getElementById('agreementCheckbox');
            const checkboxError = checkbox.nextElementSibling.nextElementSibling; // Error message
            
            inputs.forEach(input => {
                const errorMessage = input.nextElementSibling.nextElementSibling; // Find the small element
                if (!input.value.trim()) {
                    isValid = false;
                    errorMessage.classList.remove('d-none');
                    input.classList.add('border-danger');
                } else {
                    errorMessage.classList.add('d-none');
                    input.classList.remove('border-danger');
                }
            });
    
            // Check if the checkbox is checked
            if (!checkbox.checked) {
                isValid = false;
                console.log("Checkbox not checked"); // Debugging log
                checkboxError.classList.remove('d-none'); // Show error
            } else {
                checkboxError.classList.add('d-none'); // Hide error
            }
    
            if (isValid) {
                alert('Form is valid. Proceed to registration.');
            }
        });
    </script>
@endsection