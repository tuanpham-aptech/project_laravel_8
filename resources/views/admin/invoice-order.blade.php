<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IN ĐƠN HÀNG</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CUSTOM STYLES-->
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'
        type='text/css' />
</head>
<body>
    {{-- {{dd($transactions)}} --}}
<div class="container">
    <div class="invoice-wrap mt-2">
        <div class="row">
            <div class="col-md-6">
                <div class="card-img">
                    <h1>Tuân Phạm </h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="company-details">
                    <p>Hoá đơn bán hàng</p>
                    <p>Chuyên nội thất gia đình</p>
                    <p>Sản phẩm hỗ trợ</p>
                </div>
            </div>
        </div>
    </div>
    @foreach ($transactions as $ts)
        <div class="body-section">
            <div class="">
                <div class="col-md-6">
                    <h2 class="heading">Đơn hàng ({{$ts->id}})</h2>
                    <p class="sub-heading">Ngày 15-08-1998</p>
                    <p class="sub-heading">Email :tuanphamanh1998@gmail.com</p>
                </div>
                <div class="">
                    <p class="sub-heading">Họ tên :</p>
                    <p class="sub-heading">Địa chỉ :</p>
                    <p class="sub-heading">Điện thoại :</p>
                </div>
            </div>
        </div>
        <div class="body-section">
            <h3 class="heading">Đơn hàng </h3>
            <br>
            <div class="">
                <div class="">
                    <table class="table table-bordered">
                        <thead class="thead-light bg-primary">
                            <tr>
                                <th>Sản phẩm</th>
                                <th class="w-20">Giá </th>
                                <th class="w-20">Số lượng </th>
                                <th class="w-20">Thành tiền </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$ts->pro_name}}</td>
                                <td>{{number_format($ts->or_price,0,',','.')}}đ</td>
                                <td>{{$ts->or_qty}}</td>
                                <td> đ</td>
                            </tr>
                            <tr>
                                <td colspan="3">Sub Total</td>
                                <td>{{number_format($ts->tr_total,0,',','.')}} đ</td>
                            </tr>
                            <tr>
                                <td colspan="3">Tổng số </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{url('assets/admin/js/style.js')}}"></script>
</body>
</html>
