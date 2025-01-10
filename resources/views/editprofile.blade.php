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
            <div id="edit-profile-content" class="px-4 py-4 rounded-4">
                <h5 class="fw-bold" style="color: #987070;">Edit Profil Pengguna</h5>
                <div class="content-edit-profile align-items-center justify-content-between">
                    <div class="data-profile">
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
                                <div class="input-container">
                                    <input type="text" class="rounded-3 px-3 py-2" name="username" id="username"
                                        placeholder=" " value="Username">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">Alamat Email</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-container">
                                    <input type="email" id="email" name="email" class="rounded-3 px-3 py-2"
                                        placeholder=" " value="user.user@gmail.com">
                                    <label for="email">Alamat Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">No. Telepon</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-container">
                                    <input type="tel" id="phone" name="phone" class="rounded-3 px-3 py-2"
                                        placeholder=" ">
                                    <label for="phone">No. Telepon</label>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">Tanggal Lahir</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-container">
                                    <input type="date" id="birthdate" name="birthdate" class="rounded-3 px-3 py-2"
                                        placeholder=" ">
                                    <label for="birthdate">Tanggal Lahir</label>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 mt-2">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 fw-bold" style="width: 300px;">Jenis Kelamin</h6>
                                <p class="mb-0 fw-bold me-5" style="font-size: 26px;">:</p>
                                <div class="input-radio input-profile align-items-center">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" class="form-check-input custom-radio-gender px-0 py-0 me-2"
                                            id="male" name="gender" value="male" />
                                        <p class="mb-0 mt-1">Perempuan</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="radio" class="form-check-input custom-radio-gender px-0 py-0 me-2"
                                            id="female" name="gender" value="female" />
                                        <p class="mb-0 mt-1">Laki-Laki</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="edit-images px-4 py-4 rounded-4">
                        <div class="text-center">
                            <img src="{{ url('assets/images/profilebig.png')}}" alt="">
                            <div class="button-edit-profile mt-3">
                                <a href="" class="btn btn-primary btn-edit-images rounded-4 mt-3" id="uploadButton">Ubah
                                    Foto Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-primary rounded-4 d-flex align-items-center justify-content-center mt-4"
                    style="width: 145px; height: 45px;">Submit</a>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select the button and add a click event listener
        document.getElementById('uploadButton').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default button behavior
            
            // Create the file input element
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*'; // Accept only image files
            
            // Hide the file input
            fileInput.style.display = 'none';

            // Append the file input to the body
            document.body.appendChild(fileInput);

            // Trigger the file input click
            fileInput.click();

            // Handle file selection or input closure
            function cleanUpInput() {
                document.body.removeChild(fileInput); // Remove the input
            }

            // Listen for file selection
            fileInput.addEventListener('change', function (event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(e.target.result); // Log the file data URL
                    };
                    reader.readAsDataURL(file);
                }
                cleanUpInput();
            });

            // Also clean up if the input loses focus without file selection
            fileInput.addEventListener('blur', cleanUpInput);
        });
        
        // Label for Input
        const inputs = [
            { id: 'username', labelText: 'Username', placeholder: '' },
            { id: 'email', labelText: 'Alamat Email', placeholder: '' },
            { id: 'phone', labelText: 'No. Telepon', placeholder: '' },
            { id: 'birthdate', labelText: 'Tanggal Lahir', placeholder: '' },
        ];

        inputs.forEach(input => {
            const inputField = document.getElementById(input.id);
            const label = document.querySelector(`label[for="${input.id}"]`);

            // Set initial placeholder
            inputField.placeholder = " ";

            inputField.addEventListener('focus', () => {
                label.classList.add('active');
                inputField.placeholder = ""; // Clear placeholder when focused
            });

            inputField.addEventListener('blur', () => {
                if (inputField.value === '') {
                    label.classList.remove('active');
                    inputField.placeholder = input.placeholder; // Reset placeholder if empty
                }
            });
        });

        // Copy User ID to Clipboard
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
