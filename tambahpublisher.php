<?php
use App\Model\Pustaka\Publisher;
use App\View;

require_once 'vendor/autoload.php';

$publisher = new Publisher();
$publisher->id = 11;
$publisher->name = 'Pustaka Nusantara';
$publisher->adress = 'Jl. Merdeka No. 20, Jakarta';
$publisher->phone = '021-12345678';
View::json($publisher->save());
