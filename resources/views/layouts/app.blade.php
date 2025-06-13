<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
        body {
        min-height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-form {
        display: flex;
        flex-direction: column;
        width: 300px;
        /* height: 100vh; */
        margin: auto;
        padding: 20px 25px;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    p{
        font-size: 30px;
        font-weight: 500;
        margin-bottom: 20px;
    }
    input{
        width: 100%;
        height: 45px;
        padding: 10px;
        margin-bottom: 10px;
        /* margin-right: 10px;
        margin-left: 10px; */
        border: 1px solid grey;
        border-radius: 14px;
        outline: none; 
        background-color: white;
        font-size: 13px;
        padding-left: 35px;
    }
    button{
        width: 100%;
        height: 45px;
        background-color: hsl(211, 99%, 58%);
        color: white;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 16px;
    }
    h3 {
        font-size: 16px;
        margin-top: 10px;
        color: black;
    }
    span {
        color: hsl(211, 99%, 58%);
        cursor: pointer;
    }
    .input-groups {
        position: relative;
        width: 100%;
    }
    .icon-div {
        position: absolute;
        top: 20%;
        left: 12px;
        /* transform: translateY(-50%); */
        color: grey;
    }
    a{
        text-decoration: none;
        color: hsl(211, 99%, 58%);;
        align-self: flex-end;
        margin-bottom: 12px;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>