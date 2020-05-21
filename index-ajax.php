<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="./dist/img/spotify-logo.png" class="logo" alt="">
        </div>
    </header>

    <main>
        <ul id="cards-container" class="cards-container central"></ul>
    </main>

    <!-- TEMPLATE -->
    <script id="card-template" type="text/x-handlebars-template">
        <li class="card">
            <img src= {{ poster }} class="card__poster" alt="">
            <h3 class="card__title text-center"> {{ title }} </h3>
            <h4 class="card__author text-center"> {{ author }}</h4>
            <h5 class="card__year text-center"> {{ year }} </h5>
        </li>'
    </script>

    <!-- SCRIPT -->
    <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src="https://kit.fontawesome.com/89ef06fff6.js" crossorigin="anonymous"></script>
    <script src="dist/script/main.js"></script>
</body>
</html> 
