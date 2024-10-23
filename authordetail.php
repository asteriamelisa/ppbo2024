<?php


use App\Model\Pustaka\Author;
use App\View;


require_once 'vendor/autoload.php';


$author = new Author();
$author->detail(id:6);
View::json($author);