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
                <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    @if($errors->all())
                        <div class="alert alert-danger text-center">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span><br>
                            @endforeach
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label for="ns_name" class="col-sm-12 col-form-label">Tên bài viết </label>
                                <div class="col-sm-12">
                                    <input type="text" id="ns_name" class="form-control" value="{{ old('ns_name') }}" autofocus placeholder="Nhập tên bài viết " name="ns_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ns_description" class="col-sm-12 col-form-label">Mô tả </label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="ns_description" name="ns_description"  cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ns_content" class="col-sm-12 col-form-label">Nội dung</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="ns_content" name="ns_content"  cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ns_title_seo" class="col-sm-12 col-form-label">Tiêu đề SEO </label>
                                <div class="col-sm-12">
                                    <input type="text" id="ns_title_seo" class="form-control" value="{{ old('ns_title_seo') }}" autofocus placeholder="Nhập tên bài viết " name="ns_title_seo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ns_description_seo" class="col-sm-12 col-form-label">Mô tả SEO  </label>
                                <div class="col-sm-12">
                                    <input type="text" id="ns_description_seo" class="form-control" value="{{ old('ns_description_seo') }}" autofocus placeholder="Nhập tên bài viết " name="ns_description_seo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ns_image" class="col-sm-12 col-form-label">Chọn ảnh</label>
                                <div class="col-sm-12">
                                    <input type="file" id="ns_image" name="ns_image" class="form-control" placeholder="Image">
                                </div>
                            </div>
                            @csrf
                            <div class="form-group row " style="margin-top:4px">
                                <div class="col-lg-2"><input type="submit" class="btn btn-primary" value="Lưu thông tin "></div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>

                </form>
            </div>
        </div>
        <hr />
    </div>
</div>
@endsection

