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
            <button id="btn-logo">
                <img src="./dist/img/spotify-logo.png" class="logo" alt="">
            </button>
            <input type="text" id="input" class="input" placeholder="search an author">
        </div>
    </header>

    <main>
        <ul id="cards-container" class="cards-container central"></ul>
        <div id="failure-mess" class="no-display text-center">
            <h3>No results, try again!</h3>
        </div>
    </main>

    <!-- TEMPLATE -->
    <script id="card-template" type="text/x-handlebars-template">
        <li class="card">
            <img src= {{ poster }} class="card__poster" alt="">
            <h3 class="card__title text-center"> {{ title }} </h3>
            <h4 class="card__author text-center"> {{ author }}</h4>
            <h5 class="card__year text-center"> {{ year }} </h5>
        </li>
    </script>

    <!-- SCRIPT -->
    <script src="dist/script/main.js"></script>
</body>
</html> 
