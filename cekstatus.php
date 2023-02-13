<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;


$movie = new Movie;
$movie->setAPIKey("uUBEYVAfaN9MgWyfojlWK5VeCWYUAdzz63vMOMVU");
echo json_encode($movie->getStatus("ohM8kodx62fm4H3J"));
