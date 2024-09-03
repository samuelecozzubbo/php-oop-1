<?php

require_once __DIR__ . '/../Model/Movie.php';

$db = [
    new Movie("Back to the Future", 116, 1985, ["Adventure", "Sci-Fi"]),
    new Movie("The Matrix", 136, 1999, ["Action", "Sci-Fi"]),
    new Movie("Inception", 148, 2010, ["Sci-Fi", "Thriller"]),
    new Movie("The Shawshank Redemption", 142, 1994, ["Drama"]),
    new Movie("The Godfather", 175, 1972, ["Crime", "Drama"]),
    new Movie("Pulp Fiction", 154, 1994, ["Crime", "Drama"]),
    new Movie("The Dark Knight", 152, 2008, ["Action", "Crime", "Drama"]),
    new Movie("Forrest Gump", 142, 1994, ["Drama", "Romance"]),
    new Movie("Fight Club", 139, 1999, ["Drama", "Thriller"]),
    new Movie("The Lord of the Rings: The Fellowship of the Ring", 178, 2001, ["Action", "Adventure", "Fantasy"]),
    new Movie("Gladiator", 155, 2000, ["Action", "Adventure", "Drama"]),
    new Movie("Casablanca", 102, 1942, ["Drama", "Romance"]),
    new Movie("The Grand Budapest Hotel", 99, 2014, ["Comedy", "Drama"]),
    new Movie("Parasite", 132, 2019, ["Comedy", "Drama", "Thriller"]),
    new Movie("Spirited Away", 125, 2001, ["Animation", "Adventure", "Fantasy"]),
    new Movie("The Usual Suspects", 106, 1995, ["Crime", "Drama", "Thriller"]),
    new Movie("The Silence of the Lambs", 118, 1991, ["Crime", "Drama", "Thriller"]),
    new Movie("Jurassic Park", 127, 1993, ["Action", "Adventure", "Sci-Fi"]),
    new Movie("Blade Runner 2049", 163, 2017, ["Action", "Drama", "Sci-Fi"]),
    new Movie("Mad Max: Fury Road", 120, 2015, ["Action", "Adventure", "Sci-Fi"]),
    new Movie("The Terminator", 107, 1984, ["Action", "Sci-Fi"]),
    new Movie("Jaws", 124, 1975, ["Adventure", "Thriller"]),
    new Movie("E.T. the Extra-Terrestrial", 115, 1982, ["Family", "Sci-Fi"]),
    new Movie("The Social Network", 120, 2010, ["Biography", "Drama"]),
    new Movie("Interstellar", 169, 2014, ["Adventure", "Drama", "Sci-Fi"]),
];
