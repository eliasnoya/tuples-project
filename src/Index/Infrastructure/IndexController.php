<?php

namespace Src\Index\Infrastructure;

use Src\Index\Application\IndexService;
use Tuples\Http\Contracts\Controller;

/**
 * Example Controller:
 * Extending Tuples\Http\Contracts\Controller is not mandatory for it to function.
 * If you choose to extend it, you will have Request $req and Response $res as controller properties.
 */
class IndexController extends Controller
{

    public function index(IndexService $service)
    {
        $message = $this->req->query("message", "Hello World");

        return $service->execute($message);
    }
}
