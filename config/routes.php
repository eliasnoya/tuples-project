<?php

use Src\Index\Infrastructure\IndexController;
use Tuples\Http\Route;
use Tuples\Http\RouteGroup;


return [
    // Setup your routes and/or route groups here
    Route::get("/", [IndexController::class, 'index']),

    // Group example:
    // RouteGroup::prefix("/prefix")->add([
    //    Route::get("/", [Controller::class, 'index']),
    //    Route::get("/{name}", [Controller::class, 'page'])
    // ]),
];
