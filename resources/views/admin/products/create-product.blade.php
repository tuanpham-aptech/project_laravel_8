@extends('admin.index')
@section('content')
<div>
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">{{$page_title}}</h2>
            </div>
            <div class="col-lg-12 col-md-4">
                <br style="clear:both">
                <form method="POST" action="{{route('insert-product')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    @if($errors->all())
                        <div class="alert alert-danger text-center">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span><br>
                            @endforeach
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="pro_name" class="col-sm-12 col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-12">
                                    <input type="text" id="pro_name" class="form-control" value="{{ old('pro_name') }}" autofocus placeholder="Nhập tên sản phẩm" name="pro_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pro_desciption" class="col-sm-12 col-form-label">Mô tả </label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="pro_description" name="pro_description"  cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group row">
                                <label for="pro_category_id" class="col-sm-12 col-form-label">Danh mục</label>
                                <div class="col-sm-12">
                                    <select id="pro_category_id" name="pro_category_id" class="form-control">
                                        <option>--Chọn danh mục--</option>
                                        @foreach($categories as $cate)
                                        <option value="{{$cate->id}}">{{$cate->c_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pro_price" class="col-sm-12 col-form-label">Giá sản phẩm</label>
                                <div class="col-sm-12">
                                    <input type="text" id="pro_price" min="0" name="pro_price" class="form-control" placeholder="Nhập giá ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pro_price" class="col-sm-12 col-form-label">% Giảm giá </label>
                                <div class="col-sm-12">
                                    <input type="text" id="pro_sale" min="0" value="0" name="pro_sale" class="form-control" placeholder="Nhập % giảm giá ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pro_image" class="col-sm-12 col-form-label">Chọn ảnh</label>
                                <div class="col-sm-12">
                                    <input type="file" id="pro_image" name="pro_image" class="form-control" placeholder="Image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pro_quantity" class="col-sm-12 col-form-label">Nhập số lượng </label>
                                <div class="col-sm-12">
                                    <input type="text" id="pro_quantity" min="0" name="pro_quantity" class="form-control" placeholder="Nhập số lượng ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hot" class="col-sm-12 col-form-label">Nổi bật </label>
                                <div class="col-sm-12">
                                    <input type="checkbox" name="hot" id="hot">
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="form-group " style="margin-top:4px">
                        <input type="submit" class="btn btn-primary" value="Lưu thông tin ">
                    </div>
                </form>
            </div>
        </div>
        <hr />
    </div>
</div>
@endsection

