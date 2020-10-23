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
Route::get('/home',"TheVoiceController@home")->name("homepage");

Route::get('/winner1',"TheVoiceController@winner1")->name("winner1page");
Route::get('/winner2',"TheVoiceController@winner2")->name("winner2page");
Route::get('/coach',"TheVoiceController@coach")->name("coachpage");
Route::get('/battle1',"TheVoiceController@battle1")->name("battle1page");
Route::get('/battle2',"TheVoiceController@battle2")->name("battle2page");
Route::get('/blind1',"TheVoiceController@blind1")->name("blind1page");
Route::get('/blind2',"TheVoiceController@blind2")->name("blind2page");
Route::get('/blind3',"TheVoiceController@blind3")->name("blind3page");
Route::get('/final1',"TheVoiceController@final1")->name("final1page");
Route::get('/final2',"TheVoiceController@final2")->name("final2page");
Route::get('/knock2',"TheVoiceController@knock2")->name("knock2page");
Route::get('/live1_1',"TheVoiceController@live1_1")->name("live1_1page");
Route::get('/live1_2',"TheVoiceController@live1_2")->name("live1_2page");
Route::get('/live2',"TheVoiceController@live2")->name("live2page");
Route::get('/semiFinal1',"TheVoiceController@semiFinal1")->name("semiFinal1page");
Route::get('/semiFinal2',"TheVoiceController@semiFinal2")->name("semiFinal2page");

Route::get('/about',"TheVoiceController@about")->name("aboutpage");
Route::get('/contact',"TheVoiceController@contact")->name("contactpage");



//array from controller to view
Route::get('service',"TheVoiceController@service")->name("servicepage");

// 7 methods in resources
Route::resource("student","StudentController");






// //Examples..........
// Route::get('/',"MainController@home")->name('mainpage');
// //for localhost:8000

// Route::get('/z',"MainController@zpage")->name('zpage');
// //for localhost:8000/z

// Route::get('/test',"MainController@testingpage")->name('testingpage');
// //for (testing.blade.php) localhost:8000/testing

// Route::get('/a',function(){
// 	$arr=[1,2];
// 	return $arr;
// });//for localhost:8000/a

