@extends('layouts.client')
@section('content')
<div class="section_wrap-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content-title">
                    <div class="tabs-title mt-4">
                        <h2 class="text-center">{{$page_title}}</h2>
                    </div>
                </div>
            </div>
           <div class="col-md-12 col-sm-12">
            <div class="tab-content">
                <div class="row">
                    <div class="col-lg-12 col-md-4">
                        <br style="clear:both">
                        <form method="POST" action="{{route('change-password-link')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="form-group row">
                                        <label for="current_password" class="col-sm-12 col-form-label">Mật khẩu cũ  </label>
                                        <div class="col-sm-12">
                                            <input type="password" id="" class="form-control" name="current_password" >
                                            @error('current_password')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-12 col-form-label">Mật khẩu mới </label>
                                        <div class="col-sm-12">
                                            <input type="password" id="new_pass" class="form-control" name="password" >
                                            @error('password')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password_confirmation" class="col-sm-12 col-form-label">Nhập lại mật khẩu </label>
                                        <div class="col-sm-12">
                                            <input type="password" id="new_pass" class="form-control" name="password_confirmation" >
                                            @error('password_confirmation')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    @csrf
                                    <div class="form-group row " style="margin-top:4px">
                                        <div class="col-lg-2"><input type="submit" class="btn btn-primary" value="Cập nhật "></div>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </div>
</div>
@endsection
