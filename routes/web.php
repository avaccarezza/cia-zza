<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Mail\sendEmail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});
//Languages
Route::get('/set_language/{lang}', ['App\Http\Controllers\Controller', 'set_language'])->name('set_language');

//Contacts
Route::get('/contact', 'ContactController@showForm')->name('contact.form');
Route::post('/sendEmail','ContactController@sendEmail')->name('contact.sendEmail');

//Projects
Route::get('stage_projects','App\Http\Controllers\StageProjectController@index')->name('stage_projects.index');
Route::get('stage_projects/{stage_project}', 'App\Http\Controllers\StageProjectController@show')->name('stage_projects.show');

Route::get('educational_projects','App\Http\Controllers\EducationalProjectController@index')->name('educational_projects.index');
Route::get('educational_projects/{educational_project}', 'App\Http\Controllers\EducationalProjectController@show')->name('educational_projects.show');

//Writings
Route::get('writings','App\Http\Controllers\WritingController@index')->name('writings.index');
Route::get('writings/{writing}', 'App\Http\Controllers\WritingController@show')->name('writings.show');



//Auth
Auth::routes(['register' => false]);
//Auth::routes();