  <!-- Navigation Bar-->
        <header id="topnav" style="background-color:#5089de ">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">                  
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="icon-user"></i>
                                <span class="pro-user-name ml-1">
                                 Admin <i class="mdi mdi-chevron-down"></i> 
                                </span>
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                
                                <a href="{{route('dang-xuat')}}" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- LOGO -->
                    <div class="logo-box" >
                        <a href="{{route('trang-chu.trangchu-cms')}}" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{asset('assets/images/logo.png')}}" alt="" height="50">
                                <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="28">
                            </span>
                        </a>
                    </div>

                    <h2 class="title-cms">Quizz Game CMS</h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid" style="width: 12%;">
                   <div class="sidenav">
                      <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{route('linh-vuc.danh-sach')}}" style="margin-left: 20px;" >
                                    <i class="la la-cube"></i>Lĩnh Vực </a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('cau-hoi.danh-sach')}}">
                                    <i class="la la-share-alt"></i>Câu Hỏi</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{route('nguoi-choi.danh-sach')}}"> <i class="  mdi mdi-account-group"></i>Người Chơi</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('quan-tri-vien.danh-sach')}}"> <i class=" mdi mdi-account-key"></i>Quản Trị Viên</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('goi-credit.danh-sach')}}"> <i class="la la-diamond"></i>Gói Credit</a> 
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('cau-hinh-diem-cau-hoi.danh-sach')}}">
                                    <i class=" la la-cog"></i>Cấu Hình Điểm</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('cau-hinh-app.danh-sach')}}">
                                    <i class=" la la-cog"></i>Cấu Hình App</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('cau-hinh-tro-giup.danh-sach')}}">
                                    <i class="  la la-wechat"></i>Cấu Hình Trợ Giúp</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('lich-su-mua-credit.danh-sach')}}">
                                    <i class="la la-diamond"></i>Lịch Sử Mua Credit</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('luot-choi.danh-sach')}}">
                                    <i class="  la la-gittip"></i>Lượt Chơi</a>
                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('chi-tiet-luot-choi.danh-sach')}}">
                                    <i class=" la la-certificate"></i>Chi Tiết Lượt Chơi</a>
                               
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->