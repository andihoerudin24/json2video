<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;


$movie = new Movie;
$movie->setAPIKey("q6Ztx5fvrO4KVrgTDjCtp1gsINR2Ticb4FYZ4Lh1");
echo json_encode($movie->getStatus("osxFTivIkSCJNJc1"));
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