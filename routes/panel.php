<?php

use Illuminate\Support\Facades\Route;

//Ruta al panel
Route::get('/','PanelController@index')->name('panel');

//Route::get('/artistic_projects/create', 'ArtisticProjectPanelController@create')->name('artistic_projects.create');
Route::resource('artistic_projects','ArtisticProjectPanelController')->except(['index','show']);
Route::resource('educational_projects','EducationalProjectPanelController')->except(['index','show']);

