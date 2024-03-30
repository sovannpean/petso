<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
// Route::get('/', function () {
//     return view('/pages/welcom');
// });

Route::get('/cat', function () {
    return view('/pages/catPage');
});
Route::get('/', function () {
    return view('pages/homePage');
})->middleware(['auth', 'verified'])->name('homePage');
// Route::get('/cat', function () {
//     return view('pages/catPage');
// })->middleware(['auth', 'verified'])->name('homePage');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('auth', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');

    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
require __DIR__.'/auth.php';

Route::get('/dashboard/category/index', [CategoryController::class, 'index']);
Route::get('/dashboard/category/create', [CategoryController::class, 'create']);
Route::post('/dashboard/category/create', [CategoryController::class, 'store']);
Route::post('/dashboard/category/index/{id}', [CategoryController::class, 'destroy']);
Route::get('/dashboard/category/update/{id}', [CategoryController::class, 'edit']);
Route::post('/dashboard/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/dashboard/category/show/{id}', [CategoryController::class, 'show']);

Route::get('/dashboard/products/index', [ProductController::class, 'index']);
Route::get('/dashboard/products/create', [ProductController::class, 'create']);
Route::post('/dashboard/products/create', [ProductController::class, 'store']);
Route::get('/dashboard/products/update/{id}', [ProductController::class, 'edit']);
Route::post('/dashboard/products/update/{id}', [ProductController::class, 'update']);
Route::get('/dashboard/products/show/{id}', [ProductController::class, 'show']);
Route::post('/dashboard/products/index/{id}', [ProductController::class, 'destroy']);

