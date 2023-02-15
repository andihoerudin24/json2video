<?php
require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("rsh7gGGZVo6Sj8cklzrmc348Jn1l1mCa31tmN4Fa");
$movie->resolution = 'full-hd';
$movie->quality = 'high';
$movie->draft = true;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://assets.json2video.com/assets/videos/stars-01.mp4'
]);
$scene1->addElement([
		'type' => 'html',
		'html' => '<!DOCTYPE html>
                   <html>
                    <head>
                        <title>
                            How to create fade-in effect
                            on page load using CSS
                        </title>
                        <style>
                            body {
                                animation: fadeInAnimation ease 3s;
                                animation-iteration-count: 1;
                                animation-fill-mode: forwards;
                            }
                            @keyframes fadeInAnimation {
                                0% {
                                    opacity: 0;
                                }
                                100% {
                                    opacity: 1;
                                }
                            }
                        </style>
                    </head>
                    <body>
                        <h1 style="color: green">
                            GeeksForGeeks
                        </h1>
                        
                        <b>
                            How to create fade-in effect
                            on page load using CSS
                        </b>
                        
                        <p>
                            This page will fade in
                            after loading
                        </p>
                    </body>
                </html>',
		'start' => 5,
		'duration' => 5,
]);
$movie->addScene($scene1);
// Finally, render the movie
$res=$movie->render();
// Wait for the movie to be rendered
//$movie->waitToFinish();
var_dump($res);