<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Control;
use App\Http\Controllers\ControlData;



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

   return view ('index');

});

Route::get('about', function () {

    return view ('about');

 });

 Route::get('data', function () {

    return view ('data');

 });

 Route::get('submit',[Control::class, 'savee']);

 Route::get('list',[Control::class, 'sel_data']);

 Route::get('delete/{id}',[Control::class,'del']);

 Route::get('edit/{id}',[Control::class, 'up_sel']);

 Route::post('updata',[Control::class, 'up_data']);


 Route::get('contact', function () {

    return view ('contact');

 });

 Route::post('submit',[ControlData::class, 'savee']);
