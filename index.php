<?php
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/data/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.css' integrity='sha512-hhSu9overYjKfSjPCtJW3688VHkfBh+W1pR5Mysll91bOJwGjYntytGTtVXb2aisFOaYXXDrO38NKXDRPJWu7A==' crossorigin='anonymous' />
    <title>php-oop-1</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <?php foreach ($db as $movie): ?>
                <div class="card col-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->getMovieTitle() ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $movie->getMovieInfo() ?></h6>
                        <h6>Genre:<?php $movie->printMovieGenre() ?></h6>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>