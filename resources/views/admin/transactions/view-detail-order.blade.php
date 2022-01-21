@extends('admin.index')
@section('content')
<h3 class="text-center" style="color:blue; text-transform:uppercase">{{$page_title}}</h3>
<table class="table table-bordered">
    <thead class="thead-light bg-primary">
        <th class="text-center" scope="col">ID</th>
        <th class="text-center" scope="col">Sản phẩm</th>
        <th class="text-center" scope="col">Ảnh</th>
        <th class="text-center" scope="col">Giá</th>
        <th class="text-center" scope="col">Số lượng</th>
        <th class="text-center" scope="col">Thành tiền </th>
        <th class="text-center" scope="col">Hành động</th>
        {{-- <th></th> --}}
      </tr>
    </thead>
    <tbody>
        @if(isset($transactions))
        @php $i =1 @endphp
        @foreach($transactions as $ts)
      <tr>
        <td>{{$i}}</td>
        <td>Name</td>
        <td><img style="width: 150px;height: 150px;" src="{{url('myuploads/'.$ts->pro_image)}}" alt=""></td>
        <td>{{number_format($ts->or_price,0,',','.')}} đ</td>
        <td>{{$ts->or_qty}}</td>
        <td>{{number_format($ts->tr_total,0,',','.')}} đ</td>
        <td>
            <div>
                <a href="">
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá đơn hàng này !')">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </a>
                <a href="{{route('bill-order',[$ts->id])}}" class="pl-1">
                    <button class="btn btn-primary" onclick="return confirm('Bạn có muốn in đơn hàng này!')">
                        <i class="fas fa-print"></i>
                    </button>
                </a>
            </div>
        </td>
        {{-- <td>

        </td> --}}
      </tr>
      @php $i++ @endphp
      @endforeach
      @endif
    </tbody>
</table>
@endsection
