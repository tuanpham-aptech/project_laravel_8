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
<div class="wrapper-payment mt-4">
    <div class="col-sm-12">
        <h2 class="text-center">{{$page_title}}</h2>
        @if($errors->all())
            <div class="alert alert-danger text-center">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span><br>
                @endforeach
            </div>
        @endif
    </div>
    <div class="col-sm-12">
        <div class="wapper-content">
            <div class="container">
                <form action="{{url('shopping/save-info-shopping-cart')}}" method="post" class="form-payment">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group col-sm-12">
                                <label class="col-sm-4" form="">Địa chỉ </label>
                                <input type="text" class="form-control col-sm-12" value="{{ old('tr_address') }}" name="tr_address" placeholder="Nhập địa chỉ ">
                            </div>
                            {{-- <div class="form-group col-sm-12">
                                <label class="col-sm-4" form="">Email</label>
                                <input type="text" class="form-control col-sm-12" name="tr_email" value="{{ old('tr_email') }}" placeholder="Nhập Email">
                            </div> --}}
                            <div class="form-group col-sm-12">
                                <label class="col-sm-4" form="">Số điện thoại</label>
                                <input type="text" class="form-control col-sm-12" name="tr_phone" value="{{ old('tr_phone') }}" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-sm-4" form="">Ghi chú  </label>
                                <textarea name="tr_note" class="col-sm-12" cols="30" rows="5"></textarea>
                            </div>
                            @csrf
                            <div class="form-group col-sm-12">
                                <input type="submit"  class="btn btn-primary col-sm-8" value="Xác nhận thông tin">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <table class="table table-bordered col-lg-12">
                                    <tr>
                                        <th scope="col">Đơn hàng </th>
                                        <th scope="col"></th>
                                        <th scope="col"><a href="{{route('cart')}}" class="btn btn-primary">Cập nhật</a></th>
                                    </tr>
                                @foreach ($products as $product)
                                <tr style="padding-top:6px">
                                    <td>
                                        <p><img style="width:100px; height:100px" src="{{url('myuploads/'.$product->image)}}"/></p>
                                    </td>
                                    <td>
                                        <span>{{$product->name}}</span>
                                        <p>Qty : {{$product->quantity}}</p>
                                    </td>
                                    <td >
                                        <p>{{number_format($product->price,0,',','.')}}đ</p>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2">
                                        <p>Tổng tiền </p>
                                    </td>
                                    <td ><p>{{number_format(\Cart::getTotal(),0,',','.')}}đ</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
