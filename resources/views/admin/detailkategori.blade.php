@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Detail Kategori</h4>
                <h6>Lihat Detail Lengkap Kategori</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="productdetails">
                            <ul class="product-bar">
                                <li>
                                    <h4>Id Kategori</h4>
                                    <h6>Auto-generate</h6>
                                </li>
                                <li>
                                    <h4>Nama Kategori</h4>
                                    <h6>Hijab</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="productdetails">
                            <img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="{{ url('/listcategory')}}" class="btn btn-cancel"
                    style="background-color: #66525E; color: #fff;">Back</a>
            </div>
        </div>

    </div>
</div>
@endsection