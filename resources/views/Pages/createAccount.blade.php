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
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
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

        .more-viewable-link {
            font-size: xx-large;
            color: #c82333;
            font-weight: bold;
        }

        .content {
            text-align: center;
        }

        .title {
            color: black;
            font-size: 84px;
        }

        .back {
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover
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
        <a href="/kimple_blog/public" class="more-viewable-link">MENU</a>
        <div class="title" > REGISTER</div>
        <br>
        <div class="links">
            <form action="/kimple_blog/app/bdd/NewUser.php" method="post">
                LOGIN :
                <input type="text" name="login" />
                <br><br>PASSWORD :
                <input type="password" name="pass" />
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>