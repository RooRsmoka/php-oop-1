<?php

class Movie {
    public $title;
    public $genres;
    public $releaseDate;
    
    function __construct($_title, $_genres, $_releaseDate) {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->releaseDate = $_releaseDate;
    }

    public function generateMovieCard() {
        echo 
        "<div class='movie-card'>". 
            "<h3>". $this->title ."</h3>".
            "<p>". $this->genres ."</p>".
            "<p>". $this->releaseDate ."</p>".
        "</div>";
    }
}

$firstMovie = new Movie("The Matrix", "Action, Science Fiction", "May 1999");
$secondMovie = new Movie("Avengers: Endgame", "Action, Adventure, Science Fiction", "April 2019");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <?php
            echo $firstMovie->generateMovieCard();
            echo $secondMovie->generateMovieCard();
            ?>
        </div>
    </body>
</html>