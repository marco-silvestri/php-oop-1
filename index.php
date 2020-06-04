<?php
include_once __DIR__ . '/collection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        foreach($movie_collection as $movie){
            if ($movie->visible){
                $movie->showMovie();
            }
        } ?>
    </ul>    
</body>
</html>