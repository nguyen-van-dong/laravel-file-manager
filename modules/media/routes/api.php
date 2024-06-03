<?php

use Illuminate\Support\Facades\Route;

Route::prefix(config('imageservice.prefix'))->group(function() {
  Route::get('test', function() {
    dd(trans('imageservice::messages.welcome'));
  });
});
