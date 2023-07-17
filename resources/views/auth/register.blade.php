<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Register</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('/') }}assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('/') }}assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('/') }}assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

            <div class="page-content fade-in-up">

                <div class="container">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-5">
                            <div class="bg-silver-300">
                                <div class="content">
                                    <div class="brand">
                                        {{-- <a class="link" href="index.html">AdminCAST</a> --}}
                                    </div>
                                    <form id="login-form" action="{{ route('register') }}" class="p-3" method="post">
                                        @csrf
                                        <h2 class="login-title">Signup</h2>
                                        <div class="form-group">
                                            <div class="input-group-icon right">
                                                <div class="input-icon"><i class="fa fa-user"></i></div>
                                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Your name" >
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group-icon right">
                                                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Your Email" >
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group-icon right">
                                                <div class="input-icon"><i class="fa fa-phone"></i></div>
                                                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" placeholder="Your phone" >
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group-icon right">
                                                <div class="input-icon"><i class="fa fa-map"></i></div>
                                                <input class="form-control @error('district') is-invalid @enderror" type="text" name="district" placeholder="Your district" >
                                                @error('district')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group-icon right">
                                                <div class="input-icon"><i class="fa fa-map"></i></div>
                                                <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" placeholder="Your country" >
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group-icon right">
                                                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group-icon right">
                                                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirm Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group d-flex justify-content-between">
                                            <label class="ui-checkbox ui-checkbox-info">
                                                <input type="checkbox">
                                                <span class="input-span"></span>Remember me</label>
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-info btn-block" type="submit">Signup</button>
                                        </div>

                                        <div class="text-center social-auth m-b-20">
                                            <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                                            <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                                            <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                            <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                            <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
                                        </div>
                                        <div class="text-center">Are you member?
                                            <a class="color-blue" href="{{ route('login') }}">Login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

    </div>

    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{ asset('/') }}assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('/') }}assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('/') }}assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{ asset('/') }}assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>




</body>

</html>
