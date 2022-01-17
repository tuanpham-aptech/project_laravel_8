<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nội Thất Phạm Tuân</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{url('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/footer.css')}}">
    <style type="text/css">
        @yield('css');
    </style>
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
</head>
<body>
    @include('layouts.header')
    @yield('slider')
    @yield('widget_collection')
    @yield('breadcrumb')
    <main>
        <div class="content">
            @if(\Session::has('success'))
            <div class="container">
                <div class="alert alert-success" role="alert">
                    <strong>Thành công!</strong>{{\Session::get('warning')}}
                </div>
            </div>
            @endif
            @if(\Session::has('warning'))
            <div class="container">
                <div class="alert alert-warning" role="alert">
                    <strong>Cảnh báo!</strong>{{\Session::get('warning')}}
                </div>
            </div>
            @endif
            @yield('content')
        </div>
    </main>
    @include('layouts.footer')
    <script src="{{url('assets/js/container.js')}}"></script>
    @yield('js');

