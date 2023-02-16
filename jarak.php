<?php
require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$data = [
 "textpertama" =>  [
	"start" => 2,
	"text1"  => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.",
	"text2"  => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.",
	"text3"  => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.",
	"duration" => 5,
   ],
 "textkedua" => [
	"start" => 8,
	"text1"  => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.",
	"text2"  => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.",
	"text3"  => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.",
	"duration" => 4,
   ]
];
$movie = new Movie;
$movie->setAPIKey("uUBEYVAfaN9MgWyfojlWK5VeCWYUAdzz63vMOMVU");
$movie->resolution = 'instagram-story';
$movie->quality = 'high';
$movie->draft = true;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://cdnstatic.detik.com/internal/testpage/vid-bg.mp4'
]);

foreach ($data as $key => $value) {
	$scene1->addElement([
		'type' => 'html',
		'html' => '<div class="min-w-screen min-h-screen flex items-end justify-center px-5 py-5">
						<div class="w-full mx-auto rounded-lg bg-white border-t-[15px] border-solid border-emerald-800 opacity-95 shadow-lg px-5 pt-2 pb-5 text-gray-800">
						<div class="w-full">
							<div class="text-3xl text-emerald-700 text-left leading-tight h-3">“</div>
							<p class="text-3xl text-gray-600 text-center px-5 break-word max-h-[8.5rem] overflow-ellipsis overflow-hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.</p>
							<div class="text-3xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
						</div>
	
						<hr class="mt-2 border-solid border-emerald-800">
	
						<div class="w-full">
							<div class="text-3xl text-emerald-700 text-left leading-tight h-3">“</div>
							<p class="text-3xl text-gray-600 text-center px-5 max-h-32 text-ellipsis overflow-hidden ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae.</p>
							<div class="text-3xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
						</div>
	
						<hr class="mt-2 border-solid border-emerald-800">
	
						<div class="w-full">
							<div class="text-3xl text-emerald-700 text-left leading-tight h-3">“</div>
							<p class="text-3xl text-gray-600 text-center px-5 max-h-32 overflow-hidden text-elipsis">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
							<div class="text-3xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
						</div>
						</div>
					</div>',
		'tailwindcss' => true,
		'start' => $value["start"],
		'duration' => $value["duration"]
	]);
}

$movie->addScene($scene1);

// Finally, render the movie
$res=$movie->render();

// Wait for the movie to be rendered
//$movie->waitToFinish();
var_dump($res);