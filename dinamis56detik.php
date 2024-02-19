<?php
require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

// Create and initialize the movie object
$awal =microtime(true);
$movie = new Movie;
$movie->setAPIKey("dw6LVqnwWi2QNotjuRxbB43QtYbhKqSWaXA26gIu");
$movie->resolution = 'instagram-story';
$movie->quality = 'high';
$movie->draft = true;

// Create the scenes of the movie

// Create SCENE 1
$scene1 = new Scene;
$scene1->addElement([
	'type' => 'video',
	'src' => 'https://cdnstatic.detik.com/internal/testpage/alhamdulillah%20challenge%2056s_2.mp4?q=13'
]);

$scene1->addElement([
	'type' => 'html',
	'html' => '<div class="min-w-screen font-medium font-sans absolute mx-auto w-full top-[45rem] flex items-end justify-center px-5 py-5">
		<div class="w-full max-w-screen-md mx-auto rounded-[1.4rem] bg-white border-t-[4rem] border-solid border-yellow-500 opacity-95 shadow-lg px-5 pt-2 pb-11 text-gray-800">
			<div class="w-full">
				<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
				<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">ganti satu</p>
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
				<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]"> Hari ini kita bisa berbuka puasa bersama keluarga tercinta, semoga kita diberi keberkahan selalu hingga akhir Ramadan tahun ini</p>
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
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">ganti dua</p>
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
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]"> ganti tiga</p>
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
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">ganti empat</p>
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
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">ganti akhir Ramadan tahun ini</p>
						<div class="flow-root text-7xl text-emerald-700 text-right leading-tight h-3 -mt-3">”</div>
					</div>

					<hr class="flow-root mt-9 border-solid border-emerald-800">

					<div class="w-full">
						<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem] ">Alhamdulillah Hari ini kita bisa berbuka puasa bersama keluarga tercinta</p>
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



/////
$scene1->addElement([
	'type' => 'html',
	'html' => '<div class="min-w-screen font-medium font-sans absolute mx-auto w-full top-[45rem] flex items-end justify-center px-5 py-5">
		<div class="w-full max-w-screen-md mx-auto rounded-[1.4rem] bg-white border-t-[4rem] border-solid border-yellow-500 opacity-95 shadow-lg px-5 pt-2 pb-11 text-gray-800">
			<div class="w-full">
				<div class="text-7xl text-emerald-700 text-left leading-tight h-3">“</div>
				<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">dua dua Ramadan tahun ini</p>
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
	'start' => 29,
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
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]"> ganti ok siap ini</p>
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
	'start' => 34,
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
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">ganti detikcom</p>
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
	'start' => 39,
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
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">ganti okokok</p>
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
	'start' => 44,
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
						<p class="text-[2.1rem] text-gray-600 text-center px-7 break-word max-h-[16rem]">ganti siap si oke</p>
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
	'start' => 49,
	'duration' =>4,
	'fade-in' => 0.5,
	'fade-out' => 0.25,
]);


$movie->addScene($scene1);
// Finally, render the movie

$res=$movie->render();
// Wait for the movie to be rendered
//$movie->waitToFinish();
$akhir =microtime(true);
$lama= $akhir - $awal;
$time = number_format(($akhir - $awal), 2);
echo "lama eksekusi ".$time; 
var_dump($movie->getStatus());

//query string 7 wording sama
//lama eksekusi 160.95048499107
//lama eksekusi 26.392766952515
//lama eksekusi 29.783457994461

//query string 8 wording sama
//lama eksekusi 154.50307106972
//lama eksekusi 28.202636957169
//lama eksekusi 29.093492031097


//query string 8 wording beda
//lama eksekusi 36.822894096375
//lama eksekusi 38.011016845703
//lama eksekusi 29.093492031097

//query string 12. wording beda
//lama eksekusi 157.1219899654
