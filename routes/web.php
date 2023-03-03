<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IphoneController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
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

/* Route::get('/', function () {
    return view('welcome');
}); */



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//ADMIN
Route::middleware(['auth','isAdmin'])->group( function () {
    //Route::get('/dashboard', 'Admin/FrontendController@index');
    /* Route::get('/dashboard', function () {
       return view('admin.index');
    }); */

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('customers', CustomerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('iphones', IphoneController::class);
    Route::resource('products', ProductController::class);
});



//FRONTEND
Route::get('/', [FrontendController::class, 'index']);
Route::get('/frontend/iphones', [FrontendController::class, 'iphones']);
Route::get('/frontend/ipads', [FrontendController::class, 'ipads']);
Route::get('/frontend/macbooks', [FrontendController::class, 'macbooks']);
/* Route::get('/frontend/show_iphone/{id}', [FrontendController::class, 'show_iphone']); */

Route::get('/frontend/show_product/{id}', [FrontendController::class, 'show_product']);
Route::get('/frontend/footer_components/aszf', [FrontendController::class, 'aszf']);
Route::get('/frontend/footer_components/tajekoztato', [FrontendController::class, 'tajekoztato']);
Route::get('frontend/footer_components/uzletek', [FrontendController::class, 'uzletek']);
Route::get('frontend/footer_components/szallitas', [FrontendController::class, 'szallitas']);



//CART
Route::post('/add_to_cart', [CartController::class, 'addProduct'])->name('add_to_cart');
Route::post('delete-cart-item', [CartController::class, 'deleteProduct']);

Route::middleware(['auth'])->group( function () {
    Route::get('cart', [CartController::class, 'cartview']);
});