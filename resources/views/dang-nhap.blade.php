<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>QuizGame</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
            
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{asset('assets/images/logo.png')}}" alt="" height="160"></span>
                                    </a>
                                   <h3 class="text-primary">
                                       @if(session('thongbao'))
                                            {{session('thongbao')}}
                                        @endif
                                   </h3>
                                </div>

                                <form action="{{route('xu-li-dang-nhap')}}" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group mb-3">
                                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                                        <input class="form-control" type="text" id="ten_dang_nhap" name="ten_dang_nhap" placeholder="Nhập tên đăng nhập" required="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="mat_khau">Mật khẩu</label>
                                        <input class="form-control" type="password" id="mat_khau" name="mat_khau" placeholder="nhập mật khẩu" required="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                            
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Forgot your password?</a></p>
                                <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-muted ml-1"><b class="font-weight-semibold">Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2019 &copy; DoraIQ by DinhThanh <a href="" class="text-muted"></a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min')}}"></script>
        
    </body>
</html>