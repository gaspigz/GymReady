<!DOCTYPE html>
<html>
<head>
    <title>GYM READY Verification email</title>
    <style>
        h1 {
            color: #5e9ca0;
            font-size: 2.5em;
        }
        p {
            color: #2e6c80;
            font-size: 1.5em;
        }
        .bodymail{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="bodymail">
        <h1>{{ $mailData['title'] }}</h1>
        <p>{{ $mailData['body'] }}</p>
    </div>
    
     
    <p>Thank you</p>
</body>
</html>