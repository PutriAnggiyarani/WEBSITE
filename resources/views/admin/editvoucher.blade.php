@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Edit Voucher</h4>
                <h6>Edit Voucher Anda</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Nama Voucher</label>
                            <input type="text" placeholder="GRATIS ONGKIR">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Kriteria</label>
                            <input type="text" placeholder="UNTUK PENGGUNA BARU">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Deskripsi Produk</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-addvoucher me-2">Submit</a>
                        <a href="{{url('promo')}}" class="btn btn-cancel">Batal</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection