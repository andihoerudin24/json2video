<?php 

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("LhYpNpnaEp7mmX514f0sTaavZgWrym8z590SF4rM");
$movie->resolution = 'instagram-story';
$movie->quality = 'high';
$movie->draft = true;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-01.mp4'
]);
$scene1->addElement(
	[
	'type' => 'html',
	'style' => '001',
	'html' => '<div style="display:flex"><p>lorem ipsum dolar sit emmet lorem ipsum dolar sit emmet dolar sit emmet dolar sit emmet</p></div>',
	'settings' => [
		'color' => '#FFFFFF',
		'font-size' => '60px',
		'font-family' => 'Roboto Condensed',
		'shadow' => 2,
		'text-align' => 'center',
		'vertical-align' => 'top',
 	],
	'width' => 960,
	'x' => 900,
	'y' => 50
]
);
$movie->addScene($scene1);

// Finally, render the movie
$movie->render();

// Wait for the movie to be rendered
$movie->waitToFinish();