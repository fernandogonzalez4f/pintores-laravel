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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pintores', 'Pintor@index');

Route::get('/vincent', [
    'uses'=>'Pintor@vincent',
    'as'=>'VincentVanGogh'
]);

Route::get('/rembrandt', [
    'uses'=>'Pintor@rembrandt',
    'as'=>'RembrandtVanRijn'
]);

Route::get('/leonardo', [
    'uses'=>'Pintor@leonardo',
    'as'=>'LeonardoDaVinci'
]);

Route::get('/claude', [
    'uses'=>'Pintor@claude',
    'as'=>'ClaudeMonet'
]);

Route::get('/paul', [
    'uses'=>'Pintor@paul',
    'as'=>'PaulCezanne'
]);