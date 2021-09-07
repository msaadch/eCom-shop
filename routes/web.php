<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users_Controller;
use App\Http\Controllers\Product_Controller;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
         return view('login');
     });

Route::post("/login",[Users_Controller::class,'login']);

Route::get("/",[Product_Controller::class,'index']);