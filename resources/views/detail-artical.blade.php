@extends('layouts.client')
@section('css')
.detail-arical-wrap{
    margin-top:15px;
}

.detail-arical-wrap .title {
    color:#454545;
}

.image {
    height:400px;
    margin:0 50px
}

.image img {
    width:100%;
    height:100%;
}

.content {
    margin-top:8px;
}
@endsection
@section('content')
<div class="detail-arical-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
               <div class="detail-artical">
                   <h1 class="title">{{$articals->ns_name}}</h1>
                   <p class="description">{{$articals->ns_description}}</p>
                   <div class="image">
                        <img src="{{asset('assets/images/'.$articals->ns_image)}}" alt="">
                   </div>
                   <div class="content">
                        {{$articals->ns_content}}
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
