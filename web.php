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
 
Route::get('/test1', function () {
    return 'My Name is Tania';
});

Route::get('/student',function(){
    return 'Student name : Tania Akter';

});

Route::redirect('/student','/test1');

Route::get('/studentinfo',function(){
    return view('studentinfo');
});

route::get('/student2',function(){
    return view('student2');
});

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/profile/{name}', function ($name) {
    return 'profile '.$name;
});

