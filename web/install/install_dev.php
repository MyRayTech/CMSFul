<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

$root_dir = dirname(dirname(__DIR__));
$loader   = require $root_dir . '/etc/autoload.php';
Debug::enable();

$kernel   = new InstallKernel('dev', true);
$kernel->loadClassCache();
$request  = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
