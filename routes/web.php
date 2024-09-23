<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \App\Jobs\ExampleJob::dispatch()->onQueue('first');
    //\App\Jobs\ExampleJob::dispatch()->onConnection('database');

    return view('welcome');
});
