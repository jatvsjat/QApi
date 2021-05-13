<?php

use QApi\Router;

Router::GET(path: '/', callback: 'App\V100\IndexController@indexAction')->addMiddleware(middleware: 'App\Middleware\IndexMiddleware',isClass: true);