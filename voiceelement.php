<?php

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("FVvHEjQzET45zUMfBaDCb8O2vtTo3SsQ4fY4XLZp");
$movie->resolution = 'full-hd';
$movie->quality = 'high';
$movie->draft = false;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->comment = 'Scene #1';
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-01.mp4',
	'zoom' => 5
]);
$scene1->addElement([
	'type' => 'voice',
	'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo com',
	'start' => 1.5,
	'voice' => 'id-ID-GadisNeural'
]);
$movie->addScene($scene1);

// Finally, render the movie
$movie->render();

// Wait for the movie to be rendered
$movie->waitToFinish();

//output = https://assets.json2video.com/clients/uemgjsf42k/renders/2023-02-09-52361.mp4