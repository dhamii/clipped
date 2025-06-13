<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .leftnav {
            display: flex;

        } 
        p{
            margin-top: 10px;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
        }

        .rightnav {
            display: flex;
            justify-content: space-between;
            gap: 20px;

        }

        h1 {
            font-size: 70px;
            font-weight: 500;
            text-align: center;
        }

        .main-content {
            display: flex;
            width: 100%;
            height: 100vh;
            gap: 20px;
            padding: 0px 100px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .clipinfo {
            font-size: 20px;
            text-align: center;
            /* line-height: 10.5px; */
            line-break: auto;
        }

        .button-group {
            display: flex;
            gap: 20px;
        }

        .button-1 {
            background-color: gray;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 25px;
        }

        .button-2 {
            background-color: white;
            color: black;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 25px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>
    <div class="nav-container">
        <div class="leftnav"><i class="bi bi-clipboard fs-2" style="vertical-align: top;"></i><p>Clipboard</p></div>
        <div class="rightnav">
            <div>
                <a href="/clip">
                    Home
                </a>
            </div>
            <div>
                Features
            </div>
            <div>
                Pricing
            </div>
            <div>
                <a href="/login">
                    Login
                </a>
            </div>
        </div>
    </div>
    <div class="main-content">
        <h1>Clipboard for everything</h1>
        <div class="clipinfo">Organize your work and life with Clipboard. Store text snippets, links, and
            other information in one place. Access your clipboard from anywhere, anytime.
        </div>
        <div>
            <div class="button-group">
                <div class="button-1"><a href="/clip">Get Started</a></div>
                <div class="button-2"><a href="#">Check documentation</a></div>
            </div>
        </div>
    </div>
</body>

</html>