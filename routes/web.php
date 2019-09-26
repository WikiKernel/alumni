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
    return view('faq.createQuestion');
});

// Route::post('post/{user}',  [
//     'as' => 'post.store',
//     'uses' => 'postcontroller@store'
// ]);




Route::resource('/createquestion', 'Postcontroller');

Route::resource('/OfertaTrabajo', 'OfertasTrabajoController');


Route::get('/createquestion', function () {
    return view('faq/createQuestion');
});

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/readquestion', function () {
    return view('faq/readQuestion');
});

Route::get('/uniquequestion', function () {
    return view('faq/uniqueQuestion');
});

Route::get('/createanswer', function () {
    return view('faq/createAnswer');
});
>>>>>>> f0e93452895fd3f28c5e7eeaf80b00c2c6814890
