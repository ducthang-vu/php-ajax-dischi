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
        <div class="cards-container central">
            <!-- TEMPLATE EXAMPLE 
            <div class="card">
                <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" class="card__poster" alt="">
                <h3 class="card__title text-center">New Jersey</h3>
                <h4 class="card__author text-center">Bon Jovi</h4>
                <h5 class="card__year text-center">1988</h5>
            </div>-->

            <?php
                include 'json-script.php';
                $template = '
                    <div class="card">
                        <img src=%s class="card__poster" alt="">
                        <h3 class="card__title text-center">%s</h3>
                        <h4 class="card__author text-center">%s</h4>
                        <h5 class="card__year text-center">%s</h5>
                    </div>';

                foreach ($database as $item) {
                    echo sprintf($template,
                                $item['poster'],
                                $item['title'],
                                $item['author'],
                                $item['year']
                                );
                }

            ?>
        </div>
    </main>

    <!-- TEMPLATE-->
    <script id="entry-template" type="text/x-handlebars-template">
        <div class="entry">
            <h1>{{title}}</h1>
            <div class="body">
            {{body}}
            </div>
        </div>
    </script>

    <!-- SCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/89ef06fff6.js" crossorigin="anonymous"></script>
    <script src="dist/script/main.js"></script>
</body>
</html> 
