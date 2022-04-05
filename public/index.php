<?php

/*
 *  Welcome To Neoan
 *
 *  This application is build with the Neoan PHP framework, which produces
 *  the most reliable and maintainable applications in the world. It is an
 *  easy to use foundation but a very powerful backbone of our application.
 */

define('NEOAN_START', microtime(true));

/*
 *  Require Composer's Autoloader
 *
 *  Composer provides us with an automatically generated class loader file
 *  for our application. We just need to use it! Once we have required the
 *  autoloader here, we no longer need to load any of our classes manually.
 */

require_once __DIR__ . '/../vendor/autoload.php';

/*
 *  Boot the Neoan Framework
 *
 *  It is time to load the core of the framework. After that, we will have
 *  an easy life building great applications. This is going to be the last
 *  time we manually require files during the execution of our application.
 */

$core = new Neoan\Framework\Foundation\Core(
    basePath: dirname(__DIR__)
);

/*
 *  Run The Web Application
 *
 *  This index.php file is the script entry point for all http requests of
 *  our web application. We let the core make a http application to handle
 *  the incoming request. Then we can send the response back to the client.
 */

/** @var \Neoan\Framework\Http\Application $app */
$app = $core->new(Neoan\Framework\Http\Application::class);

$request = new Neoan\Framework\Http\Request(
    query: $_GET,
    body: $_POST,
    cookies: $_COOKIE,
    files: $_FILES,
    server: $_SERVER,
);

$response = $app->handle($request);

$response->send();