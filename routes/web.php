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

//app()->singleton('App\Example', function () {
//    return new \App\Example;
//});

//app()->singleton('App\Services\Twitter', function () {
//    return new \App\Services\Twitter('cvervvndfasxascasc');
//});

//Route::get('/', function (\App\Repositories\UserRepository $userRepository) {
//    dd($userRepository);
//    return view('welcome');
//});

Route::get('/', function (\App\Services\Twitter $twitter) {
    dd($twitter);
    return view('welcome');
});

/*
 * GET /projects/create (create)
 * POST /projects (store)
 * GET /projects (index)
 * GET /projects/1 (show)
 * GET /projects/1/edit (edit)
 * PATCH /projects/1 (update)
 * DELETE /projects/1 (destroy)
 */

//Route::get('/projects/create', 'ProjectsController@create');
//Route::post('/projects', 'ProjectsController@store');
//
//Route::get('/projects', 'ProjectsController@index');
//Route::get('/projects/{project}', 'ProjectsController@show');
//
//Route::get('/projects/{project}/edit', 'ProjectsController@edit');
//Route::patch('/projects/{project}', 'ProjectsController@update');
//
//Route::delete('/projects/{project}', 'ProjectsController@delete');

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
//Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

