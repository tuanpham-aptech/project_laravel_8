@extends('admin.index')
@section('content')
{{-- < id="page-wrapper"> --}}
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$page_title}}</h2>
            </div>
            <div class="col-lg-12 col-md-4" style="margin-top:60px;">
            <br style="clear:both">
                <form method="POST" >
                @if($errors->all())
                    <div class="alert alert-danger text-center">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span><br>
                        @endforeach
                    </div>
                    @endif
                    <div class="form-group row">
                        <label for="c_name" class="col-sm-2 col-form-label">Tên danh mục</label>
                        <div class="col-sm-10">
                            <input type="text" id="c_name" class="form-control" value="{{ old('c_name') }}" autofocus placeholder="Nhập tên danh mục " name="c_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="c_title_seo" class="col-sm-2 col-form-label">Danh mục SEO</label>
                        <div class="col-sm-10">
                            <input type="text" id="c_title_seo" class="form-control" value="{{ old('c_title_seo') }}" autofocus placeholder="Nhập tên danh mục SEO " name="c_title_seo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hot" class="col-sm-2 col-form-label">Nổi bật </label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="hot" id="hot">
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
@endsection

