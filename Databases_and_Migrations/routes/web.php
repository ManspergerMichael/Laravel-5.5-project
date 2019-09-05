<?php
//any code written here will run everytime a new page is loaded
use Illuminate\Filesystem\Filesystem;
use App\Services\Twitter;
use App\Repositories\UserRepository;

/*
examnple of binding a function to the service container
this creates the function 'example' in the service container
when app('example') is run it returns an instance of the Example class
app()->bind('example', function(){
    return new \App\Example;

}); */

/*
Laravel is a service container accessed with
    app() or resolve() they do the exact same thing

*/

/*
lab space
To Reach something in the service container
app(Filesystem::class)

To bind something to the service container
    this code binds the Example function to the service container
    'example' is the key the function is the value
    run this with app('example)
app()->bind('example', function(){
    return new \App\Example

});
*/
//A singleton is a fuinction that runs once and returns the exact same output each time it is called
//In this case the singleton creates a single instance of the example class. each time app('example') is run
//the same instance is returned
/*
 app()->singleton('example', function(){
    return new \App\Example;
});
*/

/*
This is an example of using the service container to produce a api key
app()->singleton('twitter', function() {
    return new Twitter("123");
});
*/


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

GET (RETREVE)

POST (CREATE)

PUT not convention same as PATCH

PATCH (UPDATE)

DELETE (DESTROY)
|
*/


Route::get('/', function (UserRepository $users) {
    /*
    Notes from service container lesson
    //if singleton is used this will return two copies of the same instance
    dd(app('example'),app('example'));

    AUTO REDSOLVE
    If the example function above is not registered, Laravel will look at this line and
    find the App\Example class and return an instance of it.
    dd(app('App\Example'));


     */

    /*
    Notes from service provider
        dd(app('foo'));

        //instance of the twitter class created
        dd($twitter);
     */

    //dd(app('App\Example'));
    //dd($twitter);

    dd($users);
    return view('welcome');
});

Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');

//this creates RESTful routes in the format listed below
Route::resource('projects', 'ProjectsController');

/*
--Format of restful routing created with the resource helper


Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/




/*
route plan
GET /projects (index)
GET /projects/create (create)
GET /projects/1 (show)
POST /projects/store (store)
get /projects/1/edit (edit)
PATCH (UPDATE) /projects/1
DELETE (DESTROY) /projects/1
 */
