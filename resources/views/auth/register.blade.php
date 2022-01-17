<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="{{ url('css/main.css')}}">
</head>
<body>
<form action="" method="post" class="form">
    <h2>Sign Up</h2>
    @csrf
        <div class="form-group">
            <input type="text" name="name"class="textbox" placeholder="Nhập tên đăng nhập" value="{{old('name')}}" >
        </div>
        @error('name')
        <span style="color:red">{{$message}}</span>
        @enderror
        <div class="form-group">
            <input type="email" name="email"class="textbox" placeholder="Nhập email của bạn " value="{{old('email')}}">
        </div>
        @error('email')
            <span style="color:red">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <input type="text" class="textbox" name="password" id="" placeholder="Nhập mật khẩu " value="{{old('password')}}">
        </div>
        @error('password')
        <span style="color:red">{{$message}}</span>
        @enderror
        <div class="form-group">
            <input type="text" class="textbox" name="password_confirmation" id="" placeholder="Nhập lại mật khẩu ">
        </div>
        <div class="form-group">
            <input type="submit" class="btn" value="Signup ">
        </div>
    </form>
</body>
</html>
