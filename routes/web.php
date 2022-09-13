<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fakerdata;
use Faker\Factory;

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

    
    Route::get('/fakertest/firstname/{id?}', [fakerdata::class,'firstname']);
    Route::get('/fakertest/name/{id?}', [fakerdata::class,'name']);
    Route::get('/fakertest/lastname/{id?}', [fakerdata::class,'lastname']);
    Route::get('/fakertest/email/{id?}', [fakerdata::class,'email']);
    Route::get('/fakertest/phonenumber/{id?}', [fakerdata::class,'phonenumber']);
    Route::get('/fakertest/address/{id?}', [fakerdata::class,'address']);   