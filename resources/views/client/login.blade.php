<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
    <title>Đăng nhập | Laptop Khánh Trần</title>
</head>

<body>

<div class="container" id="container">
    <div class="form-container sign-in">
        <form method="POST" action={{ route('loginProcess1') }}>
            @csrf
            <h1>Sign In</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email password</span>
            <input name="email" type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <a href="#">Forget Your Password?</a>
            <button type="submit">Sign In</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
                <button class="hidden" id="register"><a href="{{ route('register') }}">Sign Up</a></button>
            </div>
        </div>
    </div>
</div>

</body>

</html>
