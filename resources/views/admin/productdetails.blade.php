@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Details</h4>
                <h6>Full details of a product</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="bar-code-view">
                            <img src="{{url('assets/admin/img/barcode1.png') }}" alt="barcode">
                            <a class="printimg">
                                <img src="{{url('assets/admin/img/icons/printer.svg') }}" alt="print">
                            </a>
                        </div>
                        <div class="productdetails">
                            <ul class="product-bar">
                                <li>
                                    <h4>Product</h4>
                                    <h6>Denim Stripe Vest</h6>
                                </li>
                                <li>
                                    <h4>Category</h4>
                                    <h6>Shirt</h6>
                                </li>
                                <li>
                                    <h4>Quantity</h4>
                                    <h6>50</h6>
                                </li>
                                <li>
                                    <h4>Price</h4>
                                    <h6>Rp 185.000</h6>
                                </li>
                                <li>
                                    <h4>Ukuran</h4>
                                    <h6>S, M</h6>
                                </li>
                                <li>
                                    <h4>Warna</h4>
                                    <h6>
                                        <div class="color-box" style="background-color: red;"></div>
                                        <div class="color-box" style="background-color: green;"></div>
                                        <div class="color-box" style="background-color: blue;"></div>
                                    </h6>
                                </li>
                                <li>
                                    <h4>Description</h4>
                                    <h6>Denim Stripe Vest adalah sejenis pakaian yang menggabungkan elemen desain dari
                                        kemeja denim dan vest dengan pola garis-garis (stripe). Meskipun nama "vest"
                                        umumnya merujuk pada pakaian tanpa lengan yang biasanya dipakai di atas kemeja,
                                        istilah ini bisa menunjukkan interpretasi desain yang lebih luas, tergantung
                                        pada pembuatannya.</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="slider-product-details">
                            <div class="owl-carousel owl-theme product-slide">
                                <div class="slider-product">
                                    <img src="{{url('assets/admin/img/product/product1.png') }}" alt="img">
                                    <h4>Denim Stripe Vest.jpg</h4>
                                    <h6>581kb</h6>
                                </div>
                                <div class="slider-product">
                                    <img src="{{url('assets/admin/img/product/product1.png') }}" alt="img">
                                    <h4>Denim Stripe Vest.jpg</h4>
                                    <h6>581kb</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card p-3 d-flex align-items-left">
                    <h4>Ulasan Pembeli</h4>
                    <div class="d-flex align-items-center">
                        <span class="fa fa-star checked rating-icon"></span>
                        <h6 class="rating-value mb-0 ms-2">5.0</h6>
                        <p class="rating-subtext mb-0 ms-1">/5.0</p>
                        <a href="javascript:void(0);" class="btn btn-submit ms-auto" style="font-family: Josefin Sans, serif;" >Lihat Semua Ulasan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <a href="{{ url('/product')}}" class="btn btn-cancel">Back</a>
            </div>
        </div>

    </div>
</div>
@endsection
