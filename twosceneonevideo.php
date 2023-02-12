<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("oDw4Zo4WoiaQJc5dHHhfQaQsjpE0butB6uyIJSTc");
$movie->resolution = 'full-hd';

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->comment = 'Scene #1';
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-01.mp4'
]);
$movie->addScene($scene1);

// Create SCENE 2
$scene2 = new Scene;
$scene2->comment = 'Scene #2';
$scene2->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-02.mp4'
]);
$movie->addScene($scene2);

// Finally, render the movie
$result = $movie->render();
var_dump($result);
// Wait for the movie to be rendered
$movie->waitToFinish();

//output = https://assets.json2video.com/clients/fm6vm5mqwa/renders/2023-02-06-84526.mp4