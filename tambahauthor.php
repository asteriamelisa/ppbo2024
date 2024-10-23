<?php
use App\Model\Pustaka\Author;
use App\View;


require_once 'vendor/autoload.php';


$author = new Author();
$author->id = 13;
$author->name = 'Asteria Melisa';
$author->description = 'Email: asteriamelisa24@gmail.com';
View::json($author->save());