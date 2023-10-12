<?php

use Illuminate\Support\Facades\Route;

//Ruta al panel
Route::get('/','PanelController@index')->name('panel');

//Route::get('/stage_projects/create', 'StageProjectPanelController@create')->name('stage_projects.create');
Route::resource('stage_projects','StageProjectPanelController')->except(['index','show']);
Route::resource('educational_projects','EducationalProjectPanelController')->except(['index','show']);
Route::resource('writings','WritingPanelController')->except(['index','show']);


