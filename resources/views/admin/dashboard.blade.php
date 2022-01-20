@extends('admin.index')
@section('css')
<style>
    .cards {
        margin:15px 0;
        width: 100%;
        background-color: #f27a25;
        border-radius:8px;
    }

    .cards.card_first {
        background-color: #37c999;
    }

    .card_secondary {
        background-color: #3b73d1;
    }

    .card_third {
        background-color: #d94389;
    }

    .card_fourth {
        background-color: #eff70e
    }

    .card_five {
        background-color: #f7df9f;
    }
    .card-single {
        display: flex;
        align-items: center;
        color:#f8f8f8;
        margin-top:8px;
        padding:35px 0;
    }

    .card_icon {
        padding:0 8px
    }

    .card_icon i {
        font-size:50px;
    }

    .card_info {
        padding-left: 4px;
    }

    .card_info h1 {

    }

    .card_info span {
        font-size:24px;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="cards">
                <div class="card-single">
                    <div class="card_icon">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="card_info">
                        <h1>{{$order}}</h1>
                        <span>Đơn hàng</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cards card_first">
                <div class="card-single">
                    <div class="card_icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="card_info">
                        <h1>{{$product}} </h1>
                        <span>Sản phẩm </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cards card_secondary">
                <div class="card-single">
                    <div class="card_icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="card_info">
                        <h1>{{$category}}</h1>
                        <span>Danh mục</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cards card_third">
                <div class="card-single">
                    <div class="card_icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="card_info">
                        <h1>{{$user}}</h1>
                        <span>Người dùng  </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cards card_fourth">
                <div class="card-single">
                    <div class="card_icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="card_info">
                        <h1>{{$artical}} </h1>
                        <span>Tin tức </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="cards card_five">
                <div class="card-single">
                    <div class="card_icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="card_info">
                        <h1>{{$contact}} </h1>
                        <span>Liên hệ </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
