<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập </title>
    <link rel="stylesheet" href="{{ url('css/main.css')}}">
</head>
<body>
    {{-- @include('header') --}}
    <form action="" method="post" class="form" style="margin:auto; width:400px;">
    <h2>Đăng nhập </h2>
    @csrf
        <div class="form-group">
            <input type="email" name="email"class="textbox" placeholder="Nhập email của bạn " value="{{old('email')}}">
        </div>
        @error('email')
            <span style="color:red">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <input type="password" class="textbox" name="password" id="" placeholder="Nhập mật khẩu " value="{{old('password')}}">
        </div>
        @error('password')
        <span style="color:red">{{$message}}</span>
        @enderror
        <br>
        <input type="checkbox" name="remember" id="">Remember me<br>
        <div class="form-group">
            <input type="submit" class="btn" value="Login ">
        </div>
    </form>
</body>
</html>
