<?php

require 'vendor/autoload.php';

use JSON2Video\Movie;
use JSON2Video\Scene;

$movie = new Movie;
$movie->setAPIKey("LhYpNpnaEp7mmX514f0sTaavZgWrym8z590SF4rM");
$movie->quality = 'high';
$movie->draft = false;
$scene = new Scene;
$scene->comment = 'Scene video #1';
$scene->duration=120;
$scene->addElement([
	'type' => 'video',
	'src' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
]);
$scene->addElement([
	'start'    => 1,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>text pertama scene1</h6><br><h6>text kedua scene3</h6><br><h6>text ketiga scene3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 6,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
    'html' => '<h6>ganti text kedua</h6><br><h6>text kedua</h6><br><h6>ganti text kedua</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 11,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);

$scene->addElement([
	'start'    => 16,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 21,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal 2</h6><br><h6>ganti text jamal 2</h6><br><h6>ganti text jamal 3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 26,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text udin</h6><br><h6>ganti text udin </h6><br><h6>ganti text udin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);

//
$scene->addElement([
	'start'    => 31,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>text pertama scene1</h6><br><h6>text kedua scene3</h6><br><h6>text ketiga scene3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 36,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text kedua</h6><br><h6>text kedua</h6><br><h6>ganti text kedua</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 41,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);

$scene->addElement([
	'start'    => 46,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 51,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal 2</h6><br><h6>ganti text jamal 2</h6><br><h6>ganti text jamal 3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 56,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text udin</h6><br><h6>ganti text udin </h6><br><h6>ganti text udin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);

//
$scene->addElement([
	'start'    => 60,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>text pertama scene1</h6><br><h6>text kedua scene3</h6><br><h6>text ketiga scene3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 66,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text kedua</h6><br><h6>text kedua</h6><br><h6>ganti text kedua</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 71,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);

$scene->addElement([
	'start'    => 76,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 81,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal 2</h6><br><h6>ganti text jamal 2</h6><br><h6>ganti text jamal 3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 86,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text udin</h6><br><h6>ganti text udin </h6><br><h6>ganti text udin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);


$scene->addElement([
	'start'    => 60,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>text pertama scene1</h6><br><h6>text kedua scene3</h6><br><h6>text ketiga scene3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 66,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text kedua</h6><br><h6>text kedua</h6><br><h6>ganti text kedua</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 71,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);

$scene->addElement([
	'start'    => 76,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 81,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal 2</h6><br><h6>ganti text jamal 2</h6><br><h6>ganti text jamal 3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 86,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text udin</h6><br><h6>ganti text udin </h6><br><h6>ganti text udin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);

////
$scene->addElement([
	'start'    => 91,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>text pertama scene1</h6><br><h6>text kedua scene3</h6><br><h6>text ketiga scene3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 96,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text kedua</h6><br><h6>text kedua</h6><br><h6>ganti text kedua</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 101,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br><h6>ganti text hoerudin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);

$scene->addElement([
	'start'    => 106,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br><h6>ganti text jamal</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 110,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text jamal 2</h6><br><h6>ganti text jamal 2</h6><br><h6>ganti text jamal 3</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);
$scene->addElement([
	'start'    => 86,
	'duration' => 5,
	'type' => 'html',
	'style' => '001',
	'html' => '<h6>ganti text udin</h6><br><h6>ganti text udin </h6><br><h6>ganti text udin</h6><br>',
	'settings' => [
		'shadow' => 0,
		'font-size' => '80px',
		'font-family' => 'Inter',
		'font-weight' => '900',
	],
	'width' => 960,
	'x' => 10,
	'y' => 20,
]);




$movie->addScene($scene);
$result = $movie->render();
$movie->waitToFinish();
