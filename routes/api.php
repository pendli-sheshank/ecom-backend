<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register',[UserController::class,'register']); //route for register api 
Route::post('login',[UserController::class,'login']); //route for login api 
Route::post('addproduct',[ProductController::class,'addProduct']); //route for add product api 
Route::get('list',[ProductController::class,'list']); //route for list product api 
Route::delete('delete/{id}',[ProductController::class,'delete']); //route for delete product api 
Route::get('product/{id}',[ProductController::class,'getProduct']); //route for  product view api 
Route::put('updateproduct/{id}',[ProductController::class,'updateProduct']); //route for update product  api 
Route::get('search/{key}',[ProductController::class,'search']); //route for  search product  api 