<?php

use Illuminate\Support\Facades\Route;

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
//basic route
//home page
Route::get('/', function () {
    return view('welcome');
});


//  Route to an index page
Route::get('/index', function () {
    return view('index');
});

//route using controller

Route::get('/hello', [Controller::class, 'greet'])->name('greetname');






// route any methode
Route::any('/post', function () {
    return "you can do whatever or is it!";
});


//route go to user  grab the request and give me the data back so i can return retrieve the name and return it back
use Illuminate\Http\Request;


Route::any('/user', function (Request $request) {
    $name = $request->input('name');
    return $name;
});

//redirecting route
Route::redirect('/chelot', 'index');


//route with id ( dynamic routing with end point)
Route::get('/person/{id}', function ($id) {
    return 'person id : ' . $id;
});
