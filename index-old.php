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
            <?php
                include __DIR__ . './partials/data/data.php';
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
</body>
</html> 
