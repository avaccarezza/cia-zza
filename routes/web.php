<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
Route::get('/change-language/{locale}', 'LanguageController@changeLanguage')->name('changeLanguage');
//Contacts
Route::get('contact', 'ContactFormController@form')->name('contact.form');
Route::post('send-form', 'ContactFormController@send')->name('contact.send');
//Projects
Route::get('artistic_projects','App\Http\Controllers\ArtisticProjectController@index')->name('artistic_projects.index');
Route::get('educational_projects','App\Http\Controllers\EducationalProjectController@index')->name('educational_projects.index');

//Auth
Auth::routes(['register' => false]);
//Auth::routes();