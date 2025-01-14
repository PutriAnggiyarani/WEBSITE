@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Tambah Voucher</h4>
                <h6>Tambah Voucher Baru</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Nama Voucher</label>
                            <input type="text" placeholder="Nama Voucher">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Kriteria</label>
                            <input type="text" placeholder="Kriteria">
                        </div>
                    </div>
                    <!-- <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="syaratKetentuan">Syarat & Ketentuan</label>
                            <textarea id="syaratKetentuan" placeholder="Syarat & Ketentuan" class="form-control"
                                style="width: 100%; height: 200px; font-family: Josefin Sans, serif;"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-addvoucher me-2">Submit</a>
                        <a href="{{ url('/addvoucher') }}" class="btn btn-cancel">Batal</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
