<?php

use App\Model\Pustaka\Category;
use App\View;

require_once 'vendor/autoload.php';

$categories = Category::all();
View::json($categories);