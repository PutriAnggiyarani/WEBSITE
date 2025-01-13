@extends('layout.app')
@section('content')
<section id="about-us">
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
        <div class="row h-100">
            <h3 class="fw-bold mb-0 text-center" style="color: #66525E; font-weight: bold;">HOW TO BUY</h3>
            <div class="row">
    <!-- Elemen Gambar -->
    <div class="col-12 d-flex justify-content-center align-items-center mt-3">
        <img src="{{ url('assets/images/howtobuy.png') }}" alt="About Us" class="rounded-4 img-fluid" style="width: auto; height: 450px;">
    </div>

    <!-- Elemen Teks -->
    <div class="col-12 mt-3">
        <p style="color: #595959; font-weight: bold;">Apa yang harus saya lakukan jika terjadi masalah dengan pesanan saya?</p>
        <p style="color: #595959;">Kami siap membantu Anda! Anda dapat menghubungi kami melalui live chat, mengirim email ke order@fmd.co.id atau whatsapp ke: +6281210082052.
        </p>
        <p style="color: #595959; font-weight: bold;">Metode pembayaran apa yang Anda terima?</p>
        <p style="color: #595959;">Anda dapat membayar dengan:</p>
        <ol style="color: #595959;">
            <li>
                <strong>Kartu Kredit & Debit (Visa & Mastercard)</strong> <br>
                Semua gateway pembayaran kami menerima pembayaran dalam mata uang Rupiah Indonesia. Jika mata uang kartu Anda bukan Rupiah Indonesia, Anda mungkin dikenakan biaya konversi mata uang dari penerbit kartu Anda. Kami sarankan untuk berkonsultasi dengan penyedia kartu kredit Anda untuk informasi tentang biaya yang berlaku.
            </li>
            <li>
                <strong>Transfer Bank</strong>
            </li>
        </ol>
        <p style="color: #595959;">Pilih metode pembayaran yang paling sesuai untuk Anda dan ikuti langkah-langkah pembayaran. Instruksi juga akan dikirim ke alamat email Anda jika Anda membutuhkannya nanti. Anda memiliki waktu 24 jam untuk menyelesaikan pembayaran, atau Akun Virtual unik Anda akan kedaluwarsa dan pesanan Anda akan dibatalkan secara otomatis.
        </p>
        <p style="color: #595959;">Jika Anda lebih suka melakukan pembayaran dengan transfer BCA, jangan lupa konfirmasikan pembayaran Anda di sini
        </p>
        <p style="color: #595959; font-weight: bold;">Saya sudah menerima pesanan saya, tetapi salah satunya hilang. Apa yang harus saya lakukan?</p>
        <p style="color: #595959;">Kami mohon maaf sebesar-besarnya! Silakan kirimkan ID pesanan Anda dan barang yang tidak Anda terima ke order@fmd.co.id
        </p>
        <p style="color: #595959;">
            <span style="font-weight: bold;">CATATAN PENTING:</span> Harap diperhatikan bahwa transfer bank sangat disarankan untuk dilakukan melalui ATM, bukan melalui internet banking karena sistem kliring memiliki batas waktu tertentu untuk internet banking.
        </p>
    </div>
</div>

        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // JavaScript to toggle the search form visibility when the icon is clicked
        document.getElementById("search-icon-toggle").addEventListener("click", function() {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });
    });
</script>
@endsection
