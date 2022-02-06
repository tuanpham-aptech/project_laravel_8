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

.cart-heading {
    position: relative;
    text-align: center;
    padding: 0 0 30px 0;
}

.cart-title::after {
    content: "";
    background: #252a2b;
    display: block;
    width: 60px;
    height: 4px;
    margin: 25px auto 0;
}

table.table-cart {
    margin-bottom: 30px;
    border-bottom: 1px solid #ededed;
}

table.table-cart thead {
    display: none;
}

table tr td, table tr th {
    padding: 10px;
    text-align: left;
}

table tr td:first-child, table tr th:first-child {
    padding-left: 0px;
}

table tr td:last-child, table tr th:last-child {
    padding-right: 0px;
}

table.table-cart tr td {
    padding: 20px 0;
    border-top: 1px solid #ededed;
    vertical-align: top;
}

table.table-cart tr:first-child td {
    border-top: 0;
}

table.table-cart tr td {
    padding: 20px 0;
    border-top: 1px solid #ededed;
    vertical-align: top;
}

table.table-cart
tr.line-item-container
td.image {
    text-align: center;
    width: 110px;
}

table.table-cart
tr.line-item-container
td.image .product_image {
    width:110px;
    height: 110px;
}

table.table-cart tr td.image img {
    max-width: 100px;
    max-height: 100px;
    height: 100%;
}

table.table-cart tr td.item {
    width: 100%;
    padding-left: 15px;
}

table.table-cart tr td.item h3 {
    margin: 0 0 5px;
    font-size: 16px;
    font-weight: bold;
    padding-right: 30px;
}

table.table-cart tr td.item h3 a{
    color:var(--text-primary);
    text-decoration: none;
}

table.table-cart tr td.item h3 a:hover{
    color:var(--text-hover);
}

table.table-cart tr td.item p {
    margin-bottom: 5px;
}

table.table-cart tr td.item p span {
    font-weight: 500;
    color:var(--text-color);
    font-weight: 400;
}


.qty-click {
    float: left;
}

.qty-click button.btn-qty {
    background: #fff;
    font-weight: 500;
    font-size: 14px;
    color: #abafb2;
    height: 25px;
    padding: 0;
    text-align: center;
    width: 25px;
    border: 1px solid #dadbdd;
    border-radius: 0;
    float: left;
    -webkit-appearance: none;
}

.qty-click input.item-quantity {
    font-weight: 500;
    font-size: 15px;
    height: 25px;
    padding: 0;
    text-align: center;
    width: 35px;
    background: #ededed;
    border: 1px solid #dadbdd;
    border-radius: 0;
    float: left;
    -webkit-appearance: none;
}

.qty-click button.qtyminus.btn-qty {
    border-right: none;
}

.qty-click button.qtyplus.qty-btn {
    border-left: none;
}

table.table-cart tr td.item .price {
    margin: 0;
    float: right;
}

table.table-cart tr td.item .price span {
    font-size: 16px;
    padding-right: 0;
    font-weight: 600;
}

table.table-cart tr td.item .price span {
    font-size: 16px;
    padding-right: 0;
    color:var(--text-primary);
    font-weight: 600;
}

table.table-cart tr td.item .price span.text {
    display: none;
}

.sidebox-order {
    background: #fff;
    padding: 15px;
    position: relative;
    margin-bottom: 30px;
    border: 1px solid #e1e3e4;
    border-radius: 2px;
}

.sidebox-order div[class^="sidebox-order_"] {
    margin-bottom: 15px;
}

.sidebox-order_title h3 {
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0;
}

.sidebox-order_total {
    font-size: 16px;
    color: #5c5c5c;
    font-weight: 600;
    padding: 15px 0;
    border-top: 1px dotted #dfe0e1;
    border-bottom: 1px dotted #dfe0e1;
}

.sidebox-order_total p .total-price {
    float: right;
    color: red;
    font-size: 24px;
}

.sidebox-order_action .btncart-checkout {
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 400;
    color:#fff;
    padding: 12px 20px;
    background-color: #e00707;
}

.sidebox-order_action .btncart-checkout:hover {
    color:#fff;

}

.link-continue {
    margin: 10px 0 0;
    text-align: center;
}

.link-continue a {
    color: #9c4533;
}

.link-continue a i {
    margin-right: 4px;
}

.sidebox-group h4 {
    margin-bottom: 10px;
    font-weight: 700;
    font-size: 16px;
    color: var(--text-color);
}

.sidebox-group .box-note textarea {
    width: 100%;
    padding-left: 2px;
}

.sidebox-group .box-rules ul li,.sidebox-group .box-note ul li {
    list-style: none;
}

.sidebox-group .box-rules ul li i,.sidebox-group .box-note ul li i {
    font-size: 12px;
    font-weight: 600;
}

.sidebox-group .box-rules ul li span,.sidebox-group .box-note ul li span {
    font-size:var(--text-size);
    font-weight:400;
    color:var(--text-color);
}

table.table-cart tr td.remove .cart {
    font-size: 20px;
    text-decoration: none;
    color:var(--text-primary);
}

table.table-cart tr td.remove .cart:hover {
    color:var(--text-hover);
}

@endsection
@section('content')
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
              <a href="{{url('shopping')}}">giỏ hàng </a>
            </li>
          </ol>
      </div>
    </div>
  </div>
</div>
<div class="wrapper-cart">
    {{-- @if(session('cart')) --}}
    <div class="container-fluid">
        <div class="cart-heading">
            <div class="cart-title">
                <h1>{{$page_title}}</h1> </h1>
                <p class="count-cart">
                    <span>Sản phẩm </span>trong giỏ hàng
                </p>
            </div>
        </div>
        <div class="row box-cart">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="cart-container">
                    <div class="cart-col">
                        <div class="cart-main">
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-sm-12">
                                        <table class="table-cart">
                                            <thead>
                                                <tr>
                                                    <th class="image">&nbsp;</th>
                                                    <th class="item">Tên sản phẩm</th>
                                                    <th class="remove">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $total = 0 @endphp
                                                @if($products)
                                                @foreach ($products as $key => $product)
                                                <tr class="line-item-container">
                                                    <td class="image">
                                                        <div class="product_image">
                                                            <a href="#">
                                                                <img src="{{url('myuploads/'.$product->image)}}"/>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="item">
                                                        <h3><a href="#">{{$product->name}}</a></h3>
                                                        <p><span>{{number_format($product->price,0,',','.')}}đ</span></p>
                                                        <div class="qty quantity-parent qty-click">
                                                            <span style="float:left;font-size:14px; padding-right:6px">Số lượng:</span><input type="text" class="line-item-quantity qty-input item-quantity" value="{{$product->quantity}}" min="1" name="quantity">
                                                        </div>
                                                        <p class="price">
                                                            <span class="text">Thành tiền</span>
                                                            <span class="line-item-total">
                                                                {{number_format($product->price * $product->quantity,0,',','.')}}đ
                                                                @php $total + ($product->price * $product->quantity)@endphp
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td class="remove">
                                                        <a href="{{route('cart-destroy',$key)}}" class="cart">x</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-xs-12 col-sm-12">
                                        <div class="sidebox-group">
                                            <h4>Ưu đãi thành viên của cửa hàng  </h4>
                                            <div class="box-note">
                                                <ul>
                                                    <li><i class="fas fa-arrow-right"></i> <span>Được hưởng những ưu đãi cũng như khuyến mại của của hàng </span></li>
                                                    <li><i class="fas fa-arrow-right"></i> <span>Được tham gia các chương trình tri ân khách hàng hàng tháng </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xs-12 col-sm-12">
                                        <div class="sidebox-group">
                                            <h4>Chính sách mua hàng </h4>
                                            <div class="box-rules">
                                                <ul>
                                                    <li><i class="fas fa-arrow-right"></i> <span>Sản phẩm được đổi 1 lần duy nhất, không hỗ trợ trả.</span></li>
                                                    <li><i class="fas fa-arrow-right"></i> <span>Sản phẩm còn đủ tem mác, chưa qua sử dụng.</span></li>
                                                    <li><i class="fas fa-arrow-right"></i> <span>Sản phẩm nguyên giá được đổi trong 30 ngày trên toàn hệ thống</span></li>
                                                    <li><i class="fas fa-arrow-right"></i> <span>Sản phẩm sale chỉ hỗ trợ đổi size (nếu cửa hàng còn) trong 7 ngày trên toàn hệ thống.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="sidebox-order">
                    <div class="sidebox-order-inner">
                        <div class="sidebox-order_title">
                            <h3>Thông tin đơn hàng </h3>
                        </div>
                        <div class="sidebox-order_total">
                            <p>Tổng tiền <span class="total-price">{{number_format(\Cart::getTotal(),0,',','.')}}đ</span></p>
                        </div>
                        <div class="sidebox-order_text">
                            <p>
                                Phí vận chuyển sẽ được tính ở trang thanh toán.
                                <br>
                                Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.
                            </p>
                        </div>
                        <div class="sidebox-order_action">
                            <a href="{{ route('form-payment')}}" class="btn btncart-checkout">Thanh toán</a>
                            <p class="link-continue text-center">
                                <a href="{{route('home')}}"><i class="fas fa-reply"></i>Tiếp tục mua hàng </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endif --}}
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
