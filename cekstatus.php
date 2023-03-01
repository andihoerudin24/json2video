<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;


$movie = new Movie;
$movie->setAPIKey("RSU5ntFSJZ3cMICuK7So52B1xVQfv2pl7sH9vseT");
echo json_encode($movie->getStatus("VTTU8fuBiD7ioRue"));
//IHeJdfOCsBBfCJMg
//cfgk0tbseiJxiG5g
//I4vcgTQujcFSHAHv


//proses tanpa harus nunggu proses itu selesai

//proses query string 1
//lama eksekusi2.4444379806519
//lama eksekusi3.795224905014
//lama eksekusi2.5550789833069

//proses query string 2
//lama eksekusi2.118889093399
//lama eksekusi2.449036121368
//lama eksekusi2.2189428806305