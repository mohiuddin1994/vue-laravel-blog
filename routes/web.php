<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\categoryCotroller;
use App\Http\Controllers\admin\postController;
use App\Http\Controllers\admin\user_loginController;
use App\Http\Controllers\frontend\websiteContrller;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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


Route::get('login',[user_loginController::class,"loginPage"])->name('login');
Route::get('register',[user_loginController::class,"registerPage"])->name('register');
Route::post('userLogin',[user_loginController::class,"userLogin"])->name('userLogin');
Route::post('userRegister',[user_loginController::class,"userRegister"])->name('userRegister');
Route::get('logOut',[user_loginController::class,"logOut"])->name('logOut');




Route::get('dashboard',[adminController::class,"index"])->name('dashboard');



// Route::get('post',[postController::class,"index"])->name('post');
// Route::get('category',[postController::class,"indexCategory"])->name('category');




 Route::post('/category_store',[categoryCotroller::class,'store']);
 Route::get('/getCategory',[categoryCotroller::class,'index']);
 Route::get('/categoryDelete/{id}',[categoryCotroller::class,'delete']);
 Route::get('/category_edit/{id}',[categoryCotroller::class,'edit']);
 Route::post('/category_update/{id}',[categoryCotroller::class,'update']);


//  Route::get('/{anypath}',adminController::class,"index")->where("path",".*");

 Route::get('/',[websiteContrller::class,'index'])->name('index');
 Route::get('home',[websiteContrller::class,'profile'])->name('home');
