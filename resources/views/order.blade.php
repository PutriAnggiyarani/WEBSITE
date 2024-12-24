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
                    <img src="{{ url('assets/images/profile.png')}} " alt="" class="rounded-5 me-3">
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
                <a href="order.html">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/ordericon.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Pesanan Saya</p>
                    </div>
                </a>
                <div class="divider-line"></div>
                <a href="add-address.html">
                    <div class="items-sidebar d-flex align-items-center mt-4 py-1">
                        <img src="{{ url('assets/images/location.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Lokasi Saya</p>
                    </div>
                </a>
            </div>
            <div id="order-content">
                <div class="navbar-order d-flex justify-content-between px-5 py-4 rounded-4">
                    <div class="navbar-ordered d-flex justify-content-between w-100">
                        <a href="javascript:void(0);" id="waiting-paid-link" class="nav-link custom-nav-link active">Belum Bayar (1)</a>
                        <a href="javascript:void(0);" id="empty-task-link" class="nav-link custom-nav-link">Sedang Dikemas</a>
                        <a href="javascript:void(0);" id="dikirim-link" class="nav-link custom-nav-link">Dikirim</a>
                        <a href="javascript:void(0);" id="selesai-link" class="nav-link custom-nav-link">Selesai</a>
                        <a href="javascript:void(0);" id="dibatalkan-link" class="nav-link custom-nav-link">Dibatalkan</a>
                    </div>
                </div>
                <div class="navbar-order px-5 py-4 rounded-4 mt-4" id="waiting-paid">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="no-order d-flex">
                            <img src="{{ url('assets/images/logo.png') }}" alt="" style="width: 61px; height: 32px;" class="me-2">
                            <p class="mb-0 mt-1 fw-semibold" style="color: #737373;">No Order : F00000000001</p>
                        </div>
                        <h6 class="mb-0 fw-bold status" style="color: #66525E;">Belum Bayar</h6>
                    </div>
                    <div class="divider-line mt-3"></div>
                    <div class="order-item">
                        <div class="d-flex align-items-center px-3 py-3">
                            <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                            <div class="cart-description">
                                <h6 class="mb-2 fw-bold">Hijab Bella Square</h6>
                                <h6 class="mb-2 fw-bold">1x</h6>
                                <p class="mb-0 rounded-3">Warna : Beige</p>
                            </div>
                            <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 35.000</h6>
                        </div>
                    </div>
                    <div class="divider-line mt-3"></div>
                    <div class="order-item">
                        <div class="d-flex align-items-center px-3 py-3">
                            <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                            <div class="cart-description">
                                <h6 class="mb-2 fw-bold">Hijab Bella Square</h6>
                                <h6 class="mb-2 fw-bold">1x</h6>
                                <p class="mb-0 rounded-3">Warna : Beige</p>
                            </div>
                            <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 35.000</h6>
                        </div>
                    </div>
                    <div class="divider-line mt-3"></div>
                    <div class="order-item">
                        <div class="d-flex align-items-center px-3 py-3">
                            <img src="{{ url('assets/images/cart1.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                            <div class="cart-description">
                                <h6 class="mb-2 fw-bold">Hijab Bella Square</h6>
                                <h6 class="mb-2 fw-bold">1x</h6>
                                <p class="mb-0 rounded-3">Warna : Beige</p>
                            </div>
                            <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 35.000</h6>
                        </div>
                    </div>
                    <div class="divider-line mt-3"></div>
                    <div class="order-item">
                        <div class="d-flex align-items-center px-3 py-3">
                            <img src="{{ url('assets/images/cart2.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                            <div class="cart-description">
                                <h6 class="mb-2 fw-bold">Serenade Strips</h6>
                                <h6 class="mb-2 fw-bold">1x</h6>
                                <p class="mb-0 rounded-3">Warna : Pink</p>
                            </div>
                            <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 185.000</h6>
                        </div>
                    </div>
                    <div class="divider-line mt-3"></div>
                    <div class="order-item">
                        <div class="d-flex align-items-center px-3 py-3">
                            <img src="{{ url('assets/images/cart3.png') }}" alt="" class="rounded-3 me-3" style="width: 90px;">
                            <div class="cart-description">
                                <h6 class="mb-2 fw-bold">Scuba Slim-Fit Pants</h6>
                                <h6 class="mb-2 fw-bold">1x</h6>
                                <p class="mb-0 rounded-3">Warna : Beige</p>
                            </div>
                            <h6 class="mb-0 fw-bold ms-auto item-price" style="color: #66525E;">Rp. 115.000</h6>
                        </div>
                    </div>
                    <div class="divider-line mt-3"></div>
                    <div class="d-flex justify-content-end align-items-center py-3">
                        <p class="fw-semibold mb-0" id="total-order" style="color: #8E8E93;">
                            Total Pesanan: <span class="fw-bold mb-0 total-price" style="color: #66525E; font-size: 28px;">Rp. 0</span>
                        </p>
                    </div>
                    <div class="d-flex justify-content-end align-items-center py-3">
                        <a href="payment.html" class="btn btn-primary rounded-4 me-4 d-flex justify-content-center">Bayar Sekarang</a>
                        <a href="" class="btn btn-primary btn-edit-images rounded-4 d-flex justify-content-center">Hubungi Penjual</a>
                    </div>
                </div>
                <div class="navbar-order px-5 py-4 rounded-4 mt-4" id="empty-task">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <img src="{{ url('assets/images/empty-task.png') }}" alt="">
                        <h6 class="mt-2 fw-semibold" style="color: #595959;">Belum ada pesanan</h6>
                    </div>
                </div>                                             
            </div>                    
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function calculateTotalOrder() {
            let total = 0;

            // Select all elements with the class 'item-price'
            document.querySelectorAll('.item-price').forEach(priceElement => {
                // Extract the numerical value from the text (e.g., "Rp. 35,000" to 35000)
                let priceText = priceElement.textContent.replace(/[^0-9]/g, ''); // Remove non-numeric characters
                let price = parseInt(priceText, 10); // Convert to an integer

                if (!isNaN(price)) {
                    total += price; // Add to total
                }
            });

            // Format total as Indonesian Rupiah (IDR) without decimals
            let formattedTotal = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(total);

            // Add a period after Rp
            formattedTotal = formattedTotal.replace('Rp', 'Rp.');

            // Update the total price display
            document.querySelector('#total-order .total-price').textContent = formattedTotal;
        }

        // Call the function to calculate total initially
        calculateTotalOrder();

        // Get all the nav links
        const navLinks = document.querySelectorAll('.navbar-order .nav-link');
        const waitingPaidSection = document.getElementById('waiting-paid');
        const emptyTaskSection = document.getElementById('empty-task');

        // Function to handle link clicks
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Show/hide sections based on which link is clicked
                if (link.id === 'waiting-paid-link') {
                    waitingPaidSection.style.display = 'block';  // Show waiting-paid section
                    emptyTaskSection.style.display = 'none';      // Hide empty-task section

                    // Set the waiting paid link text to include (1)
                    link.innerHTML = "Belum Bayar (1)"; // Keep (1) for waiting paid
                } else {
                    waitingPaidSection.style.display = 'none'; // Hide waiting-paid section
                    emptyTaskSection.style.display = 'block';   // Show empty-task section

                    // Update the clicked link text to include (0)
                    link.innerHTML = link.getAttribute('data-original-text') + " (0)"; // Keep full text and add (0)
                }

                // Remove active class from all links and add to the clicked link
                navLinks.forEach(l => {
                    l.classList.remove('active');
                    if (l !== link) {
                        l.innerHTML = l.getAttribute('data-original-text'); // Reset to the original text for inactive links
                    }
                });
                
                // Add active class to the clicked link
                link.classList.add('active');
            });
        });

        // Store original text for resetting
        navLinks.forEach(link => {
            link.setAttribute('data-original-text', link.textContent); // Store original text in a data attribute
        });

        // Initialize visibility
        waitingPaidSection.style.display = 'block';  // Show waiting-paid section by default
        emptyTaskSection.style.display = 'none';      // Hide empty-task section by default

        // JavaScript to toggle the search form visibility when the icon is clicked
        document.getElementById("search-icon-toggle").addEventListener("click", function() {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });
    });
</script>
@endsection