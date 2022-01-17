@extends('layouts.client')
@section('css')
.breadcrumb-shop {
    background-color: transparent;
    margin-bottom: 10px;
    line-height: 30px;
    padding: 15px 0;
    text-align: left;
}

.breadcrumb-list {
    margin: 0;
    font-size: 1.14286em;
    padding: 0;
    background-color: transparent;
    border-radius: 0;
}

.item-breadcrumb {
    display: inline;
    list-style: none;
}

.item-breadcrumb a,.item-breadcrumb > i{
    color:var(--text-primary);
    font-size: 1rem;
    text-decoration: none;
}

.item-breadcrumb > a:last-child {
    color:var(--text-hover);
}

.item-breadcrumb a:hover {
    text-decoration: none;
    color:var(--text-hover);
}

.item-breadcrumb span {
    display: inline;
    color: #333;
}

.item-breadcrumb span .fas {
    color:var(--text-primary);
    font-size:0.875rem;
    margin:4px;
    font-weight: 600;
}

/*Content */
.section_wrap-product {
    margin-top:32px;
    margin-bottom:32px;
    /* text-align:center; */
}

.content-title {
    text-align:center;
}

.content-title h2 {
    display: inline-block;
    font-size: 1.28571em;
    text-transform: uppercase;
    line-height: 1;
    margin: 0 0 20px 0;
    padding-bottom: 10px;
    border-bottom:2px solid var(--text-hover);
}

.tabs-title > a {
    padding-left: 32px;
    text-decoration: none;
    letter-spacing: 1px;
    font-family: Roboto, "Helvetica Neue";
    color:var(--text-color);
}

.tabs-title > a:hover {
    color:var(--text-hover);
    text-decoration: none;
}

.tab-content {
    margin:16px 0;
}

.product-block {
    margin:15px 0;
}

.product-img {
    position: relative;
    overflow: hidden;
}

.product-img a {
    display: block;
    height:310px;
    width:100%;

}

.product-img a img {
    width:100%;
    height:100%;
}

.product-info {
    padding: 15px 8px;
    text-align: center;
}

.product-info a:nth-child(1) {
    color:var(--text-hover);
    text-decoration: none;
}

.product-info a.button {
    text-decoration:none;
    border:0.1px solid #000;
    color:var(--text-primary)
}

.product-info a.button:hover{
    border:none;
    outline: none;
    color:#fff;
}

.product-info a h4 {
    font-size: var(--text-size);

}

.section_home-banner {
    margin-top:40px;
}

.section_home-banner .home-banner-pd {
    padding:0;
}

.block-banner-category {
    position: relative;
    height:350px;
    overflow: hidden;
    object-fit: cover;
    background: #f4f4f4;
    margin: 4px 2px;
}

.block-banner-category a.link-banner {
    display: block;
    transition: opacity 150ms linear, color 150ms linear, background 150ms linear;
}

.block-banner-category a.link-banner img {
    width: 100%;
    height: 100%;
}

.caption_banner {
    position: absolute;
    width: 100%;
    padding: 0 50px;
    bottom: 50px;
    color: #ffffff;
}

.caption_banner .subtitle {
    font-size: var(--text-size);
    font-weight: 400;
}

.caption_banner h3 {
    font-size: 23px;
    margin: 15px 0;
    color: #ffffff;
}

.wrapper-home-information{
    width: 100%;
    display: flex;
}

.box-info {
    width:100%;
    position: absolute;
    top:50%;
    left:15%;
    bottom:20%;
}


.box-info h2 {
    padding:15px 0 25px 0;
    font-size:48px;
    color:#fff;
}

.box-img {
    height: 500px;
    width: 100%;
    display: block;
}

.box-img img {
    width: 100%;
    height:100%;
    object-fit: cover;
}

.info-content {
    padding:30px 25px
}

.info-content ul li {
    list-style: none;
}

/* Detail Product  */
.large-image a .item-image {
    width:553px;
    height:553px;
}

.large-image a img {
    width:100%;
    height:100%;
    border: 1px solid #ebebeb;
}

.details-pro {
    margin-left: 8px;
}

.title-head {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 20px;
    font-weight: 700;
    text-transform: uppercase;
}

.detail-header-info {
    display: inline-block;
    border-bottom: 1px solid #333;
    margin-bottom: 20px;
}

.detail-header-info
.inventory_quantity{
    color:var(--text-hover);
}

.price-box .special-price span.price-sale {
    display: inline-block;
    padding: 5px 15px;
    margin-right: 10px;
    background: #ededed;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 12px;
    color: #f94c43;
}

.price-box .special-price .product-price {
    font-size: 18px;
    display: inline-block;
    font-weight: 600;
    margin-bottom: 10px;
    color:red;
}

.special-price del {
    font-size: 14px;
    color: #777a7b;
    padding-left: 10px;
    font-weight: 500;
}

.product_description {
    margin-bottom:20px;
}

.product_description
.description {
    font-size: var(--text-size);
    color:var(--text-color);
    margin-top: 5px;
    line-height: 24px;
}

.box-quantity a {
    font-size: 20px;
}

.box-quantity a:hover,.button-submit:hover {
    text-decoration: none;
    color:var(--text-hover);
}

.social-sharing {
    margin: 20px 0;
}

.social-sharing
.social-link {
    margin: 0 4px;
    color:var(--text-primary);
}

.social-sharing
.social-link:hover {
    color:var(--text-hover);
}

@endsection
@section('breadcrumb')
<div class="breadcrumb-shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb-list">
              <li class="item-breadcrumb">
                <i class="fas fa-home"></i><a href="{{route('home')}}">Trang chủ </a>
                <span><i class="fas fa-chevron-right"></i></span>
              </li>
              <li class="item-breadcrumb">
                <a href="#!">Ghế văn phòng </a>
                <span><i class="fas fa-chevron-right"></i></span>
              </li>
              <li class="item-breadcrumb">
                  <a href="#!">Ghế văn phòng </a>
              </li>
            </ol>
        </div>
      </div>
    </div>
</div>
@endsection
@section('content')
<div class="product">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12 details-product">
        <div class="row product_data">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
            <div class="large-image">
                <a href="#!">
                <div class="item-image">
                    <img src="{{url('myuploads/'.$pro->pro_image)}}" alt="">
                </div>
                </a>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
            <div class="details-pro">
                <h1 class="title-head">
                    {{$pro->pro_name}}
                </h1>
                <div class="detail-header-info">
                Tình trạng :
                @if($pro->pro_quantity > 0)
                <span class="inventory_quantity">Còn hàng </span>
                @else
                <span class="inventory_quantity">Hết hàng </span>
                @endif
                </div>
                <div class="price-box">
                    <div class="special-price">
                    <span class="price price-sale">{{$pro->pro_sale}}%</span>
                    <span class="price product-price">
                        @php $price = ($pro->pro_price)-(($pro->pro_price)*($pro->pro_sale)/100) @endphp
                    {{number_format($price ,0,',','.')}}đ
                    </span>
                    <del>{{number_format($pro->pro_price,0,',','.')}}đ</del>
                </div>
                </div>
                <div class="product_description">
                <div class="description">
                    {{$pro->pro_description}}
                </div>
                </div>
                <div class="form-product">
                    <form action="{{url('shopping/add/'.$pro->id)}}">
                        <div class="box-quantity row">
                            <div class="col-md-4">
                                <input type="hidden" value="{{$pro->id}}" class="prod_id">
                                <label for="quantity">Số lượng</label>
                                <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text"  id="quantity" class="form-control qty-input" name="quantity" value="1">
                                <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="box-button form-detail-action">
                            <button type="submit" class="btn btn-primary button-submit addToCartBtn">
                                Mua Hàng
                            </button>
                            <a href="{{route('home')}}" class="button-submit ml-2">
                                <button class="btn btn-info">Trở lại </button>
                            </a>
                        </div>
                        <div class="social-sharing">
                            <span>Chia sẻ :</span>
                            <a class="social-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-link" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="social-link" href="#"><i class="fab fa-pinterest"></i></a>
                            <a class="social-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Sản phẩm liên quan  -->
<div class="section_wrap-product">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <div class="content-title">
                  <h2>Sản phẩm cùng loại </h2>
              </div>
          </div>
         <div class="col-md-12 col-sm-12">
          <div class="tab-content">
              <div class="row">
                  @foreach ($pros as $opro)
                    <div class="col-sm-3 col-md-3">
                        <div class="product-block">
                            <div class="product-img">
                                <a href="#!">
                                    <img src="{{url('myuploads/'.$opro->pro_image)}}" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#!">
                                    <h4 class="product-title">{{$opro->pro_name}}</h4>
                                </a>
                                <p>{{$opro->pro_price}}</p>
                                <a href="{{route('product-detail',[$opro->pro_slug,$opro->id])}}" class="button">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                  @endforeach

              </div>
          </div>
         </div>
      </div>
  </div>
</div>
@endsection
@section('js')
<script type="text/javascript">

    $(document).ready(function(){

         $('.increment-btn').click(function(e){
            e.preventDefault();

            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value,10);
            value = isNaN(value) ? 0 : value;
            if(value < 10){
                value++;
                $('.qty-input').val(value);
            }
         })

         $('.decrement-btn').click(function(e){
            e.preventDefault();

            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value,10);
            value = isNaN(value) ? 0 : value;
            if(value > 1){
                value--;
                $('.qty-input').val(value);
            }
         })
    })
</script>
@endsection
