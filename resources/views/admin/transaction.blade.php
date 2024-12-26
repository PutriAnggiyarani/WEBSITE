@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>List Transaksi</h4>
                <h6>Kelola Transaksi Anda</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <!-- <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{ url('assets/admin/img/icons/filter.svg') }}" alt="img">
                                <span><img src="{{ url('assets/admin/img/icons/closes.svg') }}" alt="img"></span>
                            </a>
                        </div> -->
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{ url('assets/admin/img/icons/search-white.svg') }}"
                                    alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                        src="{{ url('assets/admin/img/icons/pdf.svg') }}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                        src="{{ url('assets/admin/img/icons/excel.svg') }}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                        src="{{ url('assets/admin/img/icons/printer.svg') }}" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Reference No">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Completed</option>
                                        <option>Paid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img
                                            src="{{ url('assets/admin/img/icons/search-whites.svg') }}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Pesanan</th>
                                <th>Tanggal</th>
                                <th>Nama Pelanggan</th>
                                <th>Status</th>
                                <th>Pengiriman</th>
                                <th>Total Pembayaran</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightred">Belum Bayar</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightyellow">Sedang Dikemas</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightred">Belum Bayar</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightblue">Dikirim</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightblack">Dibatalkan</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightgreen">Selesai</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightgreen">Selesai</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightred">Belum Bayar</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightred">Belum Bayar</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightred">Belum Bayar</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
                                            </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>FMD0001</td>
                                <td>19-Nov-2024</td>
                                <td>Dewi Saputri</td>
                                <td><span class="badges bg-lightred">Belum Bayar</span></td>
                                <td>Reguler</td>
                                <td>Rp 740.000</td>
                                <td class="text-center">
                                            <a class="me-3" href="{{ url('/transactiondetail') }}"><img
                                                src="{{ url('assets/admin/img/icons/eye1.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3" href="{{ url('/edittransaction') }}"><img
                                                src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                                alt="img">
                                            </a>
                                            <a class="me-3 " href="javascript:void(0);"><img
                                                src="{{ url('assets/admin/img/icons/delete1.svg') }}"
                                                alt="img">
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
