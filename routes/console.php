<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

/*
Schedule::call(function(){
    DB::table('recent_users')->delete();
})->everyMinute();

Schedule::call(function(){
    DB::table('recent_users')->insert(['name'=>'darko']);
})->everyTwoSeconds();
*/