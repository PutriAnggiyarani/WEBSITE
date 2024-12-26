@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>List Kategori</h4>
                <h6>Kelola Kategori Anda</h6>
            </div>
            <div class="page-btn">
                <a href="{{ url('/addproduct')}}" class="btn btn-added"><img
                        src="{{ url('assets/admin/img/icons/plus.svg') }}" alt="img" class="me-1">Tambah Kategori Baru</a>
            </div>
        </div>

        <div class="card">
        <div class="card-body">
                <div class="card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Customer Code">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Customer Name">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12  ms-auto">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img
                                            src="{{ url('assets/admin/img/icons/search-whites.svg') }}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Banner</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/customer/customer5.jpg') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">B. Huber</a>
                                </td>
                                <td>589</td>
                                <td>B. Huber </td>
                                <td>123-456-888</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="c68eb3a4a3b486a3bea7abb6aaa3e8a5a9ab">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <<td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>KTOOO1</td>
                                <td>Hijab</td>
                                <td><img src="{{ asset('assets/images/ktg.png') }}" alt="Gambar"></td>
                                <td>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/eye.png') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
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
