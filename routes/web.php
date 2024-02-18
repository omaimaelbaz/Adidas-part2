<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\UserController;



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
})->middleware('permission');
Route::get('/home', function () {
    return view('home');
})->middleware('permission');


// category table

Route::get('/category',[CategoriesController::class,'categoryView'])->middleware('permission');

// add category
Route::get('/addcategory',[CategoriesController::class,'addformeCategory'])->middleware('permission');
Route::post('/insertcategory',[CategoriesController::class,'insertCategory'])->middleware('permission');
// delete category
Route::get('/supcategory/{id}',[CategoriesController::class,'deleteCategory'])->middleware('permission');
// update category
Route::get('/updatecategory/{id}',[CategoriesController::class,'updatepage'])->middleware('permission');
Route::post('/update/{id}',[CategoriesController::class,'updatecategory']);


//------- product table -----//
Route::get('/product',[ProductController::class,'ProductView'])->middleware('permission');

// add product
Route::get('/addproduct',[ProductController::class,'addproductpage'])->middleware('permission');
Route::post('/insertproduct',[ProductController::class,'insertproduct'])->middleware('permission');

// delete product
Route::get('/deleteproduct/{id}',[ProductController::class,'deleteproduct'])->middleware('permission');

// update product

Route::get('/updateproduct/{id}',[ProductController::class,'updatepage'])->middleware('permission');
Route::post('/updateall/{id}',[ProductController::class,'update'])->middleware('permission');

// auth

Route::get('/signin',[AuthentificationController::class,'signIn'])->middleware('permission');
Route::get('/signup',[AuthentificationController::class,'signup'])->middleware('permission');

//
Route::post('/register',[AuthentificationController::class,'register'])->middleware('permission');
Route::post('/login',[AuthentificationController::class,'login'])->middleware('permission');
//users

Route::get('/user',[UserController::class,'display'])->middleware('permission');

// isert user

Route::get('/adduser',[UserController::class,'adduserpage'])->middleware('permission');

Route::post('/isertuser',[UserController::class,'insertuser'])->middleware('permission');

// delete user

Route::get('/deleteuser/{id}',[UserController::class,'deleteuser'])->middleware('permission');

// update user

Route::get('/updateview{id}',[UserController::class,'updateview'])->middleware('permission');

//serach

Route::get('/category/search',[CategoriesController::class,'search'])->middleware('permission');

Route::get('/product/search',[ProductController::class,'search'])->middleware('permission');

// reset password
Route::get('/forgotpassword',[AuthentificationController::class,'resetpassword'])->middleware('permission');














































Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
