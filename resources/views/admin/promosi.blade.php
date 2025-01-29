@extends ('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Pengaturan Promosi</h4>
                <h6>Kelola Pengaturan Promosi</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h4>Banner Kategori</h4>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="assets/admin/img/icons/upload.svg" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h4>Voucher Pengguna</h4>
                    <div class="page-btn ms-auto">
                        <a href="{{ url('/addvoucher')}}" class="btn btn-added"><img
                                src="{{ url('assets/admin/img/icons/plus.svg') }}" alt="img" class="me-1">Tambah Voucher
                            Baru</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Voucher</th>
                                <th>Kriteria</th>
                                <th>Syarat & Ketentuan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>GRATIS ONGKIR</td>
                                <td>UNTUK PENGGUNA BARU</td>
                                <td>
                                    <ul>
                                        <li>Untuk Semua produk</li>
                                        <li>Berlaku untuk pembelian pertama</li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <a class="me-3" href="{{ url('/detailvoucher') }}"><img
                                            src="{{ url('assets/admin/img/icons/eye1.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{ url('/editvoucher') }}"><img
                                            src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);"><img
                                            src="{{ url('assets/admin/img/icons/delete1.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CASHBACK 30%</td>
                                <td>UNTUK PEMBELIAN MIN. RP. 500.00</td>
                                <td>
                                    <ul>
                                        <li>01/01/2025 - 07/01/2025</li>
                                        <li>Untuk Semua produk</li>
                                        <li>Berlaku untuk pembelian pertama</li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <a class="me-3" href="{{ url('/detailvoucher') }}"><img
                                            src="{{ url('assets/admin/img/icons/eye1.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{ url('/editvoucher') }}"><img
                                            src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection