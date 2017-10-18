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

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostController@index')->name('home');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');


/*
Route::get('/tasks', function () {
    
    return view('welcome',[
        'name' => 'Teste2'
    ]);
    

    //return view('welcome')->with('name', 'World');

    //return view('welcome')->with('name', $name);
    
     
    $tasks = [
        'Got to the store',
        'Finish my screencast',
        'Clean the house'
    ];
    

    //$tasks = DB::table('tasks')->get();

    $tasks = App\Task::all();


    return $tasks;

 //   return view('tasks.index', compact('tasks'));
});
*/



/*
Route::get('/tasks/{task}', function ($id) {
    //$task = DB::table('tasks')->find($id);
    $task = App\Task::find($id);
    return view('tasks.show', compact('task'));
});
*/