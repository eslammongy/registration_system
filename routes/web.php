<?php


use App\controllers\HomeController;
use proSrc\http\Route;

Route::get('/', [HomeController::class, 'index']);

/**/