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

Route::get('/', function () {
    return view('/pages/homePage');
});

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

Route::get('/dashboard/category/index', [CategoryController::class, 'index']);
Route::get('/dashboard/category/create', [CategoryController::class, 'create']);
Route::post('/dashboard/category/create', [CategoryController::class, 'store']);
Route::post('/dashboard/category/index/{id}', [CategoryController::class, 'destroy']);
Route::get('/dashboard/category/update/{id}', [CategoryController::class, 'edit']);
Route::post('/dashboard/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/dashboard/category/show/{id}', [CategoryController::class, 'show']);

require __DIR__.'/auth.php';