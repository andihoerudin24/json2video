<?php 

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("oDw4Zo4WoiaQJc5dHHhfQaQsjpE0butB6uyIJSTc");
$movie->resolution = 'full-hd';
$movie->quality = 'high';

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->duration = 10;
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-01.mp4',
	'scale' => [
		'width' => 960,
		'height' => 540
	]
]);
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-02.mp4',
	'scale' => [
		'width' => 960,
		'height' => 540
	],
	'x' => 960
]);
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-03.mp4',
	'scale' => [
		'width' => 960,
		'height' => 540
	],
	'y' => 540
]);
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-04.mp4',
	'scale' => [
		'width' => 960,
		'height' => 540
	],
	'x' => 960,
	'y' => 540
]);
$movie->addScene($scene1);

// Finally, render the movie
$result = $movie->render();
var_dump($result);
// Wait for the movie to be rendered
$movie->waitToFinish();

// output = https://assets.json2video.com/clients/fm6vm5mqwa/renders/2023-02-06-05293.mp4
// output-original  = https://assets.json2video.com/clients/fm6vm5mqwa/renders/2023-02-06-39874.mp4  