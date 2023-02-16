<?php

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("uUBEYVAfaN9MgWyfojlWK5VeCWYUAdzz63vMOMVU");
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
$scene1->addElement([
	'type' => 'html',
	'html' => '<div style="width:1920px; height:1080px; border:1px solid #000000; display:flex; flex-direction: column; justify-content: space-evenly; align-items: center;">
					<div style="background-color: gray;">consectetur adipisicing elit. Pariatur sequi odit placeat ullam esse corrupti obcaecati ad excepturi accusantium. </div>
					<div style="background-color: blue;">consectetur adipisicing elit. Pariatur sequi odit placeat ullam esse corrupti obcaecati ad excepturi accusantium. </div>
					<div style="background-color: yellow;">consectetur adipisicing elit. Pariatur sequi odit placeat ullam esse corrupti obcaecati ad excepturi accusantium. </div>
				</div>',
	// 'settings' => [
	// 	"font-family" => "https://fonts.cdnfonts.com/s/23620/Questrian.woff"
	// ]
]);
$movie->addScene($scene1);

// Finally, render the movie
$res=$movie->render();

// Wait for the movie to be rendered
$movie->waitToFinish();
//var_dump($res);