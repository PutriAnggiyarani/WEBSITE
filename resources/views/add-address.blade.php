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
                <a href="{{ route('profilecustomer')}}">
                    <div class="items-sidebar d-flex align-items-center mt-2 py-1">
                        <img src="{{ url('assets/images/profilesidebar.png') }}" alt="" class="me-3">
                        <p class="mb-0 fw-semibold">Profil Saya</p>
                    </div>
                </a>
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
                <div class="divider-line"></div>
            </div>
            <div id="profile-content">
                <div class="navbar-order px-3 py-5 rounded-4">
                    <div class="d-flex justify-content-between align-items-center px-3">
                        <h4 class="mb-0 fw-bold" style="color: #66525E;">Daftar Alamat</h4>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">Tambah Alamat Baru</a>
                    </div>
                    <div class="address-item d-flex justify-content-between align-items-center mt-5 px-4 py-4 rounded-3">
                        <div class="address-description">
                            <h6 class="mb-0 fw-bold">Natasha Putri</h6>
                            <p class="mb-0 mt-1" style="color: #737373;">+6281234567890</p>
                            <p class="mb-0" style="color: #737373;">Jl. Ir. Haji Juanda, Betro, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253</p>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-primary btn-edit-images delete-button">Hapus</a>
                    </div>          
                </div>
                <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered d-flex justify-content-center">
                        <div class="modal-content modal-address rounded-4 px-3 py-3">
                            <div class="modal-header justify-content-center position-relative">
                                <h5 class="modal-title fw-bold position-absolute start-50 translate-middle-x" id="addAddressModalLabel">Tambah Alamat Baru</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                        <input type="checkbox" class="custom-checkbox me-3" id="agreementCheckbox">
                                        <p class="mb-0">Saya Menyetuju Syarat & Ketentuan serta Kebijakan Privasi pengaturan alamat di Fmd.Id</p>
                                    </div>
                                    <!-- Add Address Button -->
                                    <button type="button" class="btn btn-primary w-100 mt-3" id="addAddressButton" onclick="addAddress()">Tambah Alamat</button>
                                </form>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to add a new address item with validation
        function addAddress() {
            let isValid = true;

            // Get form elements
            const nameReceiver = document.getElementById('nameReceiver');
            const noReceiver = document.getElementById('noReceiver');
            const city = document.getElementById('city');
            const posCode = document.getElementById('posCode');
            const fullAddress = document.getElementById('fullAddress');

            // Get error message elements
            const nameError = document.getElementById('nameError');
            const phoneError = document.getElementById('phoneError');
            const cityError = document.getElementById('cityError');
            const postalError = document.getElementById('postalError');
            const addressError = document.getElementById('addressError');

            // Validation function
            function validateField(field, errorElement) {
                if (field.value.trim() === "") {
                    field.style.borderColor = "red"; // Highlight field with red border
                    errorElement.style.display = "block"; // Show error message
                    isValid = false;
                } else {
                    field.style.borderColor = ""; // Reset border color
                    errorElement.style.display = "none"; // Hide error message
                }
            }

            // Run validation on each field
            validateField(nameReceiver, nameError);
            validateField(noReceiver, phoneError);
            validateField(city, cityError);
            validateField(posCode, postalError);
            validateField(fullAddress, addressError);

            // If all fields are valid, proceed to add the address
            if (isValid) {
                const addressText = `${fullAddress.value}, ${city.value}, ${posCode.value}`;
                const addressItem = document.createElement('div');
                addressItem.classList.add('address-item', 'd-flex', 'justify-content-between', 'align-items-center', 'mt-5', 'px-4', 'py-4', 'rounded-3');

                addressItem.innerHTML = `
                    <div class="address-description">
                        <h6 class="mb-0 fw-bold">${nameReceiver.value}</h6>
                        <p class="mb-0 mt-1" style="color: #737373;">${noReceiver.value}</p>
                        <p class="mb-0" style="color: #737373;">${addressText}</p>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-primary btn-edit-images delete-button">Hapus</a>
                `;

                document.querySelector('.navbar-order').appendChild(addressItem);

                // Reset the form fields
                document.getElementById('addressForm').reset();

                // Close the modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('addAddressModal'));
                modal.hide();

                // Remove lingering backdrop
                removeModalBackdrop();
            }
        }

        // Function to remove any lingering modal backdrops and reset the body
        function removeModalBackdrop() {
            // Remove modal-backdrop elements
            const backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach((backdrop) => backdrop.remove());

            // Reset the body class and styles
            document.body.classList.remove('modal-open');
            document.body.style.paddingRight = "";
        }

        // Listen for the modal's hidden event and clean up
        document.getElementById('addAddressModal').addEventListener('hidden.bs.modal', () => {
            removeModalBackdrop();
        });

        // Event listener for delete button functionality using event delegation
        document.querySelector('.navbar-order').addEventListener('click', function(event) {
            if (event.target.classList.contains('delete-button')) {
                if (confirm('Are you sure you want to delete this address?')) {
                    const addressItem = event.target.closest('.address-item');
                    if (addressItem) {
                        addressItem.remove();
                    }
                }
            }
        });

        // Toggle button state based on checkbox
        function toggleButtonState() {
            const checkbox = document.getElementById('agreementCheckbox');
            const button = document.getElementById('addAddressButton');

            if (checkbox.checked) {
                button.removeAttribute("disabled");
            } else {
                button.setAttribute("disabled", "true");
            }
        }

        // Initial state check and checkbox event listener
        toggleButtonState();
        document.getElementById('agreementCheckbox').addEventListener('change', toggleButtonState);

        // Add event listener for adding new address
        document.getElementById('addAddressButton').addEventListener('click', addAddress);

        // Clear error on input
        function clearErrorOnInput(field, errorElement) {
            field.addEventListener('input', function() {
                if (field.value.trim() !== "") {
                    field.style.borderColor = "";  // Reset border color
                    errorElement.style.display = "none";  // Hide error message
                }
            });
        }

        // Attach input event listeners to each field to clear errors when user types
        clearErrorOnInput(nameReceiver, nameError);
        clearErrorOnInput(noReceiver, phoneError);
        clearErrorOnInput(city, cityError);
        clearErrorOnInput(posCode, postalError);
        clearErrorOnInput(fullAddress, addressError);

        // JavaScript to toggle the search form visibility when the icon is clicked
        document.getElementById("search-icon-toggle").addEventListener("click", function() {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });
    });
</script>
@endsection