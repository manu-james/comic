<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adnewscontroller;
use App\Http\Controllers\Feedbackcontroller;
use App\Http\Controllers\Helpcontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Superherocontroller;
use App\Http\Controllers\Lifecontroller;
use App\Http\Controllers\Humorcontroller;
use App\Http\Controllers\Fantasycontroller;
use App\Http\Controllers\Horrorcontroller;
use App\Http\Controllers\Fictioncontroller;
use App\Http\Controllers\MainController;

use App\Http\Controllers\productController;
use App\Http\Controllers\Adminhomecontroller;

use App\Http\Controllers\childrencontroller;
use App\Http\Controllers\indexcontroller;



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
Route::get('/home', [Homecontroller::class,'create']);
Route::get('/help', [Helpcontroller::class,'create']);


 

Route::get('/fiction', [Fictioncontroller::class,'create']);
Route::get('/fantasy', [Fantasycontroller::class,'create']);
Route::get('/horror', [Horrorcontroller::class,'create']);
Route::get('/humor', [Humorcontroller::class,'create']);

Route::get('/superhero', [Superherocontroller::class,'create']);
Route::get('/children', [childrencontroller::class,'create']);

route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

route::get('/logout',[MainController::class,'logout']);


route::group(['middleware'=>['AuthCheck']],function(){
    route::get('/admin/dashboard',[MainController::class,'dashboard']);
    route::get('/admin/adminhome',[MainController::class,'adminhome']);
    route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
});



Route::get('theme10', [indexcontroller::class,'create']);










Route::get('/addcategory',[productController::class , 'index' ] );
Route::post('/categoryread',[productController::class , 'store' ] );
Route::get('/addcategory',[productController::class , 'catview' ] );
Route::get('/addproduct',[productController::class , 'create' ] );
Route::post('/pstore',[productController::class , 'productview' ] );
Route::get('/productview',[productController::class , 'prodview' ] );
Route::get('/tdelete',[productController::class , 'proddelete' ] );
route::post('/proddeleteprocess/{id}',[productController::class,'destroy']);


Route::get('userdelete/{id}',[productController::class,'delete']);

Route::get('edit/{id}',[productController::class,'edit']);
route::post('edit/update',[productController::class,'update']);

Route::get('/cartview',[productController::class , 'cartview' ] );
Route::post('/addtocart',[productController::class,'addtocart']);

Route::get('cartdelete/{id}',[productController::class,'cartdelete']);

Route::get('viewsearch',[productController::class,'viewsearch']);
Route::post('/servicesearch',[productController::class,'search']);


Route::get('/buy',[productController::class , 'orderview' ] );
Route::post('/addtoorder',[productController::class,'addtoorder']);
Route::get('orderdelete/{id}',[productController::class,'orderdelete']);
Route::get('/adminorder',[productController::class , 'orderview' ] );
Route::get('/adminorder',[productController::class , 'orderviewadmin' ] );