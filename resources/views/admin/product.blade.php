@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <a href="{{ url('/addproduct')}}" class="btn btn-added"><img
                        src="{{ url('assets/admin/img/icons/plus.svg') }}" alt="img" class="me-1">Add New Product</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{ url('assets/admin/img/icons/filter.svg') }}" alt="img">
                                <span><img src="{{ url('assets/admin/img/icons/closes.svg') }}" alt="img"></span>
                            </a>
                        </div>
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

                <div class="card mb-0" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Product</option>
                                                <option>Macbook pro</option>
                                                <option>Orange</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Category</option>
                                                <option>Computers</option>
                                                <option>Fruits</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Sub Category</option>
                                                <option>Computer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Brand</option>
                                                <option>N/D</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12 ">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Price</option>
                                                <option>150.00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img
                                                    src="{{ url('assets/admin/img/icons/search-whites.svg') }}" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Product Name</th>
                                <th>Category </th>
                                <th>price</th>
                                <th>Qty</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product1.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Denim Stripe Vest</a>
                                </td>
                                <td>Shirt</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product2.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Button Up Charm</a>
                                </td>
                                <td>Shirt</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product3.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Pineapple</a>
                                </td>
                                <td>Shirt</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product4.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Strawberry</a>
                                </td>
                                <td>Shirt</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product5.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Avocat</a>
                                </td>
                                <td>Shirt</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product6.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Macbook Pro</a>
                                </td>
                                <td>Shirt</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product7.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Apple Earpods</a>
                                </td>
                                <td>Shirt</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product8.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">iPhone 11 </a>
                                </td>
                                <td>Shirt</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product9.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">samsung </a>
                                </td>
                                <td>Hijab</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product11.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Banana</a>
                                </td>
                                <td>Hijab</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ url('assets/admin/img/product/product10.png') }}" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Limon</a>
                                </td>
                                <td>Hijab</td>
                                <td>Rp 185.000</td>
                                <td>25</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="{{url('/productdetails') }}">
                                        <img src="{{ url('assets/admin/img/icons/eye.svg') }}" alt="img">
                                    </a>
                                    <a class="me-3" href="{{url('/editproduct') }}">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
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
