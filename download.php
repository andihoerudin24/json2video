<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;
$movie = new Movie;
$movie->setAPIKey("G9XEDI7D3p7nnatPJUyIJ6HYgAa422J92k6TQfcx");
$res= $movie->getStatus("osxFTivIkSCJNJc1");
$file = file_get_contents($res["movie"]["url"]);
file_put_contents('./download/file.mp4', $file);