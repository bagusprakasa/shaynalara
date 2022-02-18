<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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



Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    // Route::prefix('dashboard')->group(function () {
    //     Route::resource('dashboard', DashboardController::class);
    // });
    Route::resource('products', ProductController::class);
});
