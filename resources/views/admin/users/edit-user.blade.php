@extends('admin.index')
@section('content')
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>{{$page_title}}</h2>
        </div>
        <div class="col-lg-12 col-md-4" style="margin-top:60px;">
        <br style="clear:both">
            <form method="POST" action="{{url('admin/users/update-user/'.$us->id)}}">
            @if($errors->all())
                <div class="alert alert-danger text-center">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span><br>
                    @endforeach
                </div>
                @endif
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Họ Tên </label>
                    <div class="col-sm-10">
                        <input type="text" id="name" class="form-control" value="{{$us->name }}" autofocus name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" id="email" class="form-control" value="{{$us->email }}" autofocus name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Quyền </label>
                    <div class="col-sm-10">
                        <div style="display:flex">
                            <div style="margin:4px"><span style="font-size:16px">Admin</span><input style="margin:4px" class="pd-1" type="radio" value="1" {{$us->status ==1 ? 'checked' :''}} autofocus name="status" id="status"></div>
                            <div style="margin:4px"><span style="font-size:16px">Member</span><input style="margin:4px" class="pd-1" type="radio" value="2" {{$us->status ==2 ? 'checked' :''}} name="status" id="status"></div>
                            <div style="margin:4px"><span style="font-size:16px">Guest</span><input style="margin:4px" class="pd-1" type="radio" value="0" {{$us->status ==0 ? 'checked' :''}} name="status" id="status"></div>
                        </div>
                    </div>
                </div>

                @csrf
                <div class="form-group " style="margin-top:4px">
                    <input type="submit" class="btn btn-primary" value="Cập nhật thông tin ">
                </div>
            </form>
            <div class="form-group full-right" style="margin-top: -50px; margin-right: 20px;float: right;">
                <a href="{{route('list-users')}}" class="btn btn-danger">Trở lại</a>
            </div>
        </div>
    </div>
    <hr />
</div>
@endsection

