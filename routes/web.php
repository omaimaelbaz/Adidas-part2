<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


// category table

Route::get('/category',[CategoriesController::class,'categoryView']);

// add category
Route::get('/addcategory',[CategoriesController::class,'addformeCategory']);
Route::post('/insertcategory',[CategoriesController::class,'insertCategory']);
// delete category
Route::get('/supcategory/{id}',[CategoriesController::class,'deleteCategory']);
// update category
Route::get('/updatecategory/{id}',[CategoriesController::class,'updatepage']);
Route::post('/update/{id}',[CategoriesController::class,'updatecategory']);


//------- product table -----//
Route::get('/product',[ProductController::class,'ProductView']);

// add product
Route::get('/addproduct',[ProductController::class,'addproductpage']);
Route::post('/insertproduct',[ProductController::class,'insertproduct']);

// delete product
Route::get('/deleteproduct/{id}',[ProductController::class,'deleteproduct']);

// update product

Route::get('/updateproduct/{id}',[ProductController::class,'updatepage']);
Route::post('/updateall/{id}',[ProductController::class,'update']);



















