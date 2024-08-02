<?php

use App\Http\Controllers\UserProductsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserLoginController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    // Route::get('/product', function () {
    //     return Inertia::render('Product');
    // })->name('product');


    // Route::controller(ProductsController::class)->group(function () {
    //     Route::get('/products', 'index')->name('products.index');
    // });
    Route::controller(ProductsController::class)
    ->prefix('/products')
    ->name('products.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        // Route::get('/{id}', 'show')->name('show');
        // Route::get('/{id}/edit', 'edit')->name('edit');
        // Route::post('/', 'store')->name('store');
        // Route::put('/{id}', 'update')->name('update');
        // Route::delete('/{id}', 'destroy')->name('destroy');
    });
    Route::controller(UserProductsController::class)
    ->prefix('/userproducts')
    ->name('userproducts.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
    });
    Route::controller(UserPostController::class)
    ->prefix('/userpost')
    ->name('userpost.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
    });

    Route::controller(UserController::class)
    ->prefix('/users')
    ->name('users.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
    });

    Route::controller(UserLoginController::class)
    ->prefix('/userlogin')
    ->name('userlogin.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });
    
    Route::controller(UserProfileController::class)
    ->prefix('/userprofile')
    ->name('userprofile.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });
});
