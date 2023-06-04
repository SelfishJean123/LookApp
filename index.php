<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('index', 'DefaultController');
Routing::get('products', 'ProductController');
Routing::get('contact', 'DefaultController');
Routing::get('about', 'DefaultController');
Routing::get('favourites', 'ProductController');

Routing::post('signin', 'SecurityController');
Routing::post('signup', 'SecurityController');
Routing::post('addProduct', 'ProductController');
Routing::post('search', 'ProductController');

Routing::run($path);