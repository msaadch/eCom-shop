<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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



// Route::get('/login', function () {
//          return view('login');
//      });

Route::view("/login","login");

Route::post("/login",[Users_Controller::class,'login']);

Route::get("/",[Product_Controller::class,'index']);

Route::get("detail/{id}",[Product_Controller::class,'detail']);

Route::get("search",[Product_Controller::class,'search']);

Route::post("add_to_cart",[Product_Controller::class,'AddToCArt']);

Route::get("/logout", function(){
    Session::forget('user');
    return redirect('/login');
});

Route::get("cartlist",[Product_Controller::class,'CartList']);

Route::get("removecart/{id}",[Product_Controller::class,'RemoveCart']);

Route::get("ordernow",[Product_Controller::class,'OrderNow']);

Route::post("orderplace",[Product_Controller::class,'OrderPlace']);

Route::get("myorder",[Product_Controller::class,'MyOrder']);