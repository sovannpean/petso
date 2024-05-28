<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OverViewController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;

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
Route::get('/food-cat', function () {
    return view('/pages/cats/foodPage');
});
Route::get('/healthcare-cat', function () {
    return view('/pages/cats/healthcarePage');
});
Route::get('/toy-cat', function () {
    return view('/pages/cats/toyPage');
});
Route::get('/treat-cat', function () {
    return view('/pages/cats/treatPage');
});

// dog
Route::get('/food-dog', function () {
    return view('/pages/dogs/foodPage');
});
Route::get('/healthcare-dog', function () {
    return view('/pages/dogs/healthcarePage');
});
Route::get('/toy-dog', function () {
    return view('/pages/dogs/toyPage');
});
Route::get('/treat-dog', function () {
    return view('/pages/dogs/treatPage');
});

// detail
Route::get('/detail-product', function () {
    return view('/pages/detailproductPage');
});

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

//category
Route::get('/dashboard/category/index', [CategoryController::class, 'index']);
Route::get('/dashboard/category/create', [CategoryController::class, 'create']);
Route::post('/dashboard/category/create', [CategoryController::class, 'store']);
Route::post('/dashboard/category/index/{id}', [CategoryController::class, 'destroy']);
Route::get('/dashboard/category/update/{id}', [CategoryController::class, 'edit']);
Route::post('/dashboard/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/dashboard/category/show/{id}', [CategoryController::class, 'show']);
Route::resource('categories', CategoryController::class);

//product
Route::get('/dashboard/products/index', [ProductController::class, 'index']);
Route::get('/dashboard/products/create', [ProductController::class, 'create']);
Route::post('/dashboard/products/create', [ProductController::class, 'store']);
Route::get('/dashboard/products/update/{id}', [ProductController::class, 'edit']);
Route::post('/dashboard/products/update/{id}', [ProductController::class, 'update']);
Route::get('/dashboard/products/show/{id}', [ProductController::class, 'show']);
Route::post('/dashboard/products/index/{id}', [ProductController::class, 'destroy']);


//overView
Route::get('/dashboard/overView/index', [OverViewController::class, 'index'])->name('overview');

//page
Route::get('/', [HomeController::class, 'index']);
Route::get('/pages/detailproductPage/{id}', [PagesController::class, 'productDetail'])->name('products.detail');

//homePage
Route::get('/components/nav-menu', [CategoryController::class, 'homeshow'])->name('menu');


Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');


Route::get('/dashboard/coupons/index', [CouponController::class, 'index'])->name('coupons.index');
Route::get('/dashboard/coupons/create', [CouponController::class, 'create'])->name('coupons.create');
Route::post('/dashboard/coupons', [CouponController::class, 'store'])->name('coupons.store');
Route::get('/dashboard/coupons/show', [CouponController::class, 'show'])->name('coupons.show');
Route::get('/dashboard/coupons/coupons/apply', [CouponController::class, 'applyForm'])->name('coupons.applyForm');
Route::post('/dashboard/coupons/coupons/apply', [CouponController::class, 'apply'])->name('coupons.apply');

Route::get('/dashboard/subcategory/index', [SubcategoryController::class, 'index']);
Route::get('/dashboard/subcategory/create', [SubcategoryController::class, 'create']);
Route::post('/dashboard/subcategory/create', [SubcategoryController::class, 'store']);
Route::get('/dashboard/subcategory/update/{id}', [SubcategoryController::class, 'edit']);
Route::post('/dashboard/subcategory/update/{id}', [SubcategoryController::class, 'update']);
Route::get('/dashboard/subcategory/show/{id}', [SubcategoryController::class, 'show']);
Route::post('/dashboard/subcategory/index/{id}', [SubcategoryController::class, 'destroy']);


Route::get('/dashboard/orders/index', [OrderController::class, 'index'])->name('orders.index');
Route::get('/dashboard/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/dashboard/orders/create', [OrderController::class, 'store'])->name('orders.store');
Route::patch('/dashboard/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

Route::get('login/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social.login');
Route::get('login/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);

Route::post('/ratings/rate', [RatingController::class, 'rateProduct']);

Route::get('/pages/favoritePage', [WishlistController::class, 'index']);
Route::post('/wishlist/add', [WishlistController::class, 'addWishlist'])->name('wishlist.add');
Route::post('/wishlist/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');


Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::post('/orders/create', [OrderController::class, 'indexOrder'])->name('orders.indexOrder'); 
Route::post('/orders/create-order', [OrderController::class, 'create'])->name('orders.create'); 
Route::post('/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus'); 

Route::get('/pages/shop', [ShopController::class, 'index'])->name('shop.index');