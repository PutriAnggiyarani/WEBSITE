<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="FMD - ID">
    <meta name="robots" content="noindex, nofollow">
    <title>FMD</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/admin/img/favicon.jpg') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/animate.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/plugins/owlcarousel/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/admin/css/style.css') }}">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="{{ url('assets/admin/img/logo.png') }}" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="{{ url('assets/admin/img/favicon.jpg') }}" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search Here ...">
                                <div class="search-addon">
                                    <span><img src="{{ url('assets/admin/img/icons/closes.svg') }}" alt="img"></span>
                                </div>
                            </div>
                            <!-- <a class="btn" id="searchdiv"><img src="{{ url('assets/img/icons/search.svg') }}"
                                    alt="img"></a> -->
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src="{{ url('assets/admin/img/icons/notification-bing.svg') }}" alt="img"> <span
                            class="badge rounded-pill">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ url('assets/img/profiles/avatar-1.png') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Putri</span> added
                                                    new product <span class="noti-title">Hijab Pashmina Inner</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ url('assets/admin/img/profiles/avatar-03.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Intan Permata</span>
                                                    changed the product name <span class="noti-title">Hijab Pashmina
                                                        Premium</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ url('assets/admin/img/profiles/avatar-06.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Rizka Rama</span>
                                                    added product<span class="noti-title">
                                                        Serenade Stripes</span> and <span class="noti-title">
                                                        Button Up Charm</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ url('assets/admin/img/profiles/avatar-17.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Ahmad Syaifuddin</span>
                                                    added new banner <span class="noti-title">Promo Bulan Agustus</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ url('assets/admin/img/profiles/avatar-13.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Zulfikar Rahmad</span>
                                                    added new banner<span class="noti-title">Promo potong 20%</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="{{ url('assets/admin/img/profiles/avatar-1.png') }}" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="{{ url('assets/admin/img/profiles/avatar-1.png') }}"
                                        alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>Putri Rohmatun</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="{{ url('/profile')}}"> <i class="me-2"
                                    data-feather="user"></i> My
                                Profile</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0" href="{{ url('/loginadmin')}}"><img dmin
                                    src="{{ url('assets/admin/img/icons/log-out.svg') }}" class="me-2"
                                    alt="img">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ url('/profile')}}">My Profile</a>
                    <a class="dropdown-item" href="{{ url('/loginadmin')}}">Logout</a>
                </div>
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                            <a href="{{ url('/dashboard') }}"><img
                                    src="{{ url('assets/admin/img/icons/dashboard.svg') }}"
                                    alt="img"><span>Dashboard</span></a>
                        </li>
                        <li class="{{ Request::is('product*') ? 'active' : '' }}">
                            <a href="{{ url('/product') }}"><img src="{{ url('assets/admin/img/icons/product.svg') }}"
                                    alt="img"><span>Product</span></a>
                        </li>
                        <li class="{{ Request::is('listcategory*') ? 'active' : '' }}">
                            <a href="{{ url('/listcategory') }}"><i data-feather="layers"></i><span>Category</span></a>
                        </li>
                        <li class="{{ Request::is('transaction*') ? 'active' : '' }}">
                            <a href="{{ url('/transaction') }}"><img
                                    src="{{ url('assets/admin/img/icons/transaksi.png') }}"
                                    alt="img"><span>Transaction</span></a>
                        </li>
                        <li class="{{ Request::is('customer*') ? 'active' : '' }}">
                            <a href="{{ url('/customer') }}"><img src="{{ url('assets/admin/img/icons/user.png') }}"
                                    alt="img"><span>Customer</span></a>
                        </li>
                        <li class="{{ Request::is('chat*') ? 'active' : '' }}">
                            <a href="{{ url('/chat') }}"><img src="{{ url('assets/admin/img/icons/chats.png') }}"
                                    alt="img"><span>Chat</span></a>
                        </li>
                        <li class="{{ Request::is('promo*') ? 'active' : '' }}">
                            <a href="{{ url('/promo') }}"><img src="{{ url('assets/admin/img/icons/promo.png') }}"
                                    alt="img"><span>Promosi</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('content')

    </div>


    <script src="{{ url('assets/admin/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ url('assets/admin/js/feather.min.js') }}"></script>

    <script src="{{ url('assets/admin/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ url('assets/admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ url('assets/admin/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ url('assets/admin/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ url('assets/admin/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/admin/plugins/apexchart/chart-data.js') }}"></script>

    <script src="{{ url('assets/admin/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ url('assets/admin/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

    <script src="{{ url('assets/admin/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ url('assets/admin/plugins/sweetalert/sweetalerts.min.js') }}"></script>

    <script src="{{ url('assets/admin/js/script.js') }}"></script>
</body>

</html>