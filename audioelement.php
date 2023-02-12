<?php 

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("FVvHEjQzET45zUMfBaDCb8O2vtTo3SsQ4fY4XLZp");
$movie->resolution = 'full-hd';
$movie->quality = 'high';

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->comment = 'Scene #1';
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/thunder-storm-02.mp4'
]);
$scene1->addElement([
	'type' => 'audio',
	'src' => 'https://assets.json2video.com/assets/audios/thunder-01.mp3'
]);
$scene1->duration = 10;
$movie->addScene($scene1);

// Create SCENE 2
$scene2 = new Scene;
$scene2->comment = 'Scene #2';
$scene2->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/rain-01.mp4'
]);
$scene2->duration = 10;
$movie->addScene($scene2);

// Finally, render the movie
$movie->render();

// Wait for the movie to be rendered
$movie->waitToFinish();