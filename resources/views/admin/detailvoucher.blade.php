@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Detail Voucher</h4>
                <h6>Lihat Detail Lengkap Voucher</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-10">
                <div class="card">
                    <div class="card-body">
                        <div class="productdetails">
                            <ul class="product-bar">
                                <li>
                                    <h4>Nama Voucher</h4>
                                    <h6>Auto-generate</h6>
                                </li>
                                <li>
                                    <h4>Kriteria</h4>
                                    <h6>Hijab</h6>
                                </li>
                                <li>
                                    <h4>Syarat Ketentuan</h4>
                                    <h6>
                                        <ul>
                                            <li>Untuk Semua Produk</li>
                                            <li>Berlaku untuk pembelian pertama</li>
                                        </ul>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="{{ url('/promo')}}" class="btn btn-cancel"
                    style="background-color: #66525E; color: #fff;">Back</a>
            </div>
        </div>

    </div>
</div>
@endsection