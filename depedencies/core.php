<?php

use Src\Index\Application\IndexService;

return [
    // Your Dependencies to Inject Here
    // [Name, DependencyClass or Closure, Type ('singleton' or 'callable')]

    // In project template index service is injected in controller, it must be instanced each time is requested
    [IndexService::class, IndexService::class, 'callable']
];
