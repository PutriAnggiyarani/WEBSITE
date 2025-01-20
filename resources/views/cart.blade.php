@extends('layout.app')
@section('content')
<section id="cart-item">
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
        <h4 class="mb-4 header-section fw-bold">Keranjang Saya</h4>
        <div class="cart-container">
            <div class="all-cart me-5">
                <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4">
                    <input type="checkbox" class="custom-checkbox text-center me-4" name="selectAll" id="selectAll">
                    <h6 class="fw-bold mb-0 align-middle">Pilih Semua</h6>
                </div>
                <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4 mt-md-5">
                    <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                    <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                        <div class="icon-quantity-container d-flex mt-2">
                            <div class="icon-container d-flex align-items-center me-0 me-md-2">
                                <a href=""><img src="{{ asset('assets/images/ldropdown.png') }}" alt="" id="favorite-product" class="me-2"></a>
                                <a href=""><img src="{{ asset('assets/images/deleteicon.png') }}" alt="" id="delete-product"></a>
                            </div>
                            <div class="quantity d-flex align-items-center rounded-4 px-3">
                                <a href="#" class="btnMinus">-</a>
                                <input type="text" value="1" class="inputQuantity text-center mx-2" readonly>
                                <a href="#" class="btnPlus">+</a>
                            </div>
                        </div>
                    </div>
                </div>                                               
                <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4">
                    <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                    <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                        <div class="icon-quantity-container d-flex mt-2">
                            <div class="icon-container d-flex align-items-center me-0 me-md-2">
                                <a href=""><img src="images/ldropdown.png" alt="" id="favorite-product" class="me-2"></a>
                                <a href=""><img src="images/deleteicon.png" alt="" id="delete-product"></a>
                            </div>
                            <div class="quantity d-flex align-items-center rounded-4 px-3">
                                <a href="#" class="btnMinus">-</a>
                                <input type="text" value="1" class="inputQuantity text-center mx-2" readonly>
                                <a href="#" class="btnPlus">+</a>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4">
                    <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                    <img src="{{ url('assets/images/cart1.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Hijab Bella Square</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Beige</p>
                    </div>
                    <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 35.000</p>
                        <div class="icon-quantity-container d-flex mt-2">
                            <div class="icon-container d-flex align-items-center me-0 me-md-2">
                                <a href=""><img src="images/ldropdown.png" alt="" id="favorite-product" class="me-2"></a>
                                <a href=""><img src="images/deleteicon.png" alt="" id="delete-product"></a>
                            </div>
                            <div class="quantity d-flex align-items-center rounded-4 px-3">
                                <a href="#" class="btnMinus">-</a>
                                <input type="text" value="1" class="inputQuantity text-center mx-2" readonly>
                                <a href="#" class="btnPlus">+</a>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4">
                    <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                    <img src="{{ url('assets/images/cart2.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Serenade Strips</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Pink</p>
                    </div>
                    <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 185.000</p>
                        <div class="icon-quantity-container d-flex mt-2">
                            <div class="icon-container d-flex align-items-center me-0 me-md-2">
                                <a href=""><img src="images/ldropdown.png" alt="" id="favorite-product" class="me-2"></a>
                                <a href=""><img src="images/deleteicon.png" alt="" id="delete-product"></a>
                            </div>
                            <div class="quantity d-flex align-items-center rounded-4 px-3">
                                <a href="#" class="btnMinus">-</a>
                                <input type="text" value="1" class="inputQuantity text-center mx-2" readonly>
                                <a href="#" class="btnPlus">+</a>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="d-flex py-4 px-3 cart-box align-items-center rounded-4 mt-4">
                    <input type="checkbox" class="custom-checkbox text-center me-4 item-checkbox" name="item1" id="item1" data-price="35000">
                    <img src="{{ url('assets/images/cart3.png') }}" class="rounded-2 me-3" alt="">
                    <div class="cart-description">
                        <h6 class="fw-bold mb-0">Scuba Slim-Fit Pants</h6>
                        <p class="rounded-3 px-2 mt-2 mb-0 color-product">Warna : Pink</p>
                    </div>
                    <div class="cart-quantity d-flex flex-column ms-auto align-items-end">
                        <p class="mb-0 fw-semibold itemPrice">1x Rp. 115.000</p>
                        <div class="icon-quantity-container d-flex mt-2">
                            <div class="icon-container d-flex align-items-center me-0 me-md-2">
                                <a href=""><img src="images/ldropdown.png" alt="" id="favorite-product" class="me-2"></a>
                                <a href=""><img src="images/deleteicon.png" alt="" id="delete-product"></a>
                            </div>
                            <div class="quantity d-flex align-items-center rounded-4 px-3">
                                <a href="#" class="btnMinus">-</a>
                                <input type="text" value="1" class="inputQuantity text-center mx-2" readonly>
                                <a href="#" class="btnPlus">+</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="summary-cart px-3 py-3 rounded-4">
                <h5 class="fw-bold">Ringkasan Belanja</h5>
                <div class="divider-line mt-3 mb-3"></div>
                <div class="d-flex justify-content-between">
                    <p id="total-items">Total Harga (0 Barang)</p>
                    <h5 id="total-price">Rp. 0</h5>
                </div>                   
                <a href="" class="mt-3" data-bs-toggle="modal" data-bs-target="#scrollableModal">
                    <div class="promo-code d-flex align-items-center px-3 py-2 rounded-5">
                        <span class="me-2"><i class="fa-solid fa-tag"></i></span>
                        <p class="mb-0" id="selectedPromoCode">Add Promo Code</p>
                    </div>
                </a>
                <a href="{{ url('/checkout') }}" class="btn btn-primary w-100 mt-3">Checkout</a>
                <div class="modal fade" id="scrollableModal" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable d-flex justify-content-center">
                        <div class="modal-content rounded-5">
                            <div class="modal-header px-4 mt-2">
                                <button type="button" class="btn-close" style="font-size: 12px;" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body py-0 px-5">
                                <!-- Add a lot of content to make the modal scrollable -->
                                <div class="sticky-header">
                                    <h5 class="text-center fw-bold">GUNAKAN PROMO!</h5>
                                </div>
                                <div class="promo-voucher px-0 rounded-4 mt-3 mb-4">
                                    <h5 class="fw-bold text-center pt-3">Gratis Ongkir</h5>
                                    <p class="mt-3 mb-4 fw-semibold text-center px-3">Pengguna baru spesial! Nikmati gratis ongkir untuk pembelian pertama Anda, tanpa minimum pembelian. Belanja sekarang, hemat lebih banyak!</p>
                                    <a href="javascript:void(0);" class="btn btn-primary w-100" onclick="applyPromo('Gratis Ongkir')">Terapkan</a>
                                </div>
                                <div class="promo-voucher px-0 rounded-4 mt-5 mb-4">
                                    <h5 class="fw-bold text-center pt-3">Gratis Ongkir</h5>
                                    <p class="mt-3 mb-4 fw-semibold text-center px-3">Belanja di atas RP. 500.000 dan nikmati gratis ongkir ke seluruh Indonesia. Belanja lebih banyak, tanpa bioya kirim</p>
                                    <a href="javascript:void(0);" class="btn btn-primary w-100" onclick="applyPromo('Gratis Ongkir')">Terapkan</a>
                                </div>
                                <div class="promo-voucher px-0 rounded-4 mt-5 mb-4">
                                    <h5 class="fw-bold text-center pt-3">Cashback Rp. 35.000</h5>
                                    <p class="mt-3 mb-4 fw-semibold text-center px-3">Dapatkan Cashback Spesial Rp. 35.000 untuk pembelian di atas Rp. 450.000, Kesempatan Terbatas</p>
                                    <a href="javascript:void(0);" class="btn btn-primary w-100" onclick="applyPromo('Cashback Rp. 35.000')">Terapkan</a>
                                </div>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="toastBox"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectAllCheckbox = document.getElementById('selectAll');
        const itemCheckboxes = document.querySelectorAll('.item-checkbox');
        const btnMinus = document.querySelectorAll('.btnMinus');
        const btnPlus = document.querySelectorAll('.btnPlus');
        const inputQuantities = document.querySelectorAll('.inputQuantity');
        const itemPriceElements = document.querySelectorAll('.itemPrice'); // For displaying "1x Rp. 35.000"

        const totalPriceEl = document.getElementById('total-price');
        const totalItemsEl = document.getElementById('total-items');

        const basePrices = [35000, 35000, 35000, 185000, 115000]; // Replace with actual base prices

        // Function to format number as Rupiah with periods as thousand separator
        function formatRupiah(value) {
            return new Intl.NumberFormat('id-ID', { maximumFractionDigits: 0 }).format(value).replace(/,/g, '.');
        }

        // Update the price and quantity text for each item
        function updatePriceAndQuantity(index, quantity) {
            const itemPriceElement = itemPriceElements[index];
            const basePrice = basePrices[index];

            // Update the displayed quantity and total price for the item
            itemPriceElement.textContent = `${quantity}x Rp. ${formatRupiah(basePrice * quantity)}`;
        }

        // Update the total price and total item count based on selected items and their quantities
        function updateTotalPrice() {
            let totalPrice = 0;
            let totalItems = 0;

            itemCheckboxes.forEach((checkbox, index) => {
                if (checkbox.checked) {
                    const quantity = parseInt(inputQuantities[index].value);
                    const itemPrice = basePrices[index] * quantity;
                    totalPrice += itemPrice;
                    totalItems++; // Increment by 1 for each selected item, regardless of its quantity
                } else {
                    // Reset quantity to 1 if the checkbox is unchecked
                    inputQuantities[index].value = 1;
                    updatePriceAndQuantity(index, 1);
                }
            });

            totalPriceEl.textContent = `Rp. ${formatRupiah(totalPrice)}`;
            totalItemsEl.textContent = `Total Barang (${totalItems} Barang)`;

            // If no items are selected, display "Rp. 0" and "Total Barang (0 Barang)"
            if (totalItems === 0) {
                totalPriceEl.textContent = 'Rp. 0';
                totalItemsEl.textContent = 'Total Barang (0 Barang)';
            }
        }

        // Handle "Pilih Semua" (Select All) checkbox functionality
        selectAllCheckbox.addEventListener('change', function() {
            itemCheckboxes.forEach(function(checkbox) {
                checkbox.checked = selectAllCheckbox.checked; // Set each checkbox to match the select all checkbox
            });
            updateTotalPrice(); // Update the total price when "Pilih Semua" is toggled
        });

        // Optional: Update "Pilih Semua" checkbox based on individual checkboxes
        itemCheckboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                if (!checkbox.checked) {
                    selectAllCheckbox.checked = false; // Uncheck "Pilih Semua" if any checkbox is unchecked
                } else if ([...itemCheckboxes].every(item => item.checked)) {
                    selectAllCheckbox.checked = true; // Check "Pilih Semua" if all checkboxes are checked
                }
                updateTotalPrice(); // Update the total price when individual checkboxes are changed
            });
        });

        // Loop through all the minus buttons
        btnMinus.forEach(function(minusButton, index) {
            minusButton.addEventListener('click', function(e) {
                e.preventDefault();
                let currentValue = parseInt(inputQuantities[index].value);
                if (currentValue > 1) {
                    inputQuantities[index].value = currentValue - 1;
                    updatePriceAndQuantity(index, currentValue - 1);
                    updateTotalPrice(); // Update the total price whenever quantity changes
                }
            });
        });

        // Loop through all the plus buttons
        btnPlus.forEach(function(plusButton, index) {
            plusButton.addEventListener('click', function(e) {
                e.preventDefault();
                let currentValue = parseInt(inputQuantities[index].value);
                inputQuantities[index].value = currentValue + 1;
                updatePriceAndQuantity(index, currentValue + 1);
                updateTotalPrice(); // Update the total price whenever quantity changes
            });
        });
        // Initial call to update total price and item prices
        updateTotalPrice();

        // Remove lingering modal backdrops
        function removeAllModalBackdrops() {
            const backdrops = document.querySelectorAll(".modal-backdrop");
            backdrops.forEach((backdrop) => backdrop.remove());
        }

        // Reset body styles and classes
        function resetBodyScroll() {
            document.body.classList.remove("modal-open");
            document.body.style.overflow = "";
            document.body.style.paddingRight = "";
        }

        // Apply promo code function
        window.applyPromo = function (codeText) {
            // Update promo code display
            document.getElementById("selectedPromoCode").innerText = codeText;

            // Check all item checkboxes
            itemCheckboxes.forEach((checkbox) => (checkbox.checked = true));

            // Ensure "Select All" checkbox is checked
            selectAllCheckbox.checked = true;

            // Update the total price
            updateTotalPrice();

            // Show success alert
            alert("Promo code applied successfully!");

            // Close the modal
            const promoModalElement = document.getElementById("scrollableModal");
            const promoModal = bootstrap.Modal.getOrCreateInstance(promoModalElement);
            if (promoModal) {
                promoModal.hide();
            }

            // Wait briefly to ensure modal animations complete
            setTimeout(() => {
                removeAllModalBackdrops(); // Remove lingering backdrops
                resetBodyScroll(); // Reset scroll and styles
            }, 500);
        };

        // Handle modal cleanup on hidden event
        document.getElementById("scrollableModal").addEventListener("hidden.bs.modal", function () {
            removeAllModalBackdrops(); // Ensure backdrops are removed
            resetBodyScroll(); // Reset scroll and body styles
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const selectAllCheckbox = document.getElementById('selectAll');
        const itemCheckboxes = document.querySelectorAll('.item-checkbox');

        selectAllCheckbox.addEventListener('change', function() {
            itemCheckboxes.forEach(function(checkbox) {
                checkbox.checked = selectAllCheckbox.checked; // Set each checkbox to match the select all checkbox
            });
        });

        // Optional: Update "Pilih Semua" checkbox based on individual checkboxes
        itemCheckboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                if (!checkbox.checked) {
                    selectAllCheckbox.checked = false; // Uncheck "Pilih Semua" if any checkbox is unchecked
                } else if ([...itemCheckboxes].every(item => item.checked)) {
                    selectAllCheckbox.checked = true; // Check "Pilih Semua" if all checkboxes are checked
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
