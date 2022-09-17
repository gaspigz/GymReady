<!DOCTYPE html>
<html>
<head>
    <title>GYM READY Verification email</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
    <p><a href="{{ $mailData['url'] }}">Verify your account</a></p>
     
    <p>Thank you</p>
</body>
</html>