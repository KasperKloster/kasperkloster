<?php
use Illuminate\Support\Facades\Route;

Route::get('/{lang?}', 'PagesController@getIndex')->name('index');
Route::get('{lang}/about', 'PagesController@getAbout')->name('about');
Route::get('{lang}/work', 'PagesController@getWork')->name('work');
