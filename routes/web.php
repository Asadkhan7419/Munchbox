<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\GeolocatorController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\LiveOrderController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AuthController as admin;


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
// Prefix admin
    // web Route
    Route::get('/', [HomeController::class, 'index']);
    Route::group(['middleware'=>'guest'],function(){
    // Prefix Admin Routes
    Route::get('/admin/login', [admin::class, 'adminLogin']);
    Route::post('/admin/login', [admin::class, 'login']);
    Route::get('/admin/reset', [admin::class, 'adminReset']);

    // web Routes
    // Route::get('/login', [Authcontroller::class, 'indexlogin'])->name('login');
    // Route::post('/login', [Authcontroller::class, 'login']);
    // Route::get('/register', [Authcontroller::class, 'index']);
    // Route::post('/register', [Authcontroller::class, 'register']);
    Route::get('/geolocator', [GeolocatorController::class, 'index']);
    Route::get('/orderDetails', [OrderdetailsController::class, 'index']);
    Route::get('/list_view', [HomeController::class, 'listview']);
    });

    Route::group(['middleware'=>'auth'],function(){
    // Admin Routes
    Route::get('/admin/dashboard', [DashboardController::class, 'indexAdmin']);
    // Admin/Setting Routes
    Route::get('/admin/setting', [SettingController::class, 'index']);
    Route::post('/admin/setting', [SettingController::class, 'data'])->name('setting');
    // Admin/Category Routes
    Route::get('/admin/category', [CategoryController::class, 'indexCategory']);
    Route::get('/admin/category/form', [CategoryController::class, 'categoryForm']);
    Route::post('/admin/category/form', [CategoryController::class, 'categoryInsert'])->name('submitCategory');
    Route::get('/admin/category/edit/{C_id}', [CategoryController::class, 'categoryEdit']);
    Route::put('/admin/category/edit/{C_id}', [CategoryController::class, 'categoryUpdate']);
    Route::get('/admin/category/{C_id}', [CategoryController::class, 'categoryDelete']);
    // Admin/Products Routes
    Route::get('/admin/product', [ProductController::class, 'indexproduct']);
    Route::get('/admin/product/add', [ProductController::class, 'productAdd']);
    Route::post('/admin/product/add', [ProductController::class, 'productInsert'])->name('submitProduct');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'productEdit']);
    Route::put('/admin/product/edit/{id}', [ProductController::class, 'productUpdate']);
    Route::get('/admin/product/{id}', [ProductController::class, 'productDelete']);
    // Admin live Order Routes
    Route::get('/admin/liveorder', [LiveOrderController::class, 'index']);
    // Admin order Routes
    Route::get('/admin/order', [OrderController::class, 'index']);
    // Admin Staff Routes
    Route::get('/admin/staff', [StaffController::class, 'indexStaff']);
    Route::get('/admin/staff/add', [StaffController::class, 'addStaff']);
    Route::post('/admin/staff/add', [StaffController::class, 'staffInsert'])->name('submit');
    Route::get('/admin/staff/edit/{id}', [StaffController::class, 'staffEdit']);
    Route::put('/admin/staff/edit/{id}', [StaffController::class, 'staffUpdate']);
    Route::get('/admin/staff/{id}', [StaffController::class, 'staffDelete']);
    // Admin Finance Routes
    Route::get('/admin/finance', [DashboardController::class, 'indexFinance']);
    // Admin Menu Routes
    Route::get('/admin/menu', [MenuController::class, 'indexMenu'])->name('view');
    Route::get('/admin/show', [MenuController::class, 'show'])->name('show');
    // web Routes
    Route::get('/checkout', [CheckoutController::class, 'index']);
    Route::get('/restaurant', [RestaurantController::class, 'index']);
    Route::get('/orderdetails', [OrderdetailsController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('update.profile');
});


    // Admin logout route
    Route::get('/admin/logout', [admin::class, 'logout']);
    // web logout route
    Route::get('/logout', [Authcontroller::class, 'logout']);
