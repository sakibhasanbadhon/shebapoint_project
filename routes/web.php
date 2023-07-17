<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('admin/userlist', [DashboardController::class, 'getData'])->name('admin.get-data');
Route::post('admin/user/active', [DashboardController::class, 'userActive'])->name('admin.user.active');
Route::post('admin/user/destroy', [DashboardController::class, 'destroy'])->name('admin.user.destroy');
Route::get('admin/user/edit/{id}', [DashboardController::class, 'edit'])->name('admin.user.edit');
Route::put('admin/user/update/{id}', [DashboardController::class, 'update'])->name('admin.user.update');

Route::get('logout', [DashboardController::class, 'logout'])->name('logout');

Route::get('user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard')->middleware('is_active');


Route::get('/', function(){
    return redirect()->route('login');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
