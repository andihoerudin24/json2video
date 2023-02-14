<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;


$movie = new Movie;
$movie->setAPIKey("LhYpNpnaEp7mmX514f0sTaavZgWrym8z590SF4rM");
echo json_encode($movie->getStatus("4fBj4p7vcQwOlbE3"));
