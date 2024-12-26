@extends ('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Detail Transaksi</h4>
                <h6>Lihat Detail Transaksi</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-sales-split">
                    <h2>No Order : SL0101</h2>
                    <ul>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ url('assets/admin/img/icons/edit.svg') }}"
                                    alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ url('assets/admin/img/icons/pdf.svg') }}"
                                    alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ url('assets/admin/img/icons/excel.svg') }}"
                                    alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ url('assets/admin/img/icons/printer.svg') }}"
                                    alt="img"></a>
                        </li>
                    </ul>
                </div>
                <div class="invoice-box table-height"
                    style="max-width: 1600px;width:100%;overflow: auto;margin:15px auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
                    <table cellpadding="0" cellspacing="0" style="width: 100%;line-height: inherit;text-align: left;">
                        <tbody>
                            <tr class="top">
                                <td colspan="6" style="padding: 5px;vertical-align: top;">
                                    <table style="width: 100%;line-height: inherit;text-align: left;">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                    <font style="vertical-align: inherit;margin-bottom:25px;">
                                                        <font
                                                            style="vertical-align: inherit;font-size:14px;color:#987070;font-weight:600;line-height: 35px;font-family: Josefin Sans, serif;">
                                                            Customer Info</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            ahmad zubradun</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            +6281234567890</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            Jl. Ir. Haji Juanda, Kabupaten Sidoarjo, Jawa Timur 61253</font>
                                                    </font><br>
                                                </td>
                                                <td
                                                    style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                    <font style="vertical-align: inherit;margin-bottom:25px;">
                                                        <font
                                                            style="vertical-align: inherit;font-size:14px;color:#987070;font-weight:600;line-height: 35px;font-family: Josefin Sans, serif; ">
                                                            Company Info</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            FMD ID </font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            +6281234567890</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            Jl. Beringin Bone, Samping Bank BRI, Kecamatan Tanete
                                                            Riattang, Kabupaten Bone, Sulawesi Selatan</font>
                                                    </font><br>
                                                </td>
                                                <td
                                                    style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                    <font style="vertical-align: inherit;margin-bottom:25px;">
                                                        <font
                                                            style="vertical-align: inherit;font-size:10px;color:#987070;font-weight:600;line-height: 35px; font-family: Josefin Sans, serif;">
                                                            Invoice Info</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            Order Id </font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            Tanggal</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            Status</font>
                                                    </font><br>
                                                </td>
                                                <td
                                                    style="padding:5px;vertical-align:top;text-align:right;padding-bottom:20px">
                                                    <font style="vertical-align: inherit;margin-bottom:25px;">
                                                        <font
                                                            style="vertical-align: inherit;font-size:14px;color:#987070;font-weight:600;line-height: 35px; ">
                                                            &nbsp;</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            SL0101 </font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            01-Jan-2024</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font
                                                            style="vertical-align: inherit;font-size: 14px;color:#2E7D32;font-weight: 400;font-family: Josefin Sans, serif;">
                                                            Selesai</font>
                                                    </font><br>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr class="heading " style="background: #F3F2F7;">
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; font-family: Josefin Sans, serif; ">
                                    No
                                </td>
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; font-family: Josefin Sans, serif; ">
                                    Id Produk
                                </td>
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; font-family: Josefin Sans, serif; ">
                                    Nama Produk
                                </td>
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; font-family: Josefin Sans, serif;">
                                    QTY
                                </td>
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; font-family: Josefin Sans, serif;">
                                    Harga
                                </td>
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; font-family: Josefin Sans, serif;">
                                    Sub total
                                </td>
                            </tr>
                            <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    1
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    FP00001
                                </td>
                                <td style="padding: 10px;vertical-align: top; display: flex;align-items: center;font-family: Josefin Sans, serif;">
                                    <img src="{{ url('assets/admin/img/product/product1.png') }}" alt="img" class="me-2"
                                        style="width:40px;height:40px;">
                                    Denim Stripe Vest
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    1
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    Rp 185.000
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    Rp 185.000
                                </td>
                            </tr>
                            <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    2
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    FP00002
                                </td>
                                <td style="padding: 10px;vertical-align: top; display: flex;align-items: center;font-family: Josefin Sans, serif;">
                                    <img src="{{ url('assets/admin/img/product/product2.png') }}" alt="img" class="me-2"
                                        style="width:40px;height:40px;">
                                    Button Up Charm
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif;">
                                    1
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif;">
                                    Rp 185.000
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif;">
                                    Rp 185.000
                                </td>
                            </tr>
                            <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    3
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif; ">
                                    FP00003
                                </td>
                                <td style="padding: 10px;vertical-align: top; display: flex;align-items: center;font-family: Josefin Sans, serif;">
                                    <img src="{{ url('assets/admin/img/product/product3.png') }}" alt="img" class="me-2"
                                        style="width:40px;height:40px;">
                                    Kerudung
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif;">
                                    1
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif;">
                                    Rp 185.000
                                </td>
                                <td style="padding: 10px;vertical-align: top; font-family: Josefin Sans, serif;">
                                    Rp 185.000
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Discount</label>
                            <input type="text" placeholder="Gratis Ongkir">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Biaya Pengiriman</label>
                            <input type="text" placeholder="25.000">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Pengiriman</label>
                            <input type="text" placeholder="Regular">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>No. Resi Pengiriman</label>
                            <input type="text" placeholder="JNT00000001">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12" style="font-family: Josefin Sans, serif;">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="select">
                                <option>Choose Status</option>
                                <option>Selesai</option>
                                <option>Proses</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="total-order w-100 m-auto mb-4">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <h4 class="text-end">Total Pesanan ( 4 Barang) :</h4>
                                        <h4 class="text-end">Rp 740.000</h4>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <h4 class="text-end">Biaya Pengiriman :</h4>
                                        <h4 class="text-end">Rp 25.000</h4>
                                    </li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <h4 class="text-end">Voucher Diskon :</h4>
                                        <h4 class="text-end">Rp 25.000</h4>
                                    </li>
                                    <li class="d-flex justify-content-between total">
                                        <h4 class="text-end">Total Pesanan :</h4>
                                        <h4 class="text-end">Rp 740.000</h4>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <h4 class="text-end">Metode Pembayaran :</h4>
                                        <h4 class="text-end">Bank BCA</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
