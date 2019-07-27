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

//Controllers
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

/* 
Routing without a controlleer
Route::get('/', function () {
    $tasks = [
        'Meet Big Booty Bitches',
        'Bang Big Booty Bitches',
        'Feel shame and cry'
    ];
    return view('welcome', [
        //This line creates a tasks variable and passes the $tasks array into it. 
        //The view will have access to the 'tasks' data
        'tasks' => $tasks,
        'foo' => 'foobar',
        //'alert' => '<script>alert("foobar")</script>'

        //SQL querys will go here
    ]);
    //alternitive return

    //return view('welcome')=>withTasks($tasks)=>withFoo('foo');
}); */

/* 
Route::get('/', function () {
    return view('home')=>with([
        'foo' => 'bar',
        'tasks => ['some task', 'another task']
    ])
});
 */



