@extends('admin.index')
@section('content')
<h3 class="text-center" style="color:blue; text-transform:uppercase">BẢNG SẢN PHẨM</h3>
<div class="col-md-12">
    <a href="{{route('create-product')}}">
        <button style="float: right; margin-bottom:8px;" class="btn btn-primary mb-4 btn-sm "><i class="fa fa-plus"></i>
                THÊM SẢN PHẨM
        </button>
    </a>
</div>
<table class="table table-bordered">
    <thead class="thead-light bg-primary">
        <th class="text-center" scope="col">STT</th>
        <th class="text-center" scope="col">Danh mục</th>
        <th class="text-center" scope="col">Sản phẩm</th>
        <th class="text-center" scope="col">Ảnh</th>
        <th class="text-center" scope="col">Giá</th>
        <th class="text-center" scope="col">Giá sản sale</th>
        <th class="text-center" scope="col">Số lượng</th>
        <th class="text-center" scope="col">Mô tả </th>
        <th class="text-center" scope="col">Trạng thái </th>
        <th class="text-center" scope="col">Nổi bật </th>
        <th class="text-center" scope="col">Thời gian tạo</th>
        <th class="text-center" scope="col">Thời gian cập nhật </th>
        <th class="text-center" scope="col">Hành động</th>
        {{-- <th></th> --}}
      </tr>
    </thead>
    <tbody>
        @php $i=1; @endphp
        @if(isset($products))
        @foreach($products as $pro)
      <tr>
        <td>{{$pro->id}}</td>
        <td>{{isset($pro->category->c_name) ? $pro->category->c_name: ''}}</td>
        <td>{{$pro->pro_name}}</td>
        <td><img style="width: 150px;height: 150px;" src="{{url('myuploads/'.$pro->pro_image)}}" alt=""></td>
        <td>{{$pro->pro_price}}</td>
        <td>{{$pro->pro_sale}}</td>
        <td>{{$pro->pro_quantity}}</td>
        <td>{{$pro->pro_description}}</td>
        <td>{{$pro->pro_active==1?'Public':'Private'}}</td>
        <td>{{$pro->pro_hot==1?'Nổi bật':'Không'}}</td>
        <td>{{date('d-m-Y',strtotime($pro->created_at))}}</td>
        <td>{{date('d-m-Y',strtotime($pro->updated_at))}}</td>
        <td>
            <div>
                <form action="delete-product/{{$pro->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá sản phẩm này !')">
                        Xoá
                    </button>
                </form>
            </div>
            <div style="margin-top:8px">
                <a  href="{{url('admin/edit-product/'.$pro->id)}}">
                    <button class="btn btn-primary">
                        Sửa
                    </button>
                </a>
            </div>
        </td>
      </tr>
      @php $i++; @endphp
      @endforeach
      @endif
    </tbody>
</table>
<div class="page-wrap">
    {!!$products->links('admin.paginate')!!}
</div>
@endsection
<style>
.w-5 {
        display: none
    }
</style>
