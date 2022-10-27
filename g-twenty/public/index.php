<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "stylesheet" type="text/css" href="style/style.css" />

    <title>Test</title>
</head>
<body>
    <div id="nav-bar">
        <a class="active" href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact us</a>
        <a href="#about">About</a>
    </div>
    <h1>Tester page to learn git</h1>
    <p>Tester page for team project</p>

    <h1>Welcome to Team Project !!!</h1>
    <p>Tester page for uploading the code</p>
    <p>Adding content to the index.html page</p>

    <button id="button" onclick= "document.location='register.php'">Register here</button>

    <h2>PHONES CASES</h2>
    <h2>natalie test for pull change again test 2</h2>
    <h2>sydul test</h2> 

</body>
</html>