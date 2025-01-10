@extends('layout.app')
@section('content')
<section id="payment">
    <div class="container-fluid padding-side d-flex justify-content-center align-items-center">
        <div class="confirmation-payment px-4 py-4 rounded-4">
            <div class="header">
                <a href="{{ route('order-tracking') }}" class="d-flex align-items-center">
                    <span class="me-2">
                        <i class="fa-solid fa-angle-left" style="color: #66525E; font-size: 26px;"></i>
                    </span>
                    <h5 class="mb-1 fw-bold" style="color: #66525E;">Kembali</h5>
                </a>
            </div>
            <div class="body px-3 py-0 mt-4">
                <div class="d-flex justify-content-center">
                    <div class="countdown">
                        <h5 class="fw-bold">Selesaikan Pembayaran</h5>
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="mb-0 me-3" id="hours">00</p>
                            <p class="mb-0 me-3">:</p>
                            <p class="mb-0 me-3" id="minutes">00</p>
                            <p class="mb-0 me-3">:</p>
                            <p class="mb-0 me-3" id="seconds">00</p>
                        </div>
                        <div class="divider-line mt-0 mb-0"></div>
                    </div>
                </div>
                <div class="payment-selection px-4 mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold mb-0">BCA Virtual Account</h4>
                        <img src="{{ url('assets/images/bca.png')}}" alt="">
                    </div>
                    <div class="px-4 mt-4">
                        <h5 class="fw-semibold">No. Virtual Account</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0" id="virtual-account" style="color: #987070; font-size: 20px;">1234 5678 9012
                                3456</p>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 me-1 fw-semibold">Salin</p>
                                <img id="copyIcon" src="{{ url('assets/images/copy.png')}}" alt="Copy"
                                    style="width: 16px; height: auto; cursor: pointer;">
                            </div>
                        </div>
                        <div class="divider-line"></div>
                        <h5 class="fw-semibold mt-4">Total Tagihan</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0" id="price-payment" style="color: #987070; font-size: 20px;">Rp. 450.000</p>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 me-1 fw-semibold">Salin</p>
                                <img id="copyPriceIcon" src="{{ url('assets/images/copy.png')}}" alt="Copy"
                                    style="width: 16px; height: auto; cursor: pointer;">
                            </div>
                        </div>
                    </div>
                    <div class="divider-line mt-4"></div>
                </div>
                <div class="method-payment px-4 py-2 mt-4">
                    <h4 class="mb-0 fw-bold">Cara Pembayaran</h4>
                    <div class="px-4 py-0 mt-4">
                        <div class="d-flex justify-content-between align-items-center" id="dropdownToggle"
                            style="cursor: pointer;">
                            <h6 class="fw-bold mb-0">ATM BCA</h6>
                            <span id="dropdownIconATM"><i class="fa-solid fa-chevron-down"
                                    style="font-size: 14px;"></i></span>
                        </div>
                        <div class="dropdown-content-bca">
                            <div class="px-3 py-3">
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">1.</p>
                                    <p class="fw-semibold mb-0">Masukkan Kartu ATM BCA & PIN</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">2.</p>
                                    <p class="fw-semibold mb-0">Pilih menu Transaksi Lainnya > Transfer > ke Rekening
                                        BCA Virtual Account</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">3.</p>
                                    <p class="fw-semibold mb-0">Masukkan 4 angka kode perusahaan untuk FMD.ID (1234) dan
                                        Nomor HP yang terdaftar di akun Tokopedia Anda (contoh:1234567890123456)</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">4.</p>
                                    <p class="fw-semibold mb-0">Di Halaman konfirmasi, pastikan detail pembayaran sudah
                                        sesuai seperti No VA, Nama, Perusahaan, dan Total Tagihan</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">5.</p>
                                    <p class="fw-semibold mb-0">Masukkan Jumlah Transfer sesui dengan Total Tagihan</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">6.</p>
                                    <p class="fw-semibold mb-0">Ikuti Instruksi untuk menyelesaikan transaksi</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">7.</p>
                                    <p class="fw-semibold mb-0">Simpan struk transaksi sebagai bukti pembayaran</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3" id="dropdownToggleMobile"
                            style="cursor: pointer;">
                            <h6 class="fw-bold mb-0">m-BCA (BCA Mobile)</h6>
                            <span id="dropdownIconMobile"><i class="fa-solid fa-chevron-down"
                                    style="font-size: 14px;"></i></span>
                        </div>
                        <div class="dropdown-content-bca-mobile">
                            <div class="px-3 py-3">
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">1.</p>
                                    <p class="fw-semibold mb-0">Lakukan log in pada aplikasi BCA Mobile</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">2.</p>
                                    <p class="fw-semibold mb-0">Pilih menu m-BCA, kemudian masukkan kode akses m-BCA</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">3.</p>
                                    <p class="fw-semibold mb-0">Pilih m-Transfer > BCA Virtual Account</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">4.</p>
                                    <p class="fw-semibold mb-0">Pilih dari Daftar Transer, atau masukkan 4 angka kode
                                        perusahaan untuk FMD.ID (1234) dan Nomor HP yang terdaftar di akun Tokopedia
                                        Anda (contoh:1234567890123456)</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">5.</p>
                                    <p class="fw-semibold mb-0">Masukkan pin m-BCA</p>
                                </div>
                                <div class="d-flex mt-1">
                                    <p class="fw-semibold mb-0 me-3">6.</p>
                                    <p class="fw-semibold mb-0">Pembayaran selesai. Simpan notifikasi yang muncul
                                        sebagai bukti pembayaran</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider-line mt-3"></div>
                    <div class="d-flex justify-content-end mt-5">
                        <a href="#" class="btn btn-primary rounded-4" data-bs-toggle="modal"
                            data-bs-target="#confirmationModal">
                            Konfirmasi Pembayaran
                        </a>
                    </div>
                    <div class="modal fade" id="confirmationModal" tabindex="-1"
                        aria-labelledby="confirmationModalLabel" aria-hidden="true">
                        <div class="modal-dialog d-flex justify-content-center">
                            <div class="modal-content modal-success rounded-4">
                                <!-- <div class="modal-header">
                                            <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Pembayaran</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div> -->
                                <div class="modal-body">
                                    <div class="d-flex justify-content-center py-4">
                                        <img src="{{ url('assets/images/success.png')}}" alt="">
                                    </div>
                                    <div class="description-success">
                                        <h5 class="fw-bold text-center">Pembayaran Berhasil</h5>
                                        <p class="text-center">Terimakasih atas pembelian Anda</p>
                                    </div>
                                    <div class="d-flex justify-content-center mb-3">
                                        <a href="{{ route('order-tracking-done') }}"
                                            class="btn btn-primary btn-success rounded-4 d-flex justify-content-center align-items-center">Lihat
                                            Pesanan</a>
                                    </div>
                                </div>
                                <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-primary">Konfirmasi</button>
                                        </div> -->
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
        const initialTargetDate = new Date().getTime() + (24 * 60 * 60 * 1000) - 1000;
        let remainingTime = initialTargetDate - new Date().getTime(); // Initialize remaining time
        let timerInterval;

        function updateCountdown() {
            const now = new Date().getTime();
            remainingTime = Math.max(0, remainingTime - 1000); // Decrease remaining time by 1 second

            if (remainingTime <= 0) {
                document.getElementById("hours").innerText = "00";
                document.getElementById("minutes").innerText = "00";
                document.getElementById("seconds").innerText = "00";
                clearInterval(timerInterval);
                return;
            }

            // Calculate hours, minutes, and seconds from remaining time
            const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

            document.getElementById("hours").innerText = String(hours).padStart(2, '0');
            document.getElementById("minutes").innerText = String(minutes).padStart(2, '0');
            document.getElementById("seconds").innerText = String(seconds).padStart(2, '0');
        }

        // Function to start the countdown
        function startCountdown() {
            timerInterval = setInterval(updateCountdown, 1000);
        }

        // Function to stop the countdown and calculate remaining time
        function stopCountdown() {
            clearInterval(timerInterval);
        }

        // Start the countdown initially
        updateCountdown();
        startCountdown();

        // Pause countdown when success modal is shown
        const confirmationModal = document.getElementById("confirmationModal");
        confirmationModal.addEventListener("show.bs.modal", stopCountdown);
        confirmationModal.addEventListener("hide.bs.modal", startCountdown);

        // Dropdown functionality for ATM BCA
        const dropdownToggle = document.getElementById("dropdownToggle");
        const content = document.querySelector(".dropdown-content-bca");
        const icon = document.getElementById("dropdownIconATM").querySelector("i");

        dropdownToggle.addEventListener("click", function() {
            if (content.classList.contains("open")) {
                content.classList.remove("open");
                content.style.height = "0"; // Reset height to 0 when closing
                icon.classList.remove("fa-chevron-up");
                icon.classList.add("fa-chevron-down");
            } else {
                content.classList.add("open");
                requestAnimationFrame(() => {
                    content.style.height = `${content.scrollHeight}px`; // Set height to full content height
                });
                icon.classList.remove("fa-chevron-down");
                icon.classList.add("fa-chevron-up");
            }
        });

        // Dropdown functionality for m-BCA
        const dropdownToggleMobile = document.getElementById("dropdownToggleMobile");
        const contentMobile = document.querySelector(".dropdown-content-bca-mobile");
        const iconMobile = document.getElementById("dropdownIconMobile").querySelector("i");

        dropdownToggleMobile.addEventListener("click", function() {
            if (contentMobile.classList.contains("open")) {
                contentMobile.classList.remove("open");
                contentMobile.style.height = "0"; // Reset height to 0 when closing
                iconMobile.classList.remove("fa-chevron-up");
                iconMobile.classList.add("fa-chevron-down");
            } else {
                contentMobile.classList.add("open");
                requestAnimationFrame(() => {
                    contentMobile.style.height = `${contentMobile.scrollHeight}px`; // Set height to full content height
                });
                iconMobile.classList.remove("fa-chevron-down");
                iconMobile.classList.add("fa-chevron-up");
            }
        });
        // Set initial height to zero for both dropdowns when the page loads
        content.style.height = "0";
        contentMobile.style.height = "0";

        // Copy VA to Clipboard
        const copyIcon = document.getElementById("copyIcon");
        const virtualAccountElement = document.getElementById("virtual-account");

        copyIcon.addEventListener("click", function() {
            // Get the virtual account text and remove spaces
            const virtualAccountText = virtualAccountElement.innerText.replace(/\s+/g, ''); // Remove all spaces

            // Use the Clipboard API to copy the modified text
            navigator.clipboard.writeText(virtualAccountText).then(() => {
                alert("Virtual account copied to clipboard!"); // Optional: Feedback to the user
            }).catch(err => {
                console.error('Could not copy text: ', err);
            });
        });

        //Copy Price to Clipboard
        const copyPriceIcon = document.getElementById("copyPriceIcon");
        const priceElement = document.getElementById("price-payment");

        copyPriceIcon.addEventListener("click", function() {
            // Extract only the numeric part from the price text
            const priceText = priceElement.innerText; // e.g., "Rp. 450.000"
            const numericPrice = priceText.replace(/[^0-9]/g, ''); // Remove everything that's not a digit

            // Use the Clipboard API to copy the numeric price text
            navigator.clipboard.writeText(numericPrice).then(() => {
                alert("Price copied to clipboard!"); // Optional: Feedback to the user
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
