<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



// Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::post('logout', ['as' => 'logout', 'uses' => 'LoginController@do']);
    Route::resource('/', DashboardController::class);
    Route::get('products/{id}/gallery', [ProductController::class, 'gallery']);
    Route::resource('products', ProductController::class);
    Route::resource('product-galleries', ProductGalleryController::class);
});
