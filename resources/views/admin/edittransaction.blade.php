@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Edit Sale</h4>
                <h6>Edit your sale details</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="row">
                                <div class="col-lg-10 col-sm-10 col-10">
                                    <select class="select">
                                        <option>Ahmad Zubradun</option>
                                        <option>Malik Ibrahim</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                    <div class="add-icon">
                                        <span><img src="{{ url('assets/img/icons/plus1.svg') }}" alt="img"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Date</label>
                            <div class="input-groupicon">
                                <input type="text" class="datetimepicker" value="10-02-2022">
                                <div class="addonset">
                                    <img src="{{ url('assets/img/icons/calendars.svg') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Supplier</label>
                            <select class="select">
                                <option>Store 1</option>
                                <option>Store 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Reference No.</label>
                            <div class="input-groupicon">
                                <input type="text" placeholder="Please type product code and select...">
                                <div class="addonset">
                                    <img src="{{ url('assets/img/icons/scanner.svg') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive mb-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product Name</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="productimgname">
                                        <a class="product-img">
                                            <img src="{{ url('assets/img/product/product1.png') }}" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Denim Stripe Vest</a>
                                    </td>
                                    <td>1.00</td>
                                    <td>Rp 185.000</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>Rp 185.000</td>
                                    <td>
                                        <a href="javascript:void(0);" class="delete-set"><img
                                                src="{{ url('assets/img/icons/delete.svg') }}" alt="svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="productimgname">
                                        <a class="product-img">
                                            <img src="{{ url('assets/img/product/product2.png') }}" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Button Up Charm</a>
                                    </td>
                                    <td>1.00</td>
                                    <td>Rp 185.000</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>Rp 185.000</td>
                                    <td>
                                        <a href="javascript:void(0);" class="delete-set"><img
                                                src="{{ url('assets/img/icons/delete.svg') }}" alt="svg"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="productimgname">
                                        <a class="product-img">
                                            <img src="{{ url('assets/img/product/product3.png') }}" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Hijab Paris Premium</a>
                                    </td>
                                    <td>1.00</td>
                                    <td>Rp 185.000</td>
                                    <td>10%</td>
                                    <td>10%</td>
                                    <td>Rp 185.000</td>
                                    <td>
                                        <a href="javascript:void(0);" class="delete-set"><img
                                                src="{{ url('assets/img/icons/delete.svg') }}" alt="svg"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Order Tax</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Discount</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Shipping</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="select">
                                <option>Choose Status</option>
                                <option>Completed</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="total-order w-100 max-widthauto m-auto mb-4">
                                <ul>
                                    <li>
                                        <h4>Order Tax</h4>
                                        <h5>$ 0.00 (0.00%)</h5>
                                    </li>
                                    <li>
                                        <h4>Discount </h4>
                                        <h5>$ 0.00</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="total-order w-100 max-widthauto m-auto mb-4">
                                <ul>
                                    <li>
                                        <h4>Shipping</h4>
                                        <h5>$ 0.00</h5>
                                    </li>
                                    <li class="total">
                                        <h4>Grand Total</h4>
                                        <h5>$ 1750.00</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2 confirm-updatetransaction">Submit</a>
                        <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection