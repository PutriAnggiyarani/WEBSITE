@extends('layout.app')
@section('content')
<section id="cart-item" class="container-fluid padding-side ">
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
    <h4 class="mb-4 header-section fw-bold">Checkout Produk</h4>
    <div class="checkout-container d-flex d-flex flex-column flex-md-row">
        <div class="all-cart me-md-5">
            <div class="address-box py-4 px-4 align-items-center rounded-4">
                <h6 class="fw-bold mb-3">ALAMAT PENGIRIMAN</h6>
                <div id="selectedAddress" class="address-selected mb-4 px-3 py-3 rounded-3 d-none">
                    <h6 class="mb-0 fw-bold"></h6>
                    <p class="mb-0"></p>
                    <p class="mb-0"></p>
                </div>
                <a href="#" id="changeAddress" class="add-address px-3 py-3 rounded-4 fw-semibold" data-bs-toggle="modal" data-bs-target="#addAddressModal">Tambah Alamat</a>
            </div>
            <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable d-flex justify-content-center">
                    <div class="modal-content modal-address py-3 px-3 rounded-4">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x" id="addAddressModalLabel">Daftar Alamat</h5>
                            <button type="button" class="btn-close" style="font-size: 12px;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>                                  
                        <div class="modal-body">
                            <a href="" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#tambahAlamatModal">Tambah Alamat</a>
                            <div id="addressDisplay" class="address-list">
                                <div class="d-flex address-item mt-4 px-4 py-4 justify-content-between align-items-center rounded-4">
                                    <div class="address-description me-1">
                                        <h6 class="mb-0 fw-bold">Natasha Putri</h6>
                                        <p class="mb-0">+6281234567890</p>
                                        <p class="mb-0">Jl. Ir. Haji Juanda, Betro, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253</p>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-select-address d-flex justify-content-center align-items-center">Pilih</a>
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
            <div class="modal fade" id="tambahAlamatModal" tabindex="-1" aria-labelledby="tambahAlamatModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered d-flex justify-content-center">
                    <div class="modal-content modal-address px-3 py-3 rounded-4">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x" id="tambahAlamatModalLabel">TAMBAH ALAMAT</h5>
                            <button type="button" class="btn-close" style="font-size: 12px;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form Section -->
                            <form id="addressForm">
                                <div class="receiver px-4 py-4 rounded-4">
                                    <h6 class="fw-bold mb-4">Penerima</h6>
                                    <!-- Name Receiver Input -->
                                    <div class="mb-4 position-relative">
                                        <input type="text" class="form-control rounded-3 py-2 custom-input" id="nameReceiver" placeholder="Nama Penerima" 
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="nameReceiver" class="floating-label">Nama Penerima</label>
                                        <div class="error-message mb-0" id="nameError" style="display:none; font-size: 12px; color: red;">Nama Penerima is required.</div>
                                    </div>
                                    <!-- Phone Receiver Input -->
                                    <div class="mb-0 position-relative">
                                        <input type="text" class="form-control rounded-3 py-2 custom-input" id="noReceiver" placeholder="No. Hp" 
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="noReceiver" class="floating-label">No. Hp</label>
                                        <div class="error-message mb-0" id="phoneError" style="display:none; font-size: 12px; color: red;">No. Hp is required.</div>
                                    </div>
                                </div>
                                <!-- Additional Address Details -->
                                <div class="receiver px-4 py-4 rounded-4 mt-4">
                                    <h6 class="fw-bold mb-4">Lengkapi Detail Alamat</h6>
                                    <!-- City Input -->
                                    <div class="mb-4 position-relative">
                                        <input type="text" class="form-control rounded-3 py-2 custom-input" id="city" placeholder="Kota & Kecamatan" 
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="city" class="floating-label">Kota & Kecamatan</label>
                                        <div class="error-message mb-0" id="cityError" style="display:none; font-size: 12px; color: red;">Kota & Kecamatan is required.</div>
                                    </div>
                                    <!-- Postal Code Input -->
                                    <div class="mb-4 position-relative">
                                        <input type="text" class="form-control rounded-3 py-2 custom-input" id="posCode" placeholder="Kode Pos" 
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                        <label for="posCode" class="floating-label">Kode Pos</label>
                                        <div class="error-message mb-0" id="postalError" style="display:none; font-size: 12px; color: red;">Kode Pos is required.</div>
                                    </div>
                                    <!-- Full Address Input -->
                                    <div class="mb-0 position-relative">
                                        <textarea class="form-control rounded-3 py-2 custom-input" id="fullAddress" placeholder="Alamat Lengkap" 
                                            onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                            onblur="this.placeholder = this.getAttribute('data-placeholder');"></textarea>
                                        <label for="fullAddress" class="floating-label">Alamat Lengkap</label>
                                        <div class="error-message mb-0" id="addressError" style="display:none; font-size: 12px; color: red;">Alamat Lengkap is required.</div>
                                    </div>
                                </div>
                                <!-- Agreement Checkbox -->
                                <div class="d-flex agreement align-items-center mt-3">
                                    <div class="d-flex justify-content-center">
                                        <input type="checkbox" class="custom-checkbox me-3" id="agreementCheckbox">
                                    </div>
                                    <p class="mb-0">Saya Menyetuju Syarat & Ketentuan serta Kebijakan Privasi pengaturan alamat di Fmd.Id</p>
                                </div>
                                <!-- Add Address Button -->
                                <button type="button" class="btn btn-primary w-100 mt-3" id="addAddressButton" onclick="addAddress()">Tambah Alamat</button>
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
                    <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                    </div>                                                              
                </div>
                <div class="divider-line"></div>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                    </div>                                                              
                </div>
                <div class="divider-line"></div>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                    </div>                                                              
                </div>
                <div class="divider-line"></div>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart2.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Serenade Stripes</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Pink</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 185.000</p>
                    </div>                                                              
                </div>
                <div class="divider-line"></div>
                <div class="d-flex py-2 px-3 align-items-center rounded-4">
                    <img src="{{ url('assets/images/cart3.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Scuba Slim-Fit Pants</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity ms-auto">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 115.000</p>
                    </div>                                                              
                </div>
                <div class="divider-line"></div>
                <div class="dropdown-container rounded-3" onclick="toggleDropdown()">
                    <div class="dropdown-delivery px-4 py-3 d-flex justify-content-between align-items-center rounded-3" id="dropdownContent">
                        <h6 class="mb-0">Pilih Pengiriman</h6>
                        <i class="fa-solid fa-caret-down" style="font-size: 18px;" id="dropdown-icon"></i>
                    </div>
                    <div class="delivery-options-content" id="deliveryOptionsContent">
                        <div class="divider-line-delivery mt-0"></div>
                        <div class="delivery item px-2 py-2 d-flex justify-content-between align-items-center" onclick="selectDelivery('Reguler', 'Estimasi Tiba 1 - 3 Nov', 'Rp. 25.000')">
                            <div class="expedition">
                                <p class="fw-bold mb-0 type-expedition">Reguler</p>
                                <p class="mb-0">Estimasi Tiba 1 - 3 Nov</p>
                            </div>
                            <p class="fw-bold mb-0">Rp. 25.000</p>
                        </div>
                        <div class="divider-line-delivery"></div>
                        <div class="delivery item px-2 py-2 d-flex justify-content-between align-items-center" onclick="selectDelivery('Express', 'Estimasi Tiba 31 Okt - 1 Nov', 'Rp. 27.000')">
                            <div class="expedition">
                                <p class="fw-bold mb-0 type-expedition">Express</p>
                                <p class="mb-0">Estimasi Tiba 31 Okt - 1 Nov</p>
                            </div>
                            <p class="fw-bold mb-0">Rp. 27.000</p>
                        </div>
                        <div class="divider-line-delivery"></div>
                        <div class="delivery item px-2 py-2 d-flex justify-content-between align-items-center" onclick="selectDelivery('Kargo', 'Estimasi Tiba 3 - 7 Nov', 'Rp. 17.000')">
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
            <a href="#" class="btn btn-primary mt-2 w-100 rounded-4" data-bs-toggle="modal" data-bs-target="#paymentModal">Pilih Pembayaran</a>

            <!-- Modal -->
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered d-flex justify-content-center">
                    <div class="modal-content modal-payment rounded-4 px-3 py-3">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x" id="paymentModalLabel">Pilih Pembayaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="payment-box px-3 py-3 rounded-3">
                                <h5 class="fw-bold">Metode Pembayaran</h5>
                                <div class="d-flex px-2 py-4 justify-content-between align-items-center">
                                    <div class="d-flex payment align-items-center">
                                        <img src="{{ url('assets/images/bri.png') }}" alt="" class="me-5">
                                        <p class="mb-0 fw-semibold">BRI Virtual Account</p>
                                    </div>
                                    <input class="form-check-input custom-radio px-0 py-0" type="radio" name="radioPayment" id="radioPayment">
                                </div>
                                <div class="d-flex px-2 py-4 justify-content-between align-items-center">
                                    <div class="d-flex payment align-items-center">
                                        <img src="{{ url('assets/images/bca.png') }}" alt="" class="me-5">
                                        <p class="mb-0 fw-semibold">BCA Virtual Account</p>
                                    </div>
                                    <input class="form-check-input custom-radio px-0 py-0" type="radio" name="radioPayment" id="radioPayment">
                                </div>
                                <div class="d-flex px-2 py-4 justify-content-between align-items-center">
                                    <div class="d-flex payment align-items-center">
                                        <img src="{{ url('assets/images/bni.png') }}" alt="" class="me-5">
                                        <p class="mb-0 fw-semibold">BNI Virtual Account</p>
                                    </div>
                                    <input class="form-check-input custom-radio px-0 py-0" type="radio" name="radioPayment" id="radioPayment">
                                </div>
                                <div class="d-flex px-2 py-4 justify-content-between align-items-center">
                                    <div class="d-flex payment align-items-center">
                                        <img src="{{ url('assets/images/mandiri.png') }}" alt="" class="me-5">
                                        <p class="mb-0 fw-semibold">Mandiri Virtual Account</p>
                                    </div>
                                    <input class="form-check-input custom-radio px-0 py-0" type="radio" name="radioPayment" id="radioPayment">
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
                                <a href="{{ route('payment') }}" class="btn btn-primary d-flex justify-content-center align-items-center" style="height: 40px;">Bayar</a>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dropdownContainer = document.querySelector(".dropdown-container");
        const dropdownIcon = document.getElementById("dropdown-icon");
        const deliveryOptionsContent = document.getElementById("deliveryOptionsContent");
        const dropdownContent = document.getElementById("dropdownContent");

        let currentDelivery = null; // Store the current selected delivery option
        const allDeliveryOptions = [
            { type: 'Reguler', estimate: 'Estimasi Tiba 1 - 3 Nov', price: 'Rp. 25.000' },
            { type: 'Express', estimate: 'Estimasi Tiba 31 Okt - 1 Nov', price: 'Rp. 27.000' },
            { type: 'Kargo', estimate: 'Estimasi Tiba 3 - 7 Nov', price: 'Rp. 17.000' }
        ]; // All available delivery options

        function openDropdown() {
            dropdownContainer.classList.add("expanded");
            dropdownIcon.classList.remove("fa-caret-down");
            dropdownIcon.classList.add("fa-caret-up");
            deliveryOptionsContent.style.display = "block";
        }

        function closeDropdown() {
            dropdownContainer.classList.remove("expanded");
            dropdownIcon.classList.remove("fa-caret-up");
            dropdownIcon.classList.add("fa-caret-down");
            setTimeout(() => {
                deliveryOptionsContent.style.display = "none";
            }, 300); // Matches transition timing for smooth collapse
        }

        function toggleDropdown() {
            if (dropdownContainer.classList.contains("expanded")) {
                closeDropdown();
            } else {
                openDropdown();
            }
        }

        function selectDelivery(deliveryType, estimate, price) {
            // Store the selected delivery option
            currentDelivery = {
                deliveryType,
                estimate,
                price,
            };

            // Update the dropdown display
            updateDropdownDisplay();

            // Update the shipping cost display
            const shippingCostElement = document.getElementById("shipping-cost");
            shippingCostElement.innerText = price;

            // Remove the selected delivery option from the list
            removeDeliveryOption(deliveryType);

            // Calculate and update the final total
            calculateFinalTotal();

            closeDropdown(); // Close dropdown after making a selection
        }

        function updateDropdownDisplay() {
            // Update the dropdown content based on the selected delivery option
            dropdownContent.innerHTML = `
                <div class="delivery-selected rounded-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0 fw-bold">${currentDelivery.deliveryType}</h6>
                        <i class="fa-solid fa-caret-down" style="font-size: 18px;" id="dropdown-icon"></i>
                    </div>
                    <div class="delivery item mt-3 py-2 d-flex justify-content-between align-items-center">
                        <div class="expedition">
                            <p class="fw-bold mb-0">${currentDelivery.deliveryType}</p>
                            <p class="mb-0">${currentDelivery.estimate}</p>
                        </div>
                        <p class="fw-bold mb-0">${currentDelivery.price}</p>
                    </div>
                </div>
            `;
        }

        function removeDeliveryOption(deliveryType) {
            // Filter out the selected delivery option from the allDeliveryOptions array
            const updatedOptions = allDeliveryOptions.filter(option => option.type !== deliveryType);

            // Rebuild the delivery options content
            deliveryOptionsContent.innerHTML = updatedOptions.map(option => `
                <div class="divider-line-delivery"></div>
                <div class="delivery item px-2 py-2 d-flex justify-content-between align-items-center" onclick="selectDelivery('${option.type}', '${option.estimate}', '${option.price}')">
                    <div class="expedition">
                        <p class="fw-bold mb-0">${option.type}</p>
                        <p class="mb-0">${option.estimate}</p>
                    </div>
                    <p class="fw-bold mb-0">${option.price}</p>
                </div>
            `).join('');
        }

        // Assign functions to window for inline HTML use
        window.toggleDropdown = toggleDropdown;
        window.selectDelivery = selectDelivery;

        // Automatically show addAddressModal when tambahAlamatModal is closed
        document.getElementById('tambahAlamatModal').addEventListener('hidden.bs.modal', function () {
            const addAddressModalElement = document.getElementById('addAddressModal');
            const addAddressModal = bootstrap.Modal.getInstance(addAddressModalElement);
            
            // If the modal is not already shown, show it
            if (!addAddressModal) {
                const newAddAddressModal = new bootstrap.Modal(addAddressModalElement);
                newAddAddressModal.show();
            }
        });

        // Function to toggle button state
        function toggleButtonState() {
            var checkbox = document.getElementById('agreementCheckbox');
            var button = document.getElementById('addAddressButton');

            // Enable the button if the checkbox is checked, otherwise disable it
            if (checkbox.checked) {
                button.removeAttribute("disabled"); // Enable button
            } else {
                button.setAttribute("disabled", "true"); // Disable button
            }
        }
        // Initial state check
        toggleButtonState(); // Call this on page load to set the initial button state
        // Assign the toggle function to the checkbox
        document.getElementById('agreementCheckbox').addEventListener('change', toggleButtonState);

        // Function to handle adding a new address
        function addAddress() {
            // Collect form input values
            const name = document.getElementById('nameReceiver').value;
            const phone = document.getElementById('noReceiver').value;
            const city = document.getElementById('city').value;
            const postalCode = document.getElementById('posCode').value;
            const fullAddress = document.getElementById('fullAddress').value;

            // Clear previous error messages and styles
            const errorElements = document.querySelectorAll('.error-message');
            errorElements.forEach(el => el.style.display = 'none');

            const inputs = [
                { id: 'nameReceiver', errorId: 'nameError' },
                { id: 'noReceiver', errorId: 'phoneError' },
                { id: 'city', errorId: 'cityError' },
                { id: 'posCode', errorId: 'postalError' },
                { id: 'fullAddress', errorId: 'addressError' }
            ];

            let isValid = true;

            inputs.forEach(input => {
                const field = document.getElementById(input.id);
                const errorElement = document.getElementById(input.errorId);

                if (!field.value.trim()) {
                    field.style.border = '2px solid red'; // Change border color to red
                    errorElement.style.display = 'block'; // Show error message
                    isValid = false;
                } else {
                    field.style.border = ''; // Reset border color
                }
            });

            // Check if all fields are filled
            if (!isValid) {
                alert("Please fill in all fields to add the address.");
                return;
            }

            // Create a new address item
            const addressDisplay = document.getElementById('addressDisplay');
            const newAddressItem = document.createElement('div');
            newAddressItem.classList.add('d-flex', 'address-item', 'mt-4', 'px-4', 'py-4', 'justify-content-between', 'align-items-center', 'rounded-4');
            newAddressItem.innerHTML = `
                <div class="address-description me-1">
                    <h6 class="mb-0 fw-bold">${name}</h6>
                    <p class="mb-0">${phone}</p>
                    <p class="mb-0">${fullAddress}, ${city}, ${postalCode}</p>
                </div>
                <a href="#" class="btn btn-primary btn-select-address d-flex justify-content-center align-items-center">Pilih</a>
            `;

            // Append the new address to the display area
            addressDisplay.appendChild(newAddressItem);

            // Clear form fields after adding the address
            document.getElementById('nameReceiver').value = '';
            document.getElementById('noReceiver').value = '';
            document.getElementById('city').value = '';
            document.getElementById('posCode').value = '';
            document.getElementById('fullAddress').value = '';

            // Hide the tambahAlamatModal
            const tambahAlamatModal = bootstrap.Modal.getInstance(document.getElementById('tambahAlamatModal'));
            if (tambahAlamatModal) {
                tambahAlamatModal.hide();
            }
            
            // Show addAddressModal after hiding tambahAlamatModal
            const addAddressModal = new bootstrap.Modal(document.getElementById('addAddressModal'));
            addAddressModal.show();

            // Attach event listener to the newly created "Pilih" button
            newAddressItem.querySelector('.btn-select-address').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor behavior

                // Get the address details
                const name = newAddressItem.querySelector('.address-description h6').innerText;
                const phone = newAddressItem.querySelector('.address-description p:nth-of-type(1)').innerText;
                const fullAddress = newAddressItem.querySelector('.address-description p:nth-of-type(2)').innerText;

                // Update the selected address display
                const selectedAddress = document.getElementById('selectedAddress');
                selectedAddress.querySelector('h6').innerText = name;
                selectedAddress.querySelector('p:nth-of-type(1)').innerText = phone;
                selectedAddress.querySelector('p:nth-of-type(2)').innerText = fullAddress;

                // Show the selected address and hide the "Tambah Alamat" button
                selectedAddress.classList.remove('d-none');
                document.getElementById('changeAddress').innerText = 'Ganti Alamat';

                // Clear the input fields in the modal for future use
                document.getElementById('nameReceiver').value = '';
                document.getElementById('noReceiver').value = '';
                document.getElementById('city').value = '';
                document.getElementById('posCode').value = '';
                document.getElementById('fullAddress').value = '';

                // Close all open modals and remove backdrops
                document.querySelectorAll('.modal.show').forEach(modal => {
                    const modalInstance = bootstrap.Modal.getInstance(modal);
                    if (modalInstance) {
                        modalInstance.hide(); // Hide the modal
                    }
                });

                // Remove any remaining modal backdrops
                document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
                    backdrop.remove();
                });

                // Restore body scrolling if needed
                document.body.classList.remove('modal-open');
                document.body.style.paddingRight = ''; // Reset padding caused by scrollbar removal
            });
        }

        // Event listener for "Tambah Alamat" button
        document.getElementById('addAddressButton').addEventListener('click', addAddress);

        // Event listener for scrolling the address list
        const addressList = document.getElementById("addressDisplay");
        addressList.addEventListener("scroll", function () {
            if (addressList.scrollTop > 0) {
                addressList.style.marginTop = "15px"; // Add margin when scrolling
            } else {
                addressList.style.marginTop = "0px"; // Reset margin when at the top
            }
        });

        // Attach event listeners to existing "Pilih" buttons (if any)
        document.querySelectorAll('.btn-select-address').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor behavior

                // Get the address details
                const addressItem = button.closest('.address-item');
                const name = addressItem.querySelector('.address-description h6').innerText;
                const phone = addressItem.querySelector('.address-description p:nth-of-type(1)').innerText;
                const fullAddress = addressItem.querySelector('.address-description p:nth-of-type(2)').innerText;

                // Update the selected address display
                const selectedAddress = document.getElementById('selectedAddress');
                selectedAddress.querySelector('h6').innerText = name;
                selectedAddress.querySelector('p:nth-of-type(1)').innerText = phone;
                selectedAddress.querySelector('p:nth-of-type(2)').innerText = fullAddress;

                // Show the selected address and update the button text
                selectedAddress.classList.remove('d-none');
                document.getElementById('changeAddress').innerText = 'Ganti Alamat';

                // Close all open modals
                document.querySelectorAll('.modal.show').forEach(modal => {
                    const modalInstance = bootstrap.Modal.getInstance(modal);
                    if (modalInstance) {
                        modalInstance.hide(); // Properly hide the modal
                    }
                });

                // Remove remaining backdrops
                document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());

                // Reset body styles for scrolling
                document.body.classList.remove('modal-open');
                document.body.style.overflow = ''; // Reset overflow
                document.body.style.paddingRight = ''; // Reset padding caused by scrollbar
            });
        });


        // Function to calculate and update total items and price
        function updateSummary() {
            let totalItems = 0;
            let totalPrice = 0;

            // Select all elements with the itemPrice class
            document.querySelectorAll(".itemPrice").forEach(item => {
                // Extract quantity and price from the text, e.g., "1x Rp. 185,000"
                const [quantity, price] = item.innerText.split('x Rp.').map(str => str.trim());
                
                const itemQuantity = parseInt(quantity);
                const itemPrice = parseInt(price.replaceAll('.', '').replace(',', ''));
                
                totalItems += itemQuantity;
                totalPrice += itemQuantity * itemPrice;
            });

            // Update the total items and total price in the display
            document.getElementById("total-items").innerText = `Total Harga (${totalItems} Barang)`;
            document.getElementById("total-price").innerText = `Rp. ${totalPrice.toLocaleString('id-ID')}`;
        }
        // Call updateSummary to initialize values
        updateSummary();

        const discountVoucher = document.getElementById("discount-voucher");
        
        // Define voucher amount
        const voucherAmount = 25000; // or dynamically fetch this value

        // Function to display the voucher without affecting the total
        function showVoucher() {
            discountVoucher.textContent = `-Rp. ${voucherAmount.toLocaleString()}`;
        }

        // Call showVoucher function when voucher is applied
        showVoucher();

        // Function to calculate and update the final total
        function calculateFinalTotal() {
            // Get the total price, shipping cost, and discount values
            const totalPrice = parseInt(document.getElementById("total-price").innerText.replace(/[Rp. ,]/g, '') || 0);
            const shippingCost = parseInt(document.getElementById("shipping-cost").innerText.replace(/[Rp. ,]/g, '') || 0);
            const discountVoucher = -Math.abs(parseInt(document.getElementById("discount-voucher").innerText.replace(/[Rp. ,]/g, '').replace('-', '') || 0)); // Make discount negative

            // Calculate the final total (total price + shipping cost - discount)
            const finalTotal = totalPrice + shippingCost + discountVoucher;

            // Update the final total display
            document.getElementById("final-total").innerText = `Rp. ${finalTotal.toLocaleString('id-ID')}`;

            // Call updatePaymentTotal after final total is updated
            updatePaymentTotal();
            updateBillTotal();
        }

        function updatePaymentTotal() {
            // Get the text from final-total
            const finalTotalText = document.getElementById('final-total').innerText;

            // Remove 'Rp. ' and parse the number
            const finalTotalValue = parseInt(finalTotalText.replace('Rp. ', '').replace(/\./g, ''), 10);

            // Set the payment-total
            document.getElementById('payment-total').innerText = `Rp. ${finalTotalValue.toLocaleString('id-ID')}`;
        }
        // Automatically update totals when inputs change
        document.querySelectorAll('#total-price, #shipping-cost, #discount-voucher').forEach(input => {
            input.addEventListener('input', calculateFinalTotal); // Use 'input' event for real-time updates
        });
        // Initial call to set the values based on current data
        calculateFinalTotal();

        function updateBillTotal() {
            const finalTotalText = document.getElementById('final-total').innerText;
            const finalTotalValue = parseInt(finalTotalText.replace('Rp. ', '').replace(/\./g, ''), 10);
            document.getElementById('bill-total').innerText = `Rp. ${finalTotalValue.toLocaleString('id-ID')}`;
        }
        // Automatically update totals when inputs change
        document.querySelectorAll('#total-price, #shipping-cost, #discount-voucher').forEach(input => {
            input.addEventListener('input', calculateFinalTotal); // Use 'input' event for real-time updates
        });
        // Initial call to set the values based on current data
        calculateFinalTotal();

        // JavaScript to toggle the search form visibility when the icon is clicked
        document.getElementById("search-icon-toggle").addEventListener("click", function() {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });
    });
</script>
@endsection
