@include('admin.header')
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <nav class="navbar-default">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li class="{{Request::is('dashboard') ? 'active' : ''}}"><a href="#"><i class="fa fa-desktop"></i><span>Dashboard</span></a></li>
                            <li class="{{Request::is('admin/categories') ? 'active' : ''}}"><a href="{{route('categories')}}"><i class="fa fa-desktop"></i><span>{{Request::is('categories')}}Danh mục</span></a></li>
                            <li class="{{Request::is('admin/products') ? 'active' : ''}}"><a href="{{route('products')}}"><i class="fa fa-desktop"></i><span>{{Request::is('products')}} Sản phẩm</span></a></li>
                            <li class="{{Request::is('admin/transactions') ? 'active' : ''}}"><a href="{{route('list-transactions')}}"><i class="fa fa-desktop"></i><span>Thông tin đơn hàng </span></a></li>
                            <li class="{{Request::is('admin/users') ? 'active' : ''}}"><a href="{{route('list-users')}}"><i class="fa fa-desktop"></i><span>Người dùng </span></a></li>
                            <li class="{{Request::is('admin/articals') ? 'active' : ''}}"><a href="{{route('list-articals')}}"><i class="fa fa-desktop"></i><span>Tin tức </span></a></li>
                            <li class="{{Request::is('admin/users') ? 'active' : ''}}"><a href="{{route('list-users')}}"><i class="fa fa-desktop"></i><span>Liên hệ </span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-10">
                <div class="content">
                    @if(\Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>Thành công! </strong>{{\Session::get('success')}}
                        </div>
                    @endif
                    @if(\Session::has('danger'))
                        <div class="alert alert-danger" role="alert">
                            <strong>Thất bại!</strong>{{\Session::get('danger')}}
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</main>
@include('admin.footer')
@yield('js')

