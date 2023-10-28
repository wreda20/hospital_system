<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <title> Login</title>
</head>
<body>

<div class="container">
    <form action="{{route('login')}}" method="post">
        @csrf

        @if($type == 'user')
            <h2 >User Login</h2>
        @elseif($type == 'admin')
            <h2>Admin Login</h2>
        @endif

        <label for="username">Username:</label>
        <input type="email" id="email" name="email" >
        <input type="hidden" value="{{$type}}" name="type">
        @error('username')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
        <input type="hidden" value="{{$type}}" name="type">
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>