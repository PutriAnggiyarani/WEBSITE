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
            <h3 class="fw-bold mb-0" style="color: #66525E;">FMD. ID Boutique</h3>
            <div class="col-12 col-md-4 mt-3 d-flex align-items-center order-1 order-md-2">
                <img src="{{ url('assets/images/pic-about-us.png') }}" alt="About Us" class="rounded-4 img-fluid" style="width: auto; height: 450px;">
            </div>
            <div class="col-12 col-md-8 mt-3 order-2 order-md-1">
                <p style="color: #595959;">FMD.ID Boutique adalah brand fashion muslimah yang berdedikasi untuk menghadirkan koleksi busana dan aksesoris yang elegan, syar’i, 
                    dan modern. Berdiri sejak tahun 2015 di Kota Bone, Sulawesi Selatan, FMD.ID Boutique telah berkembang menjadi salah satu UMKM yang 
                    diperhitungkan dalam industri fashion muslimah. Selama 9 tahun terakhir, butik ini telah mengalami pertumbuhan yang signifikan, dengan 
                    penjualan produk hijab mencapai 3000 hingga 5000 produk setiap bulannya, produk baju muslimah berkisar antara 500 hingga 1000 produk, 
                    serta aksesoris lainnya mencapai 100 hingga 1500 produk setiap bulan.
                </p>
                <br>
                <p style="color: #595959;">Kami memahami bahwa setiap muslimah memiliki gaya unik yang ingin tetap tampil anggun tanpa mengesampingkan nilai-nilai keislaman. 
                    Oleh karena itu, FMD.ID Boutique menawarkan beragam pilihan fashion yang dirancang dengan penuh perhatian terhadap detail, kenyamanan, 
                    dan kesopanan. Kami berkomitmen untuk menyediakan pakaian yang tidak hanya indah dipandang, tetapi juga nyaman digunakan dalam berbagai 
                    kesempatan, mulai dari pakaian kasual hingga busana formal.
                </p>
                <br>
                <p style="color: #595959;">Dengan berbagai pilihan gaya, ukuran, dan warna, kami percaya bahwa setiap wanita dapat tampil percaya diri dan memancarkan kepribadiannya 
                    melalui pilihan busana yang tepat. FMD.ID Boutique adalah tempat di mana fashion dan syariah bertemu, menciptakan harmoni dalam setiap 
                    penampilan muslimah masa kini.
                </p>
            </div>
        </div>
        <!-- Maps and Visit Us section -->
        <div class="row mt-3 h-100">
            <!-- Maps section -->
            <div class="col-12 col-md-8 mt-5">
                <img src="{{ url('assets/images/maps.png') }}" alt="Map" class="rounded-4 img-fluid" style="width: 1200px;">
            </div>
            
            <!-- Visit Us section -->
            <div class="col-12 col-md-4 mt-5">
                <h4 class="fw-bold" style="color: #66525E;">Kunjungi Kami</h4>
                <p class="mt-3" style="width: 74%; color: #595959;">FMD.ID Boutique siap melayani Anda dengan koleksi fashion muslimah terbaik setiap hari.</p>
                <div class="store-location">
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ url('assets/images/loc.png') }}" alt="" class="me-2">
                        <h6 class="mb-0 fw-bold" style="color: #595959;">Alamat</h6>
                    </div>
                    <h6 class="mb-0 mt-2 px-4" style="width: 74%; color: #595959;">Jl. Beringin Bone, Samping Bank BRI, Kecamatan Tanete Riattang, Kabupaten Bone, Sulawesi Selatan</h6>
                </div>
                <div class="time-ops">
                    <div class="d-flex align-items-center mt-4">
                        <img src="{{ url('assets/images/clock.png') }}" alt="" class="me-2">
                        <h6 class="mb-0 fw-bold" style="color: #595959;">Jam Operasional</h6>
                    </div>
                    <div class="d-flex align-items-center mt-3 px-4">
                        <p class="mb-0" style="width: 17%; color: #595959;">Senin</p>
                        <P class="mb-0" style="color: #595959;">: 11.00 - 21.00</P>
                    </div>
                    <div class="d-flex align-items-center mt-3 px-4">
                        <p class="mb-0" style="width: 17%; color: #595959;">Selasa</p>
                        <P class="mb-0" style="color: #595959;">: 11.00 - 21.00</P>
                    </div>
                    <div class="d-flex align-items-center mt-3 px-4">
                        <p class="mb-0" style="width: 17%; color: #595959;">Rabu</p>
                        <P class="mb-0" style="color: #595959;">: 11.00 - 21.00</P>
                    </div>
                    <div class="d-flex align-items-center mt-3 px-4">
                        <p class="mb-0" style="width: 17%; color: #595959;">Kamis</p>
                        <P class="mb-0" style="color: #595959;">: 11.00 - 21.00</P>
                    </div>
                    <div class="d-flex align-items-center mt-3 px-4">
                        <p class="mb-0" style="width: 17%; color: #595959;">Jumat</p>
                        <P class="mb-0" style="color: #595959;">: 11.00 - 21.00</P>
                    </div>
                    <div class="d-flex align-items-center mt-3 px-4">
                        <p class="mb-0" style="width: 17%; color: #595959;">Sabtu</p>
                        <P class="mb-0" style="color: #595959;">: 11.00 - 21.00</P>
                    </div>
                    <div class="d-flex align-items-center mt-3 px-4">
                        <p class="mb-0" style="width: 17%; color: #595959;">Minggu</p>
                        <P class="mb-0" style="color: #595959;">: 11.00 - 21.00</P>
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