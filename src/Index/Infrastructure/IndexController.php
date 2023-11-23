<?php

namespace Src\Index\Infrastructure;

use Src\Index\Application\IndexService;
use Tuples\Http\Contracts\Controller;

class IndexController extends Controller
{

    public function index(IndexService $service)
    {
        return $service->execute($this->req->query("hello", "Tuples Framework"));
    }
}
