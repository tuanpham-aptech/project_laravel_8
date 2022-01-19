@extends('admin.index')
@section('content')
@if(empty($categories))
<h4 style="color:red; text-align:center">Không có danh mục nào </h4>
@else
<h4 class="text-center" style="color:blue; text-transform:uppercase">BẢNG DANH MỤC</h4>
<div class="col-md-12">
    <a href="{{route('create-category')}}">
        <button style="float: right; margin-bottom:8px;" class="btn btn-primary mb-4 btn-sm "><i class="fa fa-plus"></i>
                THÊM DANH MỤC
        </button>
    </a>
</div>
<table class="table table-bordered">
    <thead class="thead-light bg-primary">
        <th class="text-center" scope="col">STT</th>
        <th class="text-center" scope="col">Tên </th>
        <th class="text-center" scope="col">Slug</th>
        <th class="text-center" scope="col">Active</th>
        <th class="text-center" scope="col">Số lượng sản phẩm</th>
        <th class="text-center" scope="col">Title SEO</th>
        <th class="text-center" scope="col">Thời gian tạo</th>
        <th class="text-center" scope="col">Thời gian cập nhật </th>
        <th class="text-center" scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
        @php $i=1; @endphp
        @foreach($categories as $cat)
      <tr>
        <td>{{$cat->id}}</td>
        <td>{{$cat->c_name}}</td>
        <td>{{$cat->c_slug}}</td>
        <td>{{$cat->c_active}}</td>
        <td>{{$cat->c_total_product}}</td>
        <td>{{$cat->c_title_seo}}</td>
        <td>{{date('d-m-Y',strtotime($cat->created_at))}}</td>
        <td>{{date('d-m-Y',strtotime($cat->updated_at))}}</td>
        <td>
            <div>
                <form action="delete-category/{{$cat->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá danh mục này !')">
                        Xoá
                    </button>
                </form>
            </div>
            <div style="margin-top:8px">
                <a  href="{{url('admin/edit-category/'.$cat->id)}}">
                    <button class="btn btn-primary">
                        Sửa
                    </button>
                </a>
            </div>
        </td>
      </tr>
      @php $i++; @endphp
      @endforeach
    </tbody>
</table>
    <div class="page-wrap">
        {!!$categories->links('admin.paginate')!!}
    </div>
@endif
@endsection
<style>
.w-5 {
        display: none
    }
</style>

