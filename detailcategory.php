<?php

use App\Model\Pustaka\Category;
use App\View;

require_once 'vendor/autoload.php';

$category = new Category();
$id = $_GET['id'];
$category->detail($id);
View::json($category);