<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;


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









