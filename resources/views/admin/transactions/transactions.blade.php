@extends('admin.index')
@section('content')
<h3 class="text-center" style="color:blue; text-transform:uppercase">{{$page_title}}</h3>
<table class="table table-bordered">
    <thead class="thead-primary bg-primary">
        <th class="text-center" scope="col">ID</th>
        <th class="text-center" scope="col">Tên người mua</th>
        <th class="text-center" scope="col">Địa chỉ </th>
        <th class="text-center" scope="col">Số điện thoại</th>
        <th class="text-center" scope="col">Tổng tiền </th>
        <th class="text-center" scope="col">Ghi chú</th>
        <th class="text-center" scope="col">Trạng thái</th>
        <th class="text-center" scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
        @if(isset($transactions))
        @php $i=1;@endphp
        @foreach ($transactions as $ts)
      <tr>
        <td>{{$i}}</td>
        <td>{{$ts->user->name}}</td>
        <td>{{$ts->tr_address}}</td>
        <td>{{$ts->tr_phone}}</td>
        <td>{{number_format($ts->tr_total,0,',','.')}}đ</td>
        <td>{{$ts->tr_note}}</td>
        <td>
            @if($ts->tr_status)
            <a><button class="btn btn-primary">Đã xử lý</button></a>
            @else
            <a href="{{route('active-item-transaction',[$ts->id])}}"><button class="btn btn-danger">Chờ xử lý</button></a>
            @endif
        </td>
        <td>
         <section style="display: flex; align-item:center; ">
            <div>
                <a href="{{route('delete-item-order',[$ts->id])}}">
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá sản phẩm này !')">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </a>
            </div>
            <div style="margin-left:8px">
                <a class=" js_order_item" href="{{route('transaction-view-order',[$ts->id])}}">
                    <button class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                    </button>
                </a>
            </div>
         </section>
        </td>
      </tr>
      @php $i++; @endphp
      @endforeach
      @endif
    </tbody>
</table>
@endsection
