<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Forgotten Password</h2>
    <form action="/forgottenpassword" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter your email" required />
    <button>Reset Password</button>
    </form>
</body>
</html>