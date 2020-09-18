<?php
include __DIR__ . '/partials/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Ajax-Dischi</title>
</head>
<body>
    <h1>Dischi</h1>
    <?php foreach($database as $dato) {?>
    <ul>
        <li><?php echo $dato['title'] ?></li>
        <li><?php echo $dato['author'] ?></li>
        <li><?php echo $dato['year'] ?></li>
        <li><?php echo $dato['poster'] ?></li>
    </ul>
    <?php } ?>
</body>
</html>