<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;


$movie = new Movie;
$movie->setAPIKey("GuwDKZfL9E7PNSPiDhgLR9Llu8eYcHcr1SkgMedt");
echo json_encode($movie->getStatus("ItoGNsrOSBV8eReZ"));
