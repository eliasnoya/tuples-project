<?php

use Tuples\Integration\App;

require_once '../vendor/autoload.php';

/**
 * Bootstrap APP (classic implementation, aim root of apache/nginx to /public)
 */
$app = new App('../');

// Setup default configuration, enviorment (with dotenv to) and dependencies
// Depedenencies: Router, RouteResolver, Request, Response, ExceptionHandler
$app->defaults();

$app->use(\Tuples\Http\Middleware\Cors::class);
$app->use(\Tuples\Http\Middleware\Helmet::class);
$app->useIf(isProduction(), \Tuples\Http\Middleware\Gzip::class);

// Utilizes Tuples\DatabasePool and binds the default connection to the container
$app->useDefaultDatabase(env('DEFAULT_DB_DSN'), env('DEFAULT_DB_USER'), env('DEFAULT_DB_PASS'));

$app->bindDependencies(include_once "../config/dependencies.php");

// Adds another database using the last parameter $connName to differentiate it from the "default" connection
// $app->useDatabase("secondary", "...", "...", "...", []);

// Adds routes from a file that returns an array with Route and RouteGroup instances
$app->routes(include_once '../config/routes.php');

// Emits the response
$app->emit();
