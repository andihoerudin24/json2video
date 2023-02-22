<?php
require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$movie = new Movie;
$movie->setAPIKey("RSU5ntFSJZ3cMICuK7So52B1xVQfv2pl7sH9vseT");
$movie->resolution = 'instagram-story';
$movie->quality = 'high';
$movie->draft = true;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://cdnstatic.detik.com/internal/testpage/alhamdulillah%20challenge%2031s_2.mp4?q=4'
]);

$scene1->addElement([
	'type' => 'html',
	'html' => '<div class="min-w-screen font-medium font-sans absolute mx-auto w-full top-[45rem] flex items-end justify-center px-5 py-5">
		<div class="w-full max-w-screen-md mx-auto rounded-[1.4rem] bg-white border-t-[4rem] border-solid border-yellow-500 opacity-95 shadow-lg px-5 pt-2 pb-11 text-gray-800">
			<div class="w-full">
				<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
				<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah satu Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
				<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
			</div>

			<hr class="flow-root mt-9 border-solid border-emerald-800">

			<div class="w-full">
				<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
				<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem] ">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
				<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
			</div>

			<hr class="flow-root mt-9 border-solid border-emerald-800">
			
			<div class="w-full">
				<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
				<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
				<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
			</div>

			<hr class="flow-root mt-9 border-solid border-emerald-800">

			</div>
		</div>',
	'tailwindcss' => true,
	'start' => 4,
	'duration' =>4,
	'fade-in' => 0.5,
	'fade-out' => 0.25,
]);	

$scene1->addElement([
	'type' => 'html',
	'html' => '<div class="min-w-screen font-medium font-sans absolute mx-auto w-full top-[45rem] flex items-end justify-center px-5 py-5">
				<div class="w-full max-w-screen-md mx-auto rounded-[1.4rem] bg-white border-t-[4rem] border-solid border-yellow-500 opacity-95 shadow-lg px-5 pt-2 pb-11 text-gray-800">
					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah dua Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem] ">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">
					
					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

				</div>
			</div>',
	'tailwindcss' => true,
	'start' => 9,
	'duration' =>4,
	'fade-in' => 0.5,
	'fade-out' => 0.25,
]);

$scene1->addElement([
	'type' => 'html',
	'html' => '<div class="min-w-screen font-medium font-sans absolute mx-auto w-full top-[45rem] flex items-end justify-center px-5 py-5">
				<div class="w-full max-w-screen-md mx-auto rounded-[1.4rem] bg-white border-t-[4rem] border-solid border-yellow-500 opacity-95 shadow-lg px-5 pt-2 pb-11 text-gray-800">
					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah tiga Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem] ">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">
					
					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

				</div>
			</div>',
	'tailwindcss' => true,
	'start' => 14,
	'duration' =>4,
	'fade-in' => 0.5,
	'fade-out' => 0.25,
]);

$scene1->addElement([
	'type' => 'html',
	'html' => '<div class="min-w-screen font-medium font-sans absolute mx-auto w-full top-[45rem] flex items-end justify-center px-5 py-5">
				<div class="w-full max-w-screen-md mx-auto rounded-[1.4rem] bg-white border-t-[4rem] border-solid border-yellow-500 opacity-95 shadow-lg px-5 pt-2 pb-11 text-gray-800">
					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah empat Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem] ">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">
					
					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

				</div>
			</div>',
	'tailwindcss' => true,
	'start' => 19,
	'duration' =>4,
	'fade-in' => 0.5,
	'fade-out' => 0.25,
]);

$scene1->addElement([
	'type' => 'html',
	'html' => '<div class="min-w-screen font-medium font-sans absolute mx-auto w-full top-[45rem] flex items-end justify-center px-5 py-5">
				<div class="w-full max-w-screen-md mx-auto rounded-[1.4rem] bg-white border-t-[4rem] border-solid border-yellow-500 opacity-95 shadow-lg px-5 pt-2 pb-11 text-gray-800">
					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah lima Hari ini kita bisa bukber di warteg pada siang hari bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem] ">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">
					
					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

				</div>
			</div>',
	'tailwindcss' => true,
	'start' => 24,
	'duration' =>4,
	'fade-in' => 0.5,
	'fade-out' => 0.25,
]);

$movie->addScene($scene1);

// Finally, render the movie
$awal =microtime(true);
$res=$movie->render();
// Wait for the movie to be rendered
$movie->waitToFinish();
$akhir =microtime(true);
$lama= $akhir - $awal;
echo "lama eksekusi".$lama; 
var_dump($movie->getStatus());

//22.202974796295
//15.459395885468
//15.363004922867
//15.237586021423