@extends('admin.index')
@section('content')
<h3 class="text-center" style="color:blue; text-transform:uppercase">{{$page_title}}</h3>
<div class="col-md-12">
    <a href="{{route('create-articals')}}">
        <button style="float: right; margin-bottom:8px;" class="btn btn-primary mb-4 btn-sm "><i class="fa fa-plus"></i>
                THÊM TIN TỨC
        </button>
    </a>
</div>
<table class="table table-bordered">
    <thead class="thead-primary bg-primary">
        <th class="text-center" scope="col">STT</th>
        <th class="text-center" scope="col">Tên bài viết</th>
        <th class="text-center" scope="col">Mô tả</th>
        <th class="text-center" scope="col">Trạng thái </th>
        <th class="text-center" scope="col">Thời gian tạo</th>
        <th class="text-center" scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
        @if(isset($articals))
        @php $i=1;@endphp
        @foreach($articals as $ns)
      <tr>
        <td>{{$i}}</td>
        <td>{{$ns->ns_name}}</td>
        <td>{{$ns->ns_description}}</td>
        <td>
            @if($ns->ns_active ==1)
            <a><button class="btn btn-primary">Đã xử lý</button></a>
            @else
            <a href="{{route('action-active-articals',[$ns->id])}}"><button class="btn btn-danger">Chờ xử lý</button></a>
            @endif
        </td>
        <td>{{date('d-m-Y',strtotime($ns->created_at))}}</td>
        <td>
            <section style="display: flex; align-item:center; ">
                <div>
                    <a href="{{url('admin/articals/delete-articals/'.$ns->id)}}">
                        <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá sản phẩm này !')">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </a>
                </div>
                <div style="margin-left:8px">
                    <a class=" js_order_item" href="{{url('admin/articals/edit-articals/'.$ns->id)}}">
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i>
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
@endsection
