<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/lang/{locale}', function (string $locale) {
    abort_unless(in_array($locale, ['fr','en']), 404);
    session(['locale' => $locale]);
    return back();
})->name('lang.switch');
