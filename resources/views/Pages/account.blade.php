<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .more-viewable-link {
            font-size: xx-large;
            color: #c82333;
            font-weight: bold;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .back {
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover
        }

        .content {
            color: black;
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: aliceblue;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body background="/kimple_blog/resources/assets/fish_wp.jpg" class="back">
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md" >
            WELCOME  {{ $username }}
        </div>
        <a href="/kimple_blog/public" class="more-viewable-link">MENU</a>
    </div>
</div>
</body>
</html>