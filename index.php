<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("GuwDKZfL9E7PNSPiDhgLR9Llu8eYcHcr1SkgMedt");
$movie->resolution = 'full-hd';
$movie->quality = 'high';
$movie->fps = 22;

// Create SCENE 1
$scene1 = new Scene;
$scene1->addElement([
	'duration'=> 120,
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-01.mp4',
	'extra-time' => 3.5
]);
$movie->addScene($scene1);

// Finally, render the movie
$res= $movie->render();
$movie->waitToFinish();
//echo json_encode($movie->getStatus("IFbOfD9ScicAEbtl"));
// Wait for the movie to be rendered
//output = https://assets.json2video.com/clients/fm6vm5mqwa/renders/2023-02-06-05979.mp4
//output2 = https://assets.json2video.com/clients/fm6vm5mqwa/renders/2023-02-06-41933.mp4