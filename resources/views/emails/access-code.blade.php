<!DOCTYPE html>
<html>
<body>
    <h1>Hello, {{ $name }}</h1>
    <p>You have been granted access to the Application Stats Dashboard.</p>
    <p>Your unique access code is: <strong>{{ $code }}</strong></p>
    <p>Please go to <a href="{{ url('/stats') }}">{{ url('/stats') }}</a> and enter this code to view the live metrics.</p>
    <br>
    <p>Securely yours,<br>System Administrator</p>
</body>
</html>

