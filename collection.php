<?php
include_once __DIR__ . '/movie.php';

//  Placeholder viariable
$age = 20;

$movie_collection = [
    new Movie(
        "The Lord of the Rings",
        "Peter Jackson",
        "2001",
        "Fantasy",
        false,
        $age
    ),
    new Movie(
        "Alien",
        "Ridley Scott",
        "1977",
        "Horror",
        true,
        $age
    ),
    new Movie(
        "Stand by me",
        "Rob Reiner",
        "1984",
        "Dramatic",
        false,
        $age
    ),
    new Movie(
        "Eyes Wide Shut",
        "Stanley Kubrick",
        "1999",
        "Erotic",
        true,
        $age
    )
];