@extends('admin.index')
@section('content')
<h3 class="text-center" style="color:blue; text-transform:uppercase">{{$page_title}}</h3>
<table class="table table-bordered">
    <thead class="thead-light bg-primary">
        <th class="text-center" scope="col">STT</th>
        <th class="text-center" scope="col">Người liên hệ</th>
        <th class="text-center" scope="col">Email</th>
        <th class="text-center" scope="col">Tiêu đề  </th>
        <th class="text-center" scope="col">Nội dung </th>
        <th class="text-center" scope="col">Trạng thái  </th>
        <th class="text-center" scope="col">Thời gian tạo</th>
        <th class="text-center" scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
        @if(isset($contacts))
        @php $i=1;@endphp
        @foreach($contacts as $c)
      <tr>
        <td>{{$i}}</td>
        <td>{{$c->c_name}}</td>
        <td>{{$c->c_email}}</td>
        <td>{{$c->c_title}}</td>
        <td>{{$c->c_content}}</td>
        <td>
            @if($c->c_status ==1)
            <a><button class="btn btn-primary">Đã Xem </button></a>
            @else
            <a href="{{route('action-active-contacts',[$c->id])}}"><button class="btn btn-danger">Chờ xử lý</button></a>
            @endif
        </td>
        <td>{{date('d-m-Y',strtotime($c->created_at))}}</td>
        <td>
            <section style="display: flex; align-item:center; ">
                <div>
                    <a href="{{url('admin/contacts/delete-contacts/'.$c->id)}}">
                        <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá liên hệ này !')">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </a>
                </div>
             </section>
        </td>
      </tr>
      @php $i++;@endphp
      @endforeach
      @endif
    </tbody>
</table>
<div class="page-wrap">
    {!!$contacts->links('admin.paginate')!!}
</div>
@endsection
<style>
.w-5 {
        display: none
    }
</style>
