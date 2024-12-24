@extends('layout.app')
@section('content')
<section id="cart-item">
    <div class="container-fluid padding-side d-flex">
        <div class="all-cart me-5">
            <h4 class="mb-4 header-section fw-bold">Checkout Produk</h4>
            <div class="address-box py-4 px-4 align-items-center rounded-4">
                <h6 class="fw-bold mb-3">ALAMAT PENGIRIMAN</h6>
                <div id="selectedAddress" class="address-selected mb-4 px-3 py-3 rounded-3 d-none">
                    <h6 class="mb-0 fw-bold"></h6>
                    <p class="mb-0"></p>
                    <p class="mb-0"></p>
                </div>
                <a href="#" id="changeAddress" class="add-address px-3 py-3 rounded-4 fw-semibold"
                    data-bs-toggle="modal" data-bs-target="#addAddressModal">Tambah Alamat</a>
            </div>
            <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable d-flex justify-content-center">
                    <div class="modal-content modal-address py-3 px-3 rounded-4">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x"
                                id="addAddressModalLabel">Daftar Alamat</h5>
                            <button type="button" class="btn-close" style="font-size: 12px;" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <a href="" class="btn btn-primary w-100" data-bs-toggle="modal"
                                data-bs-target="#tambahAlamatModal">Tambah Alamat</a>
                            <div id="addressDisplay" class="address-list">
                                <div
                                    class="d-flex address-item mt-4 px-4 py-4 justify-content-between align-items-center rounded-4">
                                    <div class="address-description me-1">
                                        <h6 class="mb-0 fw-bold">Natasha Putri</h6>
                                        <p class="mb-0">+6281234567890</p>
                                        <p class="mb-0">Jl. Ir. Haji Juanda, Betro, Kec. Sedati, Kabupaten Sidoarjo,
                                            Jawa Timur 61253</p>
                                    </div>
                                    <a href="#"
                                        class="btn btn-primary btn-select-address d-flex justify-content-center align-items-center">Pilih</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                    </div>
                </div>
            </div>
            <div class="modal fade" id="tambahAlamatModal" tabindex="-1" aria-labelledby="tambahAlamatModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered d-flex justify-content-center">
                    <div class="modal-content modal-address px-3 py-3 rounded-4">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x"
                                id="tambahAlamatModalLabel">TAMBAH ALAMAT</h5>
                            <button type="button" class="btn-close" style="font-size: 12px;" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form Section -->
                            <form id="addressForm">
                                <div class="receiver px-4 py-4 rounded-4">
                                    <h6 class="fw-bold mb-4">Penerima</h6>
                                    <!-- Name Receiver Input -->
                                    <div class="mb-4 position-relative">
                                        <input type="text" class="form-control rounded-3 py-2 custom-input"
                                            id="nameReceiver" placeholder="Nama Penerima"
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="nameReceiver" class="floating-label">Nama Penerima</label>
                                        <div class="error-message mb-0" id="nameError"
                                            style="display:none; font-size: 12px; color: red;">Nama Penerima is
                                            required.</div>
                                    </div>
                                    <!-- Phone Receiver Input -->
                                    <div class="mb-0 position-relative">
                                        <input type="text" class="form-control rounded-3 py-2 custom-input"
                                            id="noReceiver" placeholder="No. Hp"
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="noReceiver" class="floating-label">No. Hp</label>
                                        <div class="error-message mb-0" id="phoneError"
                                            style="display:none; font-size: 12px; color: red;">No. Hp is required.</div>
                                    </div>
                                </div>
                                <!-- Additional Address Details -->
                                <div class="receiver px-4 py-4 rounded-4 mt-4">
                                    <h6 class="fw-bold mb-4">Lengkapi Detail Alamat</h6>
                                    <!-- City Input -->
                                    <div class="mb-4 position-relative">
                                        <input type="text" class="form-control rounded-3 py-2 custom-input" id="city"
                                            placeholder="Kota & Kecamatan"
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="city" class="floating-label">Kota & Kecamatan</label>
                                        <div class="error-message mb-0" id="cityError"
                                            style="display:none; font-size: 12px; color: red;">Kota & Kecamatan is
                                            required.</div>
                                    </div>
                                    <!-- Postal Code Input -->
                                    <div class="mb-4 position-relative">
                                        <input type="text" class="form-control rounded-3 py-2 custom-input" id="posCode"
                                            placeholder="Kode Pos"
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="posCode" class="floating-label">Kode Pos</label>
                                        <div class="error-message mb-0" id="postalError"
                                            style="display:none; font-size: 12px; color: red;">Kode Pos is required.
                                        </div>
                                    </div>
                                    <!-- Full Address Input -->
                                    <div class="mb-0 position-relative">
                                        <textarea class="form-control rounded-3 py-2 custom-input" id="fullAddress"
                                            placeholder="Alamat Lengkap"
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');"></textarea>
                                        <label for="fullAddress" class="floating-label">Alamat Lengkap</label>
                                        <div class="error-message mb-0" id="addressError"
                                            style="display:none; font-size: 12px; color: red;">Alamat Lengkap is
                                            required.</div>
                                    </div>
                                </div>
                                <!-- Agreement Checkbox -->
                                <div class="d-flex agreement align-items-center mt-3">
                                    <input type="checkbox" class="custom-checkbox me-3" id="agreementCheckbox">
                                    <p class="mb-0">Saya Menyetuju Syarat & Ketentuan serta Kebijakan Privasi pengaturan
                                        alamat di Fmd.Id</p>
                                </div>
                                <!-- Add Address Button -->
                                <button type="button" class="btn btn-primary w-100 mt-3" id="addAddressButton"
                                    onclick="addAddress()">Tambah Alamat</button>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Simpan Alamat</button>
                                </div> -->
                    </div>
                </div>
            </div>
            <div class="all-item px-5 py-5 mt-5 rounded-4">
                <h6 class="fw-bold">PESANAN (5)</h6>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart1.png')}}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                    </div>
                </div>
                <div class="divider-line"></div>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart1.png')}}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                    </div>
                </div>
                <div class="divider-line"></div>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart1.png')}}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                    </div>
                </div>
                <div class="divider-line"></div>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart2.png')}}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Serenade Stripes</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0">Warna : Pink</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 185.000</p>
                    </div>
                </div>
                <div class="divider-line"></div>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart3.png')}}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Scuba Slim-Fit Pants</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 115.000</p>
                    </div>
                </div>
                <div class="divider-line"></div>
                <div class="dropdown-container rounded-3" onclick="toggleDropdown()">
                    <div class="dropdown-delivery px-4 py-3 d-flex justify-content-between align-items-center rounded-3"
                        id="dropdownContent">
                        <h6 class="mb-0">Pilih Pengiriman</h6>
                        <i class="fa-solid fa-caret-down" style="font-size: 18px;" id="dropdown-icon"></i>
                    </div>
                    <div class="delivery-options-content" id="deliveryOptionsContent">
                        <div class="divider-line-delivery mt-0"></div>
                        <div class="delivery item px-2 py-2 d-flex justify-content-between align-items-center"
                            onclick="selectDelivery('Reguler', 'Estimasi Tiba 1 - 3 Nov', 'Rp. 25.000')">
                            <div class="expedition">
                                <p class="fw-bold mb-0">Reguler</p>
                                <p class="mb-0">Estimasi Tiba 1 - 3 Nov</p>
                            </div>
                            <p class="fw-bold mb-0">Rp. 25.000</p>
                        </div>
                        <div class="divider-line-delivery"></div>
                        <div class="delivery item px-2 py-2 d-flex justify-content-between align-items-center"
                            onclick="selectDelivery('Express', 'Estimasi Tiba 31 Okt - 1 Nov', 'Rp. 27.000')">
                            <div class="expedition">
                                <p class="fw-bold mb-0">Express</p>
                                <p class="mb-0">Estimasi Tiba 31 Okt - 1 Nov</p>
                            </div>
                            <p class="fw-bold mb-0">Rp. 27.000</p>
                        </div>
                        <div class="divider-line-delivery"></div>
                        <div class="delivery item px-2 py-2 d-flex justify-content-between align-items-center"
                            onclick="selectDelivery('Kargo', 'Estimasi Tiba 3 - 7 Nov', 'Rp. 17.000')">
                            <div class="expedition">
                                <p class="fw-bold mb-0">Kargo</p>
                                <p class="mb-0">Estimasi Tiba 3 - 7 Nov</p>
                            </div>
                            <p class="fw-bold mb-0">Rp. 17.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="summary-cart cart-box px-3 py-3 rounded-4">
            <h5 class="fw-bold">Ringkasan Belanja</h5>
            <div class="divider-line mt-3 mb-3"></div>
            <div class="d-flex justify-content-between">
                <p id="total-items">Total Harga (0 Barang)</p>
                <h5 id="total-price">Rp. 0</h5>
            </div>
            <div class="d-flex justify-content-between">
                <p>Biaya Pengiriman</p>
                <h5 id="shipping-cost">Rp. 0</h5>
            </div>
            <div class="d-flex justify-content-between">
                <p>Voucher Diskon</p>
                <h5 id="discount-voucher">-Rp. 0</h5>
            </div>
            <div class="divider-line mt-0"></div>
            <div class="d-flex justify-content-between mt-4">
                <p>Total Belanja</p>
                <h5 id="final-total">Rp. 0</h5>
            </div>
            <!-- Button to trigger modal -->
            <a href="#" class="btn btn-primary mt-2 w-100 rounded-4" data-bs-toggle="modal"
                data-bs-target="#paymentModal">Pilih Pembayaran</a>

            <!-- Modal -->
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered d-flex justify-content-center">
                    <div class="modal-content modal-payment rounded-4 px-3 py-3">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x"
                                id="paymentModalLabel">Pilih Pembayaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="payment-box px-3 py-3 rounded-3">
                                <h5 class="fw-bold">Metode Pembayaran</h5>
                                <div class="d-flex px-2 py-4 justify-content-between align-items-center">
                                    <div class="d-flex payment align-items-center">
                                        <img src="{{ url('assets/images/bri.png')}}" alt="" class="me-5">
                                        <p class="mb-0 fw-semibold">BRI Virtual Account</p>
                                    </div>
                                    <input class="form-check-input custom-radio px-0 py-0" type="radio"
                                        name="radioPayment" id="radioPayment">
                                </div>
                                <div class="d-flex px-2 py-4 justify-content-between align-items-center">
                                    <div class="d-flex payment align-items-center">
                                        <img src="{{ url('assets/images/bca.png')}}" alt="" class="me-5">
                                        <p class="mb-0 fw-semibold">BCA Virtual Account</p>
                                    </div>
                                    <input class="form-check-input custom-radio px-0 py-0" type="radio"
                                        name="radioPayment" id="radioPayment">
                                </div>
                                <div class="d-flex px-2 py-4 justify-content-between align-items-center">
                                    <div class="d-flex payment align-items-center">
                                        <img src="{{ url('assets/images/bni.png')}}" alt="" class="me-5">
                                        <p class="mb-0 fw-semibold">BNI Virtual Account</p>
                                    </div>
                                    <input class="form-check-input custom-radio px-0 py-0" type="radio"
                                        name="radioPayment" id="radioPayment">
                                </div>
                                <div class="d-flex px-2 py-4 justify-content-between align-items-center">
                                    <div class="d-flex payment align-items-center">
                                        <img src="{{ url('assets/images/mandiri.png')}}" alt="" class="me-5">
                                        <p class="mb-0 fw-semibold">Mandiri Virtual Account</p>
                                    </div>
                                    <input class="form-check-input custom-radio px-0 py-0" type="radio"
                                        name="radioPayment" id="radioPayment">
                                </div>
                            </div>
                            <div class="payment-box px-3 py-3 rounded-3 mt-3">
                                <h5 class="fw-bold">Ringkasan Pembayaran</h5>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <h6 class="mb-0 fw-semibold">Total Belanja</h6>
                                    <h6 class="mb-0" id="payment-total" style="color: #66525E;">Rp. 0</h6>
                                </div>
                            </div>
                            <div class="px-0 py-0 d-flex justify-content-between align-items-center mt-4">
                                <div class="total-bill">
                                    <h6 style="color: #8E8E93;">Total Tagihan</h6>
                                    <h5 class="fw-bold" id="bill-total">Rp. 0</h5>
                                </div>
                                <a href="" class="btn btn-primary d-flex justify-content-center align-items-center"
                                    style="height: 40px;">Bayar</a>
                            </div>
                        </div>
                        <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Confirm Payment</button>
                                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="toastBox"></div>
@endsection
