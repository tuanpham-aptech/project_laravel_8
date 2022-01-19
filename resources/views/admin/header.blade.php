<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nội thất Phạm Tuân </title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('assets/admin/css/header.css?v=1')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/css/custom.css?v=1')}}" rel="stylesheet" />
    <link href="{{url('assets/admin/css/responsive.css?v=1')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CUSTOM STYLES-->
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'
        type='text/css' />
</head>
<body>
    <header class="header">
        <div class="top-header">
            <div class="container">
                @auth
                 @if(!Auth::user())
                 <div class="row">
                    <div class="col-md-6 col-sm-6 col-5 col-xs-6 col-lg-6">
                        <div class="top_info">
                            <div class="top_info-item top-info-phone">
                                <a href="#!"><i class="fa fa-phone-alt"></i> <span>0912117494</span></a>
                            </div>
                            <div class="brick"></div>
                            <div class="top_info-item top-info-email">
                                <a href="#!"><i class="fas fa-envelope"></i><span>tuanphamanh1998@gmail.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-7 col-xs-6 col-xs-12 col-lg-6">
                        <div class="top_pay">
                            <div class="top_info-item top_pay-money">
                                <a href="#!"><i class="far fa-check-circle"></i> <span>Thanh Toán</span></a>
                            </div>
                            <div class="brick"></div>
                            <div class="top_info-item top_pay-acount">
                                <a href="#!"><i class="fas fa-user"></i> <span>Tài khoản</span></a>
                                <div class="top-acount_sub">
                                    <a href="#!">
                                        <i class="fas fa-user-plus"></i> <span>Đăng ký</span>
                                    </a>
                                    <a href="#!">
                                        <i class="fas fa-sign-out-alt"></i> <span>Đăng nhập</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 @else
                 <div class="row">
                     <div class="col-md-6 col-sm-6 col-5 col-xs-6 col-lg-6">
                         <div class="top_info">
                             <div class="top_info-item top-info-phone">
                                 <a href="#!"><i class="fa fa-phone-alt"></i> <span>0912117494</span></a>
                             </div>
                             <div class="brick"></div>
                             <div class="top_info-item top-info-email">
                                 <a href="#!"><i class="fas fa-envelope"></i><span>{{Auth::user()->email}}</span></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-7 col-xs-6 col-xs-12 col-lg-6">
                         <div class="top_pay">
                             <div class="top_info-item top_pay-money">
                                 <a href="#!"><i class="far fa-check-circle"></i> <span>Thanh Toán</span></a>
                             </div>
                             <div class="brick"></div>
                             <div class="top_info-item top_pay-acount">
                                 <a href="#!"><i class="fas fa-user"></i> <span>{{Auth::user()->name}}</span></a>
                                 <div class="top-acount_sub">
                                     <a href="#!">
                                        <i class="fas fa-info-circle"></i> <span>Thông tin</span>
                                     </a>
                                     <a href="{{route('logout')}}">
                                         <i class="fas fa-sign-out-alt"></i> <span>Đăng xuất</span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 @endif
                @endauth
            </div>
        </div>
        <div class="main-header">
            <div class="content_header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-5 col-sm-3">
                            <div class="logo_header">
                                <a href="#!">
                                    Phạm Tuân
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 col-7 col-sm-9">
                            <div class="header-search">
                                <div class="collection-select">
                                    <a href="#!">
                                        <span>Tất cả </span><i class="fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="collection_sub-list ">
                                        <li><a href="">Sản phẩm mới </a></li>
                                        <li><a href="">Nội thất phòng ngủ </a></li>
                                        <li><a href="">Nội thất phòng khách </a></li>
                                        <li><a href="">Sản phẩm nổi bật </a></li>
                                        <li><a href="">Sản phẩm khuyến mại</a></li>
                                        <li><a href="">Trang chủ</a></li>
                                        <div class="collection_all"><a href="">Tất cả </a></div>
                                    </ul>
                                </div>
                                <div class="search_form">
                                    <form action="#">
                                        <input type="text" placeholder="Tìm kiếm theo tên " name="name" id="">
                                        <button type="submit" id="icon-search"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="search-form-mobile">
                                    <span id="icon-search"><i class="fa fa-search"></i></span>
                                </div>
                                <div class="btn-menu">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>

                        <div class="menu-select-mobi">
                            <ul>
                                <li>
                                    <a href="#!"><span>Trang chủ </span></a>
                                </li>
                                <li >
                                    <a href="#!" style="display:flex; align-items:center;justify-content:space-between;">
                                    <span >Sản phẩm</span><i class="fas fa-chevron-right icon-show"></i>
                                    </a>
                                    <div class="menu-sub-mobile">
                                        <a href=""><span>Nội thất phòng khách</span> </a>
                                        <a href=""><span>Nội thất phòng ngủ</span> </a>
                                        <a href=""><span>Nội thất phòng ngủ</span> </a>
                                        <a href=""><span>Sản phẩm khuyến mại</span></a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!">Blog </a>
                                </li>
                                <li>
                                    <a href="#!">Giới thiệu </a>
                                </li>
                                <li>
                                    <a href="#!">Liên hệ </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
