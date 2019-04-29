<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Spatie\Browsershot\Browsershot;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// For the screenshotting of Spanish verbs' conjugations on SpanishDict.com
$router->get('/conj/{verb}', function ($verb) {
    $pathToImageDir = storage_path() . '/screenshots/';
    $imageName = $verb . '.png';
    $fullPath = $pathToImageDir . $imageName;

    // Make directory for screenshots if does not already exist.
    if (!file_exists($pathToImageDir)) {
        mkdir($pathToImageDir, 0755);
    }

    // Capture screenshot of first table on verb's conjugation page
    Browsershot::url('https://www.spanishdict.com/conjugate/' . $verb)
        ->select('table')
        ->dismissDialogs()
        ->deviceScaleFactor(4)
        ->windowSize(6000, 6000)
        ->save($fullPath);
});