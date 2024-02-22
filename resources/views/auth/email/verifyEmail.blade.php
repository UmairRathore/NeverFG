<h1>Verify Email Account Registeration</h1>

You can verify email from below link:
<a href="{{ route('verification.verify', ['email' => $email, 'token' => $token]) }}">Verify Signup</a>
