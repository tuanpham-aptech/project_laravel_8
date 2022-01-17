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
                <form method="POST" action="{{url('admin/update-product/'.$data->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
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
                                    <input type="text" id="pro_name" class="form-control" value="{{ $data->pro_name }}"  placeholder="Nhập tên sản phẩm" name="pro_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pro_desciption" class="col-sm-12 col-form-label">Mô tả </label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="pro_description" name="pro_description"  cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pro_category_id" class="col-sm-12 col-form-label">Danh mục</label>
                                <div class="col-sm-12">
                                    <select id="pro_category_id" name="pro_category_id" class="form-control">
                                        @foreach ($categories as $cat)
                                            @if ($data->pro_category_id == $cat->id)
                                                <option class="pt-4" value="{{ $data->pro_category_id}}" selected>{{ $cat->c_name }}</option>
                                            @else
                                                <option value="{{ $data->pro_category_id}}">{{ $cat->c_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-5">
                                    <label for="hot" class="col-sm-12 col-form-label">Nổi bật </label>
                                    <div class="col-sm-12">
                                        <div style="display:flex">
                                            <div style="margin:4px">
                                                <span style="font-size:16px">Nổi bật</span>
                                                <input style="margin:4px" type="radio" value="1" {{$data->pro_hot ==1 ? 'checked' :''}} name="pro_hot" id="pro_hot">
                                            </div>

                                            <div style="margin:4px">
                                                <span style="font-size:16px">Không</span><input style="margin:4px" type="radio" value="0" {{$data->pro_hot ==0 ? 'checked' :''}} name="pro_hot" id="pro_hot"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                                <div class="form-group col-sm-5">
                                    <label for="hot" class="col-sm-12 col-form-label">Trạng thái </label>
                                    <div class="col-sm-12">
                                        <div style="display:flex">
                                            <div style="margin:4px">
                                                <span style="font-size:16px">Public</span><input style="margin:4px" type="radio" value="1" {{$data->pro_active ==1 ? 'checked' :''}}  name="pro_active" id="pro_active">
                                            </div>

                                            <div style="margin:4px">
                                                <span style="font-size:16px">Prive</span><input style="margin:4px" type="radio" value="0" {{$data->pro_active ==0 ? 'checked' :''}} name="pro_active" id="pro_active">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group row">
                                <label for="pro_price" class="col-sm-12 col-form-label">Giá sản phẩm</label>
                                <div class="col-sm-12">
                                    <input type="text" id="pro_price" value="{{ $data->pro_price}}"  min="0" name="pro_price" class="form-control" placeholder="Nhập giá ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pro_price" class="col-sm-12 col-form-label">% Giảm giá </label>
                                <div class="col-sm-12">
                                    <input type="text" id="pro_sale" value="{{ $data->pro_sale}}"  min="0" value="0" name="pro_sale" class="form-control" placeholder="Nhập % giảm giá ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pro_image" class="col-sm-12 col-form-label">Chọn ảnh</label>
                                <div class="col-sm-12">
                                    <input type="file" id="pro_image" name="pro_image" class="form-control" placeholder="Image">
                                    <img style="width: 150px;height: 150px;" src="{{url('myuploads/'.$data->pro_image)}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pro_quantity" class="col-sm-12 col-form-label">Nhập số lượng </label>
                                <div class="col-sm-12">
                                    <input type="text" id="pro_quantity" min="0" value="{{ $data->pro_quantity}}"  name="pro_quantity" class="form-control" placeholder="Nhập số lượng ">
                                </div>
                            </div>

                        </div>
                        @csrf
                        <div class="col-lg-12">
                            <div class="form-group" style="margin-top:4px">
                                <input type="submit" class="btn btn-primary" value="Cập nhật thông tin ">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr />
    </div>
</div>
@endsection

