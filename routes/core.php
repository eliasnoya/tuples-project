<?php

use Src\Index\Infrastructure\IndexController;
use Tuples\Http\Route;
use Tuples\Http\RouteGroup;

return [

    Route::get("/", [IndexController::class, 'index']),

];
