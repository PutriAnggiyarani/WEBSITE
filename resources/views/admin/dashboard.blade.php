@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="{{ url('assets/admin/img/icons/clothing.svg') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="556.00">55,6.00</span></h5>
                        <h6>Total Product</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="{{ url('assets/admin/img/icons/sold.svg') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="235.00">2,35.00</span></h5>
                        <h6>Total Product Sold</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><img src="{{ url('assets/admin/img/icons/money.svg') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters-total" data-count="25578656.00">25.578.656,00</span></h5>
                        <h6>Total Transactions</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="{{ url('assets/admin/img/icons/users2.svg') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="255.00">25,5.00</span></h5>
                        <h6>Total Customer</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 col-sm-12 col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Purchase & Sales</h5>
                        <div class="graph-sets">
                            <ul>
                                <li>
                                    <span>Sales</span>
                                </li>
                                <li>
                                    <span>Purchase</span>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    2024 <img src="{{ url('assets/admin/img/icons/dropdown.svg') }}" alt="img" class="ms-2">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="sales_charts"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Recently Added Products</h4>
                        <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a href="productlist.html" class="dropdown-item">Product List</a>
                                </li>
                                <li>
                                    <a href="addproduct.html" class="dropdown-item">Product Add</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Products</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="productimgname">
                                            <a href="productlist.html" class="product-img">
                                                <img src="{{ url('assets/admin/img/product/button up charm.png') }}"
                                                    alt="product">
                                            </a>
                                            <a href="productlist.html">Button Up Charm</a>
                                        </td>
                                        <td>Rp 185.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="productimgname">
                                            <a href="productlist.html" class="product-img">
                                                <img src="{{ url('assets/admin/img/product/Hijab Paris Premium.png') }}"
                                                    alt="product">
                                            </a>
                                            <a href="productlist.html">Hijab Paris Premium</a>
                                        </td>
                                        <td>Rp 185.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="productimgname">
                                            <a href="productlist.html" class="product-img">
                                                <img src="{{ url('assets/admin/img/product/serenade stripes.png') }}"
                                                    alt="product">
                                            </a>
                                            <a href="productlist.html">Serenade Stripes</a>
                                        </td>
                                        <td>Rp 185.000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="productimgname">
                                            <a href="productlist.html" class="product-img">
                                                <img src="{{ url('assets/admin/img/product/hijab pashmina inner.png') }}"
                                                    alt="product">
                                            </a>
                                            <a href="productlist.html">Hijab Pashmina Inner</a>
                                        </td>
                                        <td>Rp 185.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
