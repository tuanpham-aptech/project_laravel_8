@extends('admin.index')
@section('content')
@if(empty($users))
<h4 style="color:red; text-align:center">Không có danh mục nào </h4>
@else
<h4 class="text-center" style="color:blue; text-transform:uppercase">BẢNG DANH MỤC</h4>
<div class="col-md-12">
    <a href="{{route('signup')}}">
        <button style="float: right; margin-bottom:8px;" class="btn btn-primary mb-4 btn-sm "><i class="fa fa-plus"></i>
                THÊM NGƯỜI DÙNG
        </button>
    </a>
</div>
<table class="table table-bordered">
    <thead class="thead-light">
        <th class="text-center" scope="col">ID</th>
        <th class="text-center" scope="col">Tên </th>
        <th class="text-center" scope="col">Email</th>
        <th class="text-center" scope="col">Trạng thái</th>
        <th class="text-center" scope="col">Thời gian tạo</th>
        <th class="text-center" scope="col">Thời gian cập nhật </th>
        <th class="text-center" scope="col">Hành động</th>
        {{-- <th></th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach($users as $us)
      <tr>
        <td>{{$us->id}}</td>
        <td>{{$us->name}}</td>
        <td>{{$us->email}}</td>
        <td>{{$us->status==1 ? 'Admin':(($us->status==2)?'Member':'Guest')}}</td>
        <td>{{date('d-m-Y',strtotime($us->created_at))}}</td>
        <td>{{date('d-m-Y',strtotime($us->updated_at))}}</td>
        <td>
            <div>
                <form action="{{url('admin/users/delete-user/'.$us->id)}}" method="post">
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá sản phẩm này !')">
                        Xoá
                    </button>
                </form>
            </div>
            <div style="margin-top:8px">
                <a  href="{{url('admin/users/edit-user/'.$us->id)}}">
                    <button class="btn btn-primary">
                        Sửa
                    </button>
                </a>
            </div>
        </td>
        {{-- <td>

        </td> --}}
      </tr>
      @endforeach
    </tbody>
  </table>
@endif
@endsection
