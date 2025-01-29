@extends('layout.app')
@section('content')
<section id="about-us">
    <div class="container-fluid padding-side">
        <div class="search d-none d-lg-block d-lg-none me-4 mb-4 w-100" id="search-form">
            <form class="position-relative align-items-center">
                <a href="#" class="position-absolute top-50 start-0 translate-middle-y p-1 ms-3">
                    <i class="fa-solid fa-magnifying-glass" style="color: #667479;"></i>
                </a>
                <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2 ps-5"
                    placeholder="Search something here!" style="color: #99A2A5; width: 100%; max-width: 400px;" />
            </form>
        </div>
        <div class="row h-100">
            <h3 class="fw-bold mb-0 text-center font-weight: bold;" style="color: #66525E;">Privasi dan Kebijakan</h3>
            <br><br>

            <div class="row">

                <!-- Elemen Teks -->
                <div class="col-12 mt-3">
                    <p style="color: #595959; font-weight: bold;">BAGIAN 1 - APA YANG KAMI LAKUKAN DENGAN INFORMASI
                        ANDA?</p>
                    <p style="color: #595959;">Ketika Anda membeli sesuatu dari toko kami, sebagai bagian dari proses
                        jual beli, kami mengumpulkan informasi pribadi yang Anda berikan kepada kami seperti nama,
                        alamat, dan alamat email Anda.
                    </p>
                    <p style="color: #595959;">Saat Anda menjelajahi toko kami, kami juga secara otomatis menerima
                        alamat protokol internet (IP) komputer Anda untuk memberikan kami informasi yang membantu kami
                        memahami browser dan sistem operasi Anda.
                    </p>
                    <p style="color: #595959;">Pemasaran email (jika berlaku): Dengan izin Anda, kami dapat mengirimkan
                        email tentang toko kami, produk baru, dan pembaruan lainnya.
                    </p>
                    <br>

                    <p style="color: #595959; font-weight: bold;">BAGIAN 2 - PERSETUJUAN</p>
                    <P style="color: #595959; font-weight: bold;">Bagaimana kami mendapatkan persetujuan Anda?</P>
                    <p style="color: #595959;">Ketika Anda memberikan informasi pribadi kepada kami untuk menyelesaikan
                        transaksi, memverifikasi kartu kredit Anda, membuat pesanan, mengatur pengiriman, atau
                        mengembalikan pembelian, kami menganggap bahwa Anda menyetujui pengumpulan dan penggunaan
                        informasi tersebut untuk tujuan tersebut saja.
                    </p>
                    <p style="color: #595959;">Jika kami meminta informasi pribadi Anda untuk tujuan sekunder, seperti
                        pemasaran, kami akan meminta izin Anda secara langsung atau memberikan Anda kesempatan untuk
                        menolak.
                    </p>
                    <P style="color: #595959; font-weight: bold;">Bagaimana cara mencabut persetujuan saya?</P>
                    <p style="color: #595959;">Jika setelah Anda memberikan persetujuan, Anda berubah pikiran, Anda
                        dapat mencabut persetujuan Anda untuk kami menghubungi Anda, mengumpulkan, menggunakan, atau
                        mengungkapkan informasi Anda kapan saja dengan menghubungi kami di info@fmd.id.
                    </p>

                    <br>
                    <p style="color: #595959; font-weight: bold;">BAGIAN 3 - PENGUNGKAPAN </p>
                    <p style="color: #595959;">Kami dapat mengungkapkan informasi pribadi Anda jika diwajibkan oleh
                        hukum atau jika Anda melanggar Ketentuan Layanan kami.
                    </p>
                    <br>

                    <p style="color: #595959; font-weight: bold;">BAGIAN 4 - LAYANAN PIHAK KETIGA</p>
                    <p style="color: #595959;">Secara umum, penyedia pihak ketiga yang kami gunakan hanya akan
                        mengumpulkan, menggunakan, dan mengungkapkan informasi Anda sejauh diperlukan untuk memungkinkan
                        mereka melakukan layanan yang mereka berikan kepada kami.
                    </p>
                    <p style="color: #595959;">Namun, penyedia layanan pihak ketiga tertentu, seperti gateway pembayaran
                        dan pemroses transaksi pembayaran lainnya, memiliki kebijakan privasi mereka sendiri terkait
                        informasi yang harus kami berikan kepada mereka untuk transaksi pembelian Anda.
                    </p>
                    <p style="color: #595959;">Untuk penyedia ini, kami menyarankan Anda membaca kebijakan privasi
                        mereka sehingga Anda dapat memahami cara informasi pribadi Anda akan ditangani oleh mereka.
                    </p>
                    <p style="color: #595959;">Perlu diingat, beberapa penyedia mungkin berlokasi atau memiliki
                        fasilitas di yurisdiksi yang berbeda dari Anda atau kami. Jadi, jika Anda memilih untuk
                        melanjutkan transaksi yang melibatkan layanan penyedia pihak ketiga, maka informasi Anda mungkin
                        tunduk pada hukum yurisdiksi tempat penyedia layanan atau fasilitas tersebut berada.
                    </p>
                    <p style="color: #595959;">YSebagai contoh, jika Anda berada di Indonesia dan transaksi Anda
                        diproses oleh gateway pembayaran yang berlokasi di luar negeri, maka informasi pribadi Anda yang
                        digunakan untuk menyelesaikan transaksi tersebut dapat diungkapkan berdasarkan peraturan di
                        negara tersebut.
                    </p>
                    <p style="color: #595959;">Setelah Anda meninggalkan situs web toko kami atau diarahkan ke situs web
                        atau aplikasi pihak ketiga, Anda tidak lagi diatur oleh Kebijakan Privasi ini atau Ketentuan
                        Layanan situs web kami.
                    </p>
                    <br>

                    <p style="color: #595959; font-weight: bold;">BAGIAN 5 - PERUBAHAN TERHADAP KEBIJAKAN PRIVASI INI
                    </p>
                    <p style="color: #595959;">Kami berhak untuk mengubah kebijakan privasi ini kapan saja, jadi harap
                        tinjau secara berkala. Perubahan dan klarifikasi akan berlaku segera setelah diposting di situs
                        web. Jika kami membuat perubahan material pada kebijakan ini, kami akan memberi tahu Anda di
                        sini bahwa kebijakan tersebut telah diperbarui, sehingga Anda mengetahui informasi apa yang kami
                        kumpulkan, bagaimana kami menggunakannya, dan dalam keadaan apa, jika ada, kami menggunakannya
                        dan/atau mengungkapkannya.
                    </p>
                    <p style="color: #595959;">Jika toko kami diakuisisi atau digabungkan dengan perusahaan lain,
                        informasi Anda mungkin akan dipindahkan ke pemilik baru sehingga kami dapat terus menjual produk
                        kepada Anda.
                    </p>
                    <br>

                    <p style="color: #595959; font-weight: bold;">PERTANYAAN DAN INFORMASI KONTAK
                    </p>
                    <p style="color: #595959;">Jika Anda ingin mengakses, memperbaiki, mengubah, atau menghapus
                        informasi pribadi yang kami miliki tentang Anda, mengajukan keluhan, atau hanya ingin informasi
                        lebih lanjut, hubungi Petugas Kepatuhan Privasi kami di info@fmd.id.
                    </p>
                    <p style="color: #595959;">[Re: Petugas Kepatuhan Privasi]
                    </p>

                    <br>
                    <form id="form" onsubmit="return validateForm()">
                        <p style="color: #595959; font-weight: bold; display: inline;">Nama Lengkap Sesuai KTP:</p><span
                            style="color: red; font-weight: bold;">*</span>
                        <input id="namaLengkap" type="text"
                            style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                        <br>
                        <p style="color: #595959; font-weight: bold; display: inline;">Email:</p><span
                            style="color: red; font-weight: bold;">*</span>
                        <input id="email" type="text"
                            style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                        <br>
                        <p style="color: #595959; font-weight: bold; display: inline;">Nomor HP Aktif:</p><span
                            style="color: red; font-weight: bold;">*</span>
                        <input id="nomorHP" type="text"
                            style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                        <br>
                        <p style="color: #595959; font-weight: bold; display: inline;">Username Instagram:</p><span
                            style="color: red; font-weight: bold;">*</span>
                        <input id="instagram" type="text"
                            style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                        <br>
                        <p style="color: #595959; font-weight: bold; display: inline;">Domisili:</p><span
                            style="color: red; font-weight: bold;">*</span>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="domisili" id="surabaya" value="Surabaya">
                            <label class="form-check-label" for="surabaya">Surabaya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="domisili" id="jakarta" value="Jakarta">
                            <label class="form-check-label" for="jakarta">Jakarta</label>
                        </div>

                        <p style="color: #595959; font-weight: bold; display: inline;">Upload foto OOTD memakai produk
                            FMD.ID dengan pose Love Sign:</p><span style="color: red; font-weight: bold;">*</span>
                        <input id="fotoOOTD" type="file" accept="image/*"
                            style="width: 100%; margin-top: 8px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"
                            title="Pilih foto Anda">

                        <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                            <button type="submit"
                                style="padding: 10px 20px; background-color: #66525E; color: white; border: none; border-radius: 30px; font-size: 16px; cursor: pointer;">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // JavaScript to toggle the search form visibility when the icon is clicked
        document.getElementById("search-icon-toggle").addEventListener("click", function () {
            var searchForm = document.getElementById("search-form");
            searchForm.classList.toggle("d-none");
        });
    });
    function validateForm() {
        const namaLengkap = document.getElementById("namaLengkap").value.trim();
        const email = document.getElementById("email").value.trim();
        const nomorHP = document.getElementById("nomorHP").value.trim();
        const instagram = document.getElementById("instagram").value.trim();
        const domisili = document.querySelector('input[name="domisili"]:checked');
        const fotoOOTD = document.getElementById("fotoOOTD").files.length;
        const hadirEvent = document.querySelector('input[name="hadirEvent"]:checked');

        if (!namaLengkap || !email || !nomorHP || !instagram || !domisili || !fotoOOTD || !hadirEvent) {
            alert("Lengkapi Form!");
            return false;
        }

        alert("Your Messages has been sent");
        return true;
    }
</script>
@endsection