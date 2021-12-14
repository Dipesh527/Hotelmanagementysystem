<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SMSController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'home']);

// users
Route::get('users',[AdminController::class,'users']);

Route::get('user_delete/{id}',[AdminController::class,'user_delete']);

// food

Route::get('add_food',[AdminController::class,'add_food']);

Route::post('foods',[AdminController::class,'foods']);

Route::get('all_food',[AdminController::class,'all_food']);

Route::get('food_delete/{id}',[AdminController::class,'food_delete']);

Route::get('food_update/{id}',[AdminController::class,'food_update']);

Route::post('update_food/{id}',[AdminController::class,'update_food']);
// reservation

Route::post('make_reservation',[AdminController::class,'make_reservation']);

Route::get('all_reservation',[AdminController::class, 'all_reservation']);

// chef
Route::get('add_chef', [AdminController::class,'add_chef']);


Route::post('chefs', [AdminController::class,'chefs']);

Route::get('all_chef', [AdminController::class,'all_chef']);

// add_cart

Route::post('addcart/{id}' ,[HomeController::class,'addcart']);

Route::get('showcart/{id}' ,[HomeController::class,'showcart']);

Route::get('remove/{id}',[HomeController::class,'remove']);
// orders

Route::post('orders',[HomeController::class,'orders']);

Route::get('all_orders', [HomeController::class, 'all_orders']);

Route::get('search', [AdminController::class, 'search']);
Route::get('sendMessage',[SMSController::class,'sendMessage']);








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


