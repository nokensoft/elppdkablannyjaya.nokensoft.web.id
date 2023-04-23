<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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
    // return view('welcome');
    return redirect('/login');
});

// Auth::routes();
Auth::routes(['register' => false]);
Route::redirect('/register', '/login');
//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','web']], function() {
    Route::get('/home', function () {
        return view('admin.pages.starter');
    });

    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('products', ProductController::class);

     // Peran ADMIN
     Route::group(['middleware' => ['role:administrator']], function () {
        Route::resource('pengguna', UserController::class);

        Route::get('/pengguna/hapus/{id}', [UserController::class, 'delete'])->name('pengguna.delete');

    });

});




require_once 'app.php';
require_once 'admin.php';

