<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use
App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/dash', [DashboardController::class, 'index'])->name('login');

Route::get('/login', [AuthController::class, 'loginPage'])->name('dash');

// Route::get('/cradd', [ProductController::class, 'crad'])->name('crad');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dash');

Route::get('/sign-in', function () {
    return view('dashboard.pages-sign-in');
})->name('signin');

Route::get('/', function () {
    return view('welcome');
});





//Crad

Route::get('/cradd', function () {
    return view('crad.create');})->name('crad');
Route::get('/index', [ProductController::class, 'index'])->name('crad');

Route::resource('products', ProductController::class);
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');





// Route::get('/dashboard/profile', function () {
//     return view('dashboard.page-profile');
// });

// Route::get('/dashboard/settings', function () {
//     return view('dashboard.page-setting');
// });

// Route::get('/dashboard/cards', function () {
//     return view('dashboard.ui-cards');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->name('dashboard.index');
// Route::get('/charts/chartjs', [ChartController::class, 'index'])->name('chartjs');
// Route::get('/maps/google', [MapController::class, 'showGoogleMap'])->name('google');
