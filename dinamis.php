<?php
require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$data = [
 "textpertama" =>  [
	"start"    => 2,
	"text1"    => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.",
	"duration" => 6,
   ],
 "textkedua" => [
	"start"  => 8,
	"text1"  => "Lorem ke dua, ipsum kedua dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.",
	"duration" => 3,
   ]
];
$movie = new Movie;
$movie->setAPIKey("2pJoTy6ANj9trvpJ206TNaRX90Xl4KHF6xsbkji3");
$movie->resolution = 'instagram-story';
$movie->quality = 'high';
$movie->draft = false;

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
					<div class="w-full max-w-screen-md font-sans mx-auto rounded-lg bg-white border-t-[2rem] border-solid border-emerald-800 opacity-95 shadow-lg px-5 pt-2 pb-11 text-gray-800" >
						<div class="w-full">
							<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
							<p class="text-[2.4rem] text-gray-600 text-center px-5 break-word max-h-[16rem]">'.$value['text1'].'</p>
							<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
						</div>
						<hr class="flow-root mt-9 border-solid border-emerald-800">
					</div>
			</div>',
		'tailwindcss' => true,
		'start' => $value["start"],
		'duration' => $value["duration"],
		'fade-in' => 0.5,
		'fade-out' => 0.25,
	]);
}

$movie->addScene($scene1);

// Finally, render the movie
$res=$movie->render();

// Wait for the movie to be rendered
//$movie->waitToFinish();
var_dump($res);