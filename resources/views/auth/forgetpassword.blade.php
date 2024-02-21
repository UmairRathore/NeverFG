<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget Password</title>
    <link rel="stylesheet" href="{{('frontend/assets/css/Login.css')}}" />
</head>
<body>
<div class="login-wrapper">
    <form method="post" action="{{ route('submitforgetpassword') }}" class="custom-form">
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
        @csrf
        <p class="custom-form-title">Enter Email To Recover Password</p>
        <div class="input-container">
            <input type="email" name="email" placeholder="Enter email" />
            <span> </span>
        </div>
        <button type="submit" class="submit">Send Link</button>


    </form></div>
</body>
</html>
