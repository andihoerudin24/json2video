<?php 

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("G9XEDI7D3p7nnatPJUyIJ6HYgAa422J92k6TQfcx");
$movie->resolution = 'full-hd';
$movie->quality = 'high';
$movie->draft = false;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->background_color = '#6BAA75';
$scene1->addElement([
	'type' => 'text',
	'style' => '003',
	'text' => 'JSON2Video is your video editing API',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900'
	],
	'width' => 960,
	'duration' => 120
]);
$movie->addScene($scene1);

// Finally, render the movie
$movie->render();

// Wait for the movie to be rendered
$movie->waitToFinish();

//output duration 5 second= https://assets.json2video.com/clients/xe80h7mk2b/renders/2023-02-07-09656.mp4
//output duration 120 second = https://assets.json2video.com/clients/xe80h7mk2b/renders/2023-02-07-07101.mp4