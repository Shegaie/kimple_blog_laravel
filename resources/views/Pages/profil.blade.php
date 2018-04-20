<?php include ("/opt/lampp/htdocs/kimple_blog/app/bdd/init_bdd.php"); ?>
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

        .top {
            top: 18px;
        }

        .top-left {
            position: absolute;
            left: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            color: gray;
            font-size: 84px;
        }

        .back {
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover
        }

        .more-viewable-link {
            font-size: xx-large;
            color: #c82333;
            font-weight: bold;
        }

        .links > a {
            color: white;
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
<body background="/kimple_blog/resources/assets/profil_wallpaper.jpg" class="back">
<div class="flex-center position-ref full-height">
    <div class="content">
        <a href="/kimple_blog/public" class="more-viewable-link top-right">LOG OUT</a>
        <br>
        <div class="title top"> ARTICLES </div>
        <div class="links"><?php
            $bdd = init_bdd_f();
            $reponse = $bdd->query("SELECT * FROM article");
            while ($donnees = $reponse->fetch())
            {
                echo $donnees['autor'];
                ?> : <br> <?php
                echo $donnees['subject'];
                ?> : <br> <?php
                echo $donnees['content'];
                ?> <br> <br> <?php
            }
            ?>
            <div/>
    <div/>
        <a href="writeArticle" class="top-left">Write an Article ! </a>
        <div/>
<div/>
</body>
</html>