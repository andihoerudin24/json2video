<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("oDw4Zo4WoiaQJc5dHHhfQaQsjpE0butB6uyIJSTc");
$movie->resolution = 'full-hd';
$movie->draft=false;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->comment = 'Scene #1';
$scene1->addElement([
	'type' => 'video',
	'src' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
	'duration' => 20,
	'scale' => [
		'width' => 1920,
		'height' => 1080
	],
	'x' => 1920,
	'y' => 1080,
]);
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-02.mp4',
	'start' => 11
]);
$movie->addScene($scene1);

// Finally, render the movie
$movie->render();

// Wait for the movie to be rendered
$movie->waitToFinish();