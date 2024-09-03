<?php
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/data/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <h1 class="text-bg-success p-3">Movie List</h1>
            <?php foreach ($db as $movie): ?>
                <div class="card col-3 text-bg-light p-3">
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