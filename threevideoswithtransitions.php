<?php  

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("G9XEDI7D3p7nnatPJUyIJ6HYgAa422J92k6TQfcx");
$movie->resolution = 'full-hd';

// Create the scenes of the movie
//video original 11 second
// Create SCENE 1
$scene1 = new Scene;
$scene1->comment = 'Scene #1';
$scene1->duration = 5;
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-01.mp4'
]);
$movie->addScene($scene1);

// Create SCENE 2
$scene2 = new Scene;
$scene2->comment = 'Scene #2';
$scene2->transition = [
	'style' => 'circleopen',
	'duration' => 1.5
];
$scene2->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/beach-02.mp4'
]);
$movie->addScene($scene2);

// Create SCENE 3
//video original 15 second
$scene3 = new Scene;
$scene3->comment = 'Scene #3';
$scene3->transition = [
	'style' => 'fade',
	'duration' => 2
];
$scene3->addElement([
	'type' => 'video',
	'duration' => 5,
	'src' => 'https://assets.json2video.com/assets/videos/beach-03.mp4'
]);
$movie->addScene($scene3);

// Finally, render the movie
$movie->render();

$result= $movie->getStatus("eAxwhPDCRrcghpCd");
echo json_encode($result);
// Wait for the movie to be rendered
//$movie->waitToFinish();
//output = https://assets.json2video.com/clients/xe80h7mk2b/renders/2023-02-07-53253.mp4