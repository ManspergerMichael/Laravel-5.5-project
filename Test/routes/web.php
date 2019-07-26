<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tasks = [
        'Meet Big Booty Bitches',
        'Bang Big Booty Bitches',
        'Feel shame and cry'
    ];
    return view('welcome', [
        //This line creates a tasks variable and passes the $tasks array into it. 
        //The view will have access to the 'tasks' data
        'tasks' => $tasks
    ]);
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/contact', function () {
    return view('contact');
});

