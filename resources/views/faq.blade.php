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
            <h3 class="fw-bold mb-0 text-center font-weight: bold;" style="color: #66525E;">FAQ</h3>
            <div class="row">

    <!-- Elemen Teks -->
    <div class="col-12 mt-3">
        <p style="color: #595959; font-weight: bold;">APAKAH SAYA PERLU AKUN UNTUK MEMESAN?</p>
        <p style="color: #595959;">Anda dapat memesan sebagai "Tamu", tetapi kami akan mengarahkan Anda untuk mendaftarkan akun agar proses pembayaran dan pembayaran lebih cepat. Anda dapat memeriksa status pesanan dan tidak perlu memasukkan kembali detail pelanggan setiap kali ingin melakukan pembelian.
        </p>
        <p style="color: #595959; font-weight: bold;">SAYA LUPA KATA SANDI SAYA. APA YANG HARUS SAYA LAKUKAN?</p>
        <p style="color: #595959;">Klik tautan "Lupa Kata Sandi?" di Halaman LOGIN dan ikuti petunjuknya.
        </p>
        <p style="color: #595959; font-weight: bold;">SAYA INGIN MEMESAN BARANG YANG SUDAH HABIS TERJUAL. APAKAH MUNGKIN?</p>
        <p style="color: #595959;">Tidak, tetapi kami akan memberi tahu Anda saat stok tersedia kembali. Pastikan Anda telah mendaftar sebagai anggota untuk mendapatkan informasi terbaru.
        </p>
        <p style="color: #595959; font-weight: bold;">DAPATKAH SAYA MEMASUKKAN ALAMAT YANG BERBEDA DI PROFIL SAYA?</p>
        <p style="color: #595959;">Ya. Harap tambahkan alamat baru Anda di bawah: profil -> alamat -> tambahkan alamat baru.
        </p>
        <p style="color: #595959; font-weight: bold;">APAKAH FMD.ID MENERIMA PENGIRIMAN KE BANYAK ALAMAT?</p>
        <p style="color: #595959;">Sayangnya, kami tidak melayani pengiriman. Anda harus membuat pesanan yang berbeda untuk mengirimkannya ke alamat yang berbeda.
        </p>
        <p style="color: #595959; font-weight: bold;">APAKAH SAYA DAPAT MENGGANTI ALAMAT PENGIRIMAN SETELAH PESANAN SAYA DIKIRIM?</p>
        <p style="color: #595959;">Sayangnya, Anda tidak dapat melakukannya. Kami hanya mengirimkan pesanan ke alamat yang tertera.
        </p>
        <p style="color: #595959; font-weight: bold;">APAKAH SAYA DAPAT MENAMBAH BARANG SETELAH SAYA MELAKUKAN PEMBAYARAN?</p>
        <p style="color: #595959;">Sayangnya, Anda tidak dapat melakukannya, karena setelah melakukan pembayaran pesanan Anda akan tercatat. Jika Anda ingin menambahkan barang, silakan buat pesanan baru tanpa harus keluar dari sistem.
        </p>
        <p style="color: #595959; font-weight: bold;">APAKAH SAYA DAPAT MEMBAYAR DENGAN KARTU KREDIT?</p>
        <p style="color: #595959;">Ya, Anda dapat melakukannya. Anda dapat membayar di situs web kami dalam mata uang IDR. Keduanya diproses setelah mengklik tombol "Konfirmasi Pesanan".
        </p>
        <p style="color: #595959; font-weight: bold;">APAKAH SAYA DAPAT BERGABUNG SEBAGAI RESELLER?</p>
        <p style="color: #595959;">Sayangnya, tidak, saat ini kami belum menerima reseller baru.
        </p>
        <p style="color: #595959; font-weight: bold;">APAKAH MUNGKIN MENJADI MITRA UNTUK TOKO BUTTONSCARVES?</p>
        <p style="color: #595959;">Ya, mungkin. Jika Anda tertarik untuk menjadi mitra kami, silakan hubungi: info@fmd.co.id dengan subjek MITRA TOKO.
        </p>
        <br>
        <p style="color: #595959; font-weight: bold; display: inline;">Nama Lengkap Sesuai KTP:</p><span style="color: red; font-weight: bold;">*</span>
        <input type="text" placeholder="" style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
        <p style="color: #595959; font-weight: bold; display: inline;">Email:</p><span style="color: red; font-weight: bold;">*</span>
        <input type="text" placeholder="" style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
        <p style="color: #595959; font-weight: bold; display: inline;">Nomor HP Aktif:</p><span style="color: red; font-weight: bold;">*</span>
        <input type="text" placeholder="" style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
        <p style="color: #595959; font-weight: bold; display: inline;">Username Instagram:</p><span style="color: red; font-weight: bold;">*</span>
        <input type="text" placeholder="" style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
        <p style="color: #595959; font-weight: bold; display: inline;">Domisili:</p><span style="color: red; font-weight: bold;">*</span>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="domisili" id="surabaya" value="surabaya">
            <label class="form-check-label" for="surabaya">Surabaya</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="domisili" id="surabaya" value="surabaya">
            <label class="form-check-label" for="surabaya">Surabaya</label>
        </div>
        <p style="color: #595959; font-weight: bold; display: inline;">Upload foto OOTD memakai produk FMD.ID dengan pose Love Sign:</p><span style="color: red; font-weight: bold;">*</span>
        <input
            type="file"
            accept="image/*"
            style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"
            title="Pilih foto Anda">
        <p style="color: #595959; font-weight: bold; display: inline;">Apakah BSLady bersedia hadir ke lokasi event (Surabaya)?:</p><span style="color: red; font-weight: bold;">*</span>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="domisili" id="surabaya" value="surabaya">
            <label class="form-check-label" for="surabaya">Surabaya</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="domisili" id="surabaya" value="surabaya">
            <label class="form-check-label" for="surabaya">Surabaya</label>
        </div>
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
