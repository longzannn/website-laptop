<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
    <title>Đăng ký | Laptop Khánh Trần</title>
</head>

<body>

<div class="container active" id="container">
    <div class="form-container sign-up">
        <form method="POST" action={{ route('registerProcess') }}>
            @csrf
            <h1>Create Account</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registeration</span>
            <input name="email" type="email" placeholder="Email">
            @if($errors->has('email'))
                <span class="">{{ $errors->first('email') }}</span>
            @endif
            <input name="password" type="password" placeholder="Password">
            @if($errors->has('password'))
                <span class="">{{ $errors->first('password') }}</span>
            @endif
            <input name="password_confirmation" type="password" placeholder="Confirm Password">
            @if($errors->has('confirm_password'))
                <span class="">{{ $errors->first('confirm_password') }}</span>
            @endif
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all of site features</p>
                <button class="hidden" id="login"><a href="{{ route('login1') }}">Sign In</a></button>
            </div>
        </div>
    </div>
</div>

</body>

</html>
