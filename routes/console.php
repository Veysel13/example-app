<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();



Schedule::call(function () {
    dispatch(new \App\Jobs\ProcessPodcast());


    //Log::info('everyMinute',['everyMinute']);
})->everySecond();
/*
Schedule::command('app:test-command')->everyMinute();
*/
