<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CartController;
use Gloudemans\Shoppingcart\Facades\Cart;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');




/*
|--------------------------------------------------------------------------
| Web Routes
|
*/
Route::get('/student',[StudentController::class,"index"]);
Route::get('/edit/{id}',[StudentController::class,"edit"]);
Route::get('/show/{id}',[StudentController::class,"show"]);
Route::get('/create',[StudentController::class,"create"]);
Route::post('/store',[StudentController::class,"store"]);
Route::post('/update/{id}',[StudentController::class,"update"]);
/**
 * Products routes
 */
Route::get('/boutique/{slug}', [ProductsController::class, "show"])->name('products.show');
Route::get('/boutique', [ProductsController::class, "index"])->name('products.index');
/**
 * cart routes
 */
Route::post('/panier/ajouter',[CartController::class,"store"])->name('cart.store');

Route::get('/videpanier', function(){
    Cart::destroy();
});
// route de panier index 
Route::get('/panier', [CartController::class,'index'])->name('cart.index');

// route wishlist 
Route::resource('/wishlist', 'WishlistController', ['except' => ['create','edit','show','update']]);







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
