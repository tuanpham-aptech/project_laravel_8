@extends('layouts.client')
@section('css')

@endsection
@section('content')
<div class="contact-wrap" style="margin:15px 0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">{{$page_title}}</h2>
            </div>
            <div class="col-sm-12">
                <form method="POST" class="mt-4" >
                    @if($errors->all())
                        <div class="alert alert-danger text-center">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span><br>
                            @endforeach
                        </div>
                        @endif
                        <div class="form-group row">
                            <label for="c_name" class="col-sm-2 col-form-label">Họ và tên </label>
                            <div class="col-sm-8">
                                <input type="text" id="c_name" class="form-control" value="{{ old('c_name') }}" autofocus placeholder="Nhập họ và tên  " name="c_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="c_email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" id="c_email" class="form-control" value="{{ old('c_email') }}" autofocus placeholder="Nhập tên email " name="c_email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="c_title" class="col-sm-2 col-form-label">Tiêu đề </label>
                            <div class="col-sm-8">
                                <input type="text" id="c_title" class="form-control" value="{{ old('c_title') }}" autofocus placeholder="Nhập tên tiêu đề " name="c_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="c_desciption" class="col-sm-2 col-form-label">Mô tả </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="c_description" name="c_description"  cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        @csrf
                        <div class="form-group " style="margin-top:4px">
                            <input type="submit" class="btn btn-primary" value="Lưu thông tin ">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
