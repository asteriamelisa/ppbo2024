<?php

use App\Model\Pustaka\Book;
use App\View;

require_once 'vendor/autoload.php';

$book = new Book();
$id = $_GET['id'];
$bookDetail = $book->detail($id);
View::json($bookDetail);