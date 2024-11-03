<?php

use App\Model\Pustaka\Book;
use App\View;

require_once 'vendor/autoload.php';

$book = Book::all();
View::json($book);