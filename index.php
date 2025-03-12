<?php
require_once 'vendor/autoload.php';

use Steampixel\Route;

Route::add('/', function() {
    echo 'Welcome to the homepage!';
});

Route::run('/tebChan');
?>