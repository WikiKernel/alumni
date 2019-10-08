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

use App\Providers\RouteServiceProvider;
// use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route; 


Route::get('/', function () {
    return view('faq.createQuestion');
});

// Route::post('post/{user}',  [
//     'as' => 'post.store',
//     'uses' => 'postcontroller@store'
// ]);


Route::resource('/OfertaTrabajo', 'OfertasTrabajoController');

Route::resource('/createquestion', 'Postcontroller');

Route::get('/uniquequestion/{id}', 'Postcontroller@showUniqueQuestion');

/*
Route::get('/createanswer', function () {
    return view('faq/createAnswer');
});
*/
Route::get('/readquestion', 'Postcontroller@show');

Route::resource("/createanswer","AnswerController");

Route::get("/editanswer","AnswerController@update");

Route::get("/editquestion","PostController@update");

Route::get('/home', 'HomeController@index')->name('home');
