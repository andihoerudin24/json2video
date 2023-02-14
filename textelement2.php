<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("LhYpNpnaEp7mmX514f0sTaavZgWrym8z590SF4rM");
$movie->resolution = 'full-hd';
$movie->quality = 'high';
$movie->draft = true;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-01.mp4'
]);
$movie->addScene($scene1);
$scene2 = new Scene;
$scene2->addElement([
	'duration' => 10,
	'type' => 'text',
	'style' => '001',
	'text' => '"Lorem ipsum" has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
	'settings' => [
		'color' => '#FFFFFF',
		'font-size' => '60px',
		'font-family' => 'Roboto Condensed',
		'shadow' => 2,
		'text-align' => 'left',
		'vertical-align' => 'top'
	],
	'width' => 960,
	'x' => 900,
	'y' => 50
]);
$movie->addScene($scene2);

// Finally, render the movie
$res=$movie->render();
var_dump($res);
// Wait for the movie to be rendered
//$movie->waitToFinish();