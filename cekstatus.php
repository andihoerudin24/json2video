<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;


$movie = new Movie;
$movie->setAPIKey("rsh7gGGZVo6Sj8cklzrmc348Jn1l1mCa31tmN4Fa");
echo json_encode($movie->getStatus("CwGP3cE6vdx4V2vI"));
