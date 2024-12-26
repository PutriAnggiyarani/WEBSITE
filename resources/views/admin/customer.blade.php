@extends('layout.admin.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>List Pelanggan</h4>
                <h6>Kelola Pelanggan Anda</h6>
            </div>
            <!-- <div class="page-btn">
                <a href="addcustomer.html" class="btn btn-added"><img src="{{ url('assets/admin/img/icons/plus.svg') }}"
                        alt="img">Add
                    Customer</a>
            </div> -->
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <!-- <a class="btn btn-filter" id="filter_search">
                                <img src="{{ url('assets/admin/img/icons/filter.svg') }}" alt="img">
                                <span><img src="{{ url('assets/admin/img/icons/closes.svg') }}" alt="img"></span>
                            </a> -->
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


                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id User</th>
                                <th>Nama Pelanggan</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <img src="{{ url('assets/admin/img/icons/delete.svg') }}" alt="img">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>C-FMD0001</td>
                                <td>Dewi Saputri</td>
                                <td>+6281234567890</td>
                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1165797e7c7062517469707c617d743f727e7c">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <!-- <a class="me-3" href="editcustomer.html">
                                        <img src="{{ url('assets/admin/img/icons/edit.svg') }}" alt="img">
                                    </a> -->
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
