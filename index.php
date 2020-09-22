<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>Php-Ajax-Dischi</title>
</head>

<body>
    <header>
        <div class="header-container">
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </div>
    </header>

    <main>
        <div class="cds-container">
            <?php foreach ($database as $cd) { ?>
                <div class="cd">
                    <img src="<?= $cd['poster']; ?>" />
                    <h3><?= $cd['title'] ?></h3>
                    <small><?= $cd['author']; ?></small>
                    <strong><?= $cd['year']; ?></strong>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>