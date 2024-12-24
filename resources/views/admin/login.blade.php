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

    <!-- <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}"> -->

    <!-- <link rel="stylesheet" href="{{ url('assets/plugins/select2/css/select2.min.css') }}"> -->

    <!-- <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datetimepicker.min.css') }}"> -->

    <!-- <link rel="stylesheet" href="{{ url('assets/css/dataTables.bootstrap4.min.css') }}"> -->

    <!-- <link rel="stylesheet" href="{{ url('assets/plugins/owlcarousel/owl.carousel.min.css') }}"> -->

    <!-- <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/all.min.css') }}"> -->

    <link rel="stylesheet" href="{{ url('assets/admin/css/login.css') }}">
</head>


<!-- <a href="{{ url('https://front.codes/')}}" class="logo" target="_blank">
    <img src="{{ url('https://assets.codepen.io/1462889/fcy.png')}}" alt="">
</a> -->

<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <!-- <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6> -->
                    <!-- <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                    <label for="reg-log"></label> -->
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Log In</h4>
                                        <div class="form-group">
                                            <input type="email" name="logemail" class="form-style"
                                                placeholder="Your Email" id="logemail" autocomplete="off">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" name="logpass" class="form-style"
                                                placeholder="Your Password" id="logpass" autocomplete="off">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <a class="btn mt-4" id="submitBtn">submit</a>
                                        <!-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your
                                                password?</a></p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Sign Up</h4>
                                        <div class="form-group">
                                            <input type="text" name="logname" class="form-style"
                                                placeholder="Your Full Name" id="logname" autocomplete="off">
                                            <i class="input-icon uil uil-user"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="email" name="logemail" class="form-style"
                                                placeholder="Your Email" id="logemail" autocomplete="off">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" name="logpass" class="form-style"
                                                placeholder="Your Password" id="logpass" autocomplete="off">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <a href="{{ url('/') }}" class="btn mt-4">submit</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("submitBtn").addEventListener("click", function () {
        // Ambil input email dan password
        var email = document.getElementById("logemail").value;
        var password = document.getElementById("logpass").value;

        // Cek apakah email atau password kosong
        if (email === "" || password === "") {
            alert("Please fill out all fields!");
        } else {
            // Jika sudah diisi, arahkan ke halaman lain
            window.location.href = "{{url('/') }}";
        }
    });
</script>
