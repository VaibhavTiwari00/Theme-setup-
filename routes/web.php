<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/test/{id?}/{lol?}', function (string $test = null, string $test2 = null) {
    // return view('first');

    return "here:" . $test . " " . $test2;
})->whereNumber('id')->whereAlpha('lol');

// one more way to create a route 
Route::view('/first', 'first');


// creating sub routes 
Route::get('/test/subroute', function () {
    return view('subroutes');
});


// for numeric values only --->>> whereNumber('id)
// for alphabatic values only --->>> whereAlpha('name')
// for alphanumeric values only --->>> whereAlphaNumeric('name')

// for my defined values only --->>> whereIn('category',['movie','songs'])

// regular expression
// for my defined values only --->>> where('id','[@0-9]+')


// naming routes 
Route::get('/post/name', function () {
    return view('post');
})->name('named');


// redirection
Route::redirect('/post/name', '/test/5');


// route group
Route::prefix('admin')->group(function () {
    Route::get('/post', function () {
        return view('post');
    });
    Route::get('/category', function () {
        return view('category');
    });
});


// fallback route
Route::fallback(function () {
    return "<h1>page not found</h1>";
});
