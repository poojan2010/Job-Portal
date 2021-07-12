<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CityController;

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
    return view('login');
});

Route::view('signup' , 'signup');
Route::view('admindash' , 'admindash');
Route::view('userhome' , 'userhome');
Route::view('addcities' , 'addcities');
Route::view('addjob' , 'addjob');
Route::view('applynow' , 'applynow');



Route::post('/register' ,[UserController::class , 'store']);

Route::post('/' , [UserController::class,'login']);

Route::post('/addcities',[CityController::class,'store']);
Route::get('/citylist',[CityController::class,'showcity']);
Route::get('/deletecity/{id}',[CityController::class,'deletecity']);
Route::get('/editcity/{id}',[CityController::class,'edit']);
Route::post('/editcity/{id}',[CityController::class,'editcity']);


Route::post('/addjob',[JobController::class,'store']);
Route::get('/addjob',[CityController::class,'show2']);

Route::get('/joblist',[JobController::class,'showjob']);
Route::get('/deletejob/{id}',[JobController::class,'deletejob']);
Route::get('/editjob/{id}',[JobController::class,'edit']);
Route::post('/editjob/{id}', [JobController::class, 'editjob']);

Route::get('/logout',[UserController::class,'logout']);

Route::get('/search/', [JobController::class,'search'])->name('search');

Route::get('/userhome',[JobController::class,'userjobshow']);

Route::get('/jobdetails/{id}',[JobController::class,'jobdetails']);

Route::post('/addcv',[JobController::class,'addcv']);



