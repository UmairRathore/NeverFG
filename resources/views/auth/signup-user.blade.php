<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{('frontend/assets/css/Login.css')}}" />
</head>
<body>
<div class="login-wrapper">
    <form method="post" action="{{ route('userregistration') }}" class="custom-form">
        @csrf
        <p class="custom-form-title">Sign up account</p>
        <div class="input-container">
            <input type="text" name="first_name" placeholder="Enter First Name" />
            <span> </span>
        </div>
        <div class="input-container">
            <input type="text" name="last_name" placeholder="Enter Last Name" />
            <span> </span>
        </div>
        <div class="input-container">
            <input type="email" name="email" placeholder="Enter email" />
            <span> </span>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Enter password" />
        </div>
        <div class="input-container">
            <input type="password" name="password_confirmation" placeholder="Enter confirm password" />
        </div>
        <button type="submit" class="submit">Sign up</button>

        <p class="signup-link">
            Already have an account?
            <a href="{{ route('login') }}">Sign in</a>
        </p>
    </form>
</div>
</body>
</html>
