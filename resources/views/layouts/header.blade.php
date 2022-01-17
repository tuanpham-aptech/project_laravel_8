<header class="header">
    <div class="top-header">
        <div class="container">
            @if(!Auth::user())
            <div class="row">
                <div class="col-md-6 col-sm-6 col-5 col-xs-6 col-lg-6">
                    <div class="top_info">
                        <div class="top_info-item top-info-phone">
                            <a href="#!"><i class="fa fa-phone-alt"></i> <span>0912117494</span></a>
                        </div>
                        <div class="brick"></div>
                        <div class="top_info-item top-info-email">
                            <a href="#!"><i class="fas fa-envelope"></i><span>example123@gmail.com</span></a>
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
                                <a href="{{route('signup')}}">
                                    <i class="fas fa-user-plus"></i> <span>Đăng ký</span>
                                </a>
                                <a href="{{route('login')}}">
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
                                <a href="{{route('show-form-send-link')}}">
                                    <i class="fas fa-exchange-alt"></i> <span>Thay đổi mật khẩu  </span>
                                </a>
                                <a href="{{route('logout-client')}}">
                                    <i class="fas fa-sign-out-alt"></i> <span>Đăng xuất</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="main-header">
        <div class="content_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-5 col-sm-3">
                        <div class="logo_header">
                            <a href="{{route('home')}}">
                                PHẠM <span>TUÂN</span>
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
                                <form action="{{route('search-client')}}" method="get">
                                    <input type="text" name="search" id="">
                                    <button type="submit" style="cursor: pointer" id="icon-search"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="search-form-mobile">
                                <span id="icon-search"><i class="fa fa-search"></i></span>
                            </div>
                            <!-- <div class="header-cart"> -->
                                <a href="{{route('cart')}}" class="header-icon">
                                    <div class="cart-icon">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="cart-info">
                                        <span >Giỏ hàng</span>
                                        <span id="cart-total">({{\Cart::getContent()->count()}})Sản phẩm</span>
                                    </div>
                                </a>
                            <!-- </div> -->
                            <div class="btn-menu">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>

                        <div class="cart-me">
                            <p>Không có sản phẩm nào </p>
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
                                <a href="{{route('news')}}">Giới thiệu </a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Liên hệ </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="bottom_header-nav">
                    <ul class="nav">
                        <li>
                            <a href="{{route('home')}}"><span>Trang chủ </span></a>
                        </li>
                        <li class="has-mega">
                            <a style="display:flex; align-items:center;justify-content:space-between;" href=""><span>Sản phẩm </span><i class="fas fa-chevron-down"></i></a>
                            <div class="mega-content">
                              <div class="level0-wrapper">
                                <div class="nav-block">
                                  <ul class="level0">
                                    @foreach ($categories as $cat )
                                    <li class="level1 item">
                                      <h2><a href="{{route('get-list-product',[$cat->c_slug,$cat->id])}}">{{$cat->c_name}}</a></h2>
                                    </li>
                                    @endforeach
                                  </ul>
                                </div>
                              </div>
                            </div>
                        </li>
                        <li>
                            <a href=""><span>Blog </span></a>
                        </li>
                        <li>
                            <a href="{{route('news')}}"><span>Tin tức </span></a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}"><span>Liên hệ  </span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

