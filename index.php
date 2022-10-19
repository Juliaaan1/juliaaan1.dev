<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="title" content="Ivan Abashin">
    <meta property="og:title" content="Ivan Abashin">

    <meta property="description" content="Back-end devloper, Team Lead">
    <meta property="og:description" content="Back-end devloper, Team Lead">

    <meta property="image" content="/images/art.jpg">
    <meta property="og:image" content="/images/art.jpg">

    <meta property="url" content="https://juliaaan1.dev/">
    <meta property="og:url" content="https://juliaaan1.dev/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <title>About me</title>
</head>
<body>
<div class="container">
    <div class="row terminal">
        <div class="col-5">
            <img src="/images/art.jpg" class="img-fluid" alt="Hand drawn portrait">
        </div>
        <div class="col">
            <h3>Ivan Abashin</h3>
            <p>> <?= date_diff(new DateTime(), new DateTime('1996-09-25'))->format('%y years old'); ?></p>
            <p>> Volgograd, Russian Federation</p>
            <p>> Back-end developer since <b>May 2018</b></p>
            <p>&nbsp;&nbsp;Already
                <?= date_diff(new DateTime(), new DateTime('2018-05-04'))->format('%y years and %m months'); ?></p>
            <p>> Team Lead</p>

            <h3>Skills</h3>
            <p>> PHP 7.0 - 8.1</p>
            <p>> Unit and integration testing</p>

            <h3>Contacts</h3>
            <p>> Email: <a href="mailto:juiceworkmail@gmail.com">juiceworkmail@gmail.com</a></p>
            <p>> Telegram: <a href="https://telegram.me/juliaaan1_original">@juliaaan1_original</a></p>
        </div>
    </div>
    <div class="fixed-bottom bottom-panel">
        <p class="text-center">Juliaaan1 | <?= date('Y'); ?></p>
    </div>
</div>
</body>
<style>
    @font-face {
        font-family: "Fira Mono";
        src: url("fonts/fira_mono/FiraMono-Regular.ttf") format("truetype")
    }

    body {
        background-color: black;

        font-family: "Fira Mono", sans-serif;
        font-size: 14px;
        color: white;
    }

    .terminal {
        margin-top: 20px;
    }

    .bottom-panel {
        background-color: black;
    }

    a {
        color: white;
    }

    p {
        margin: 0;
        padding: 0;
    }

    h3 {
        margin-top: 15px;
    }
</style>
</html>