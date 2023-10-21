<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\User;

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
//     return view('halaman_utama.index');
// });
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/create',[AuthController::class, 'create'])->name('create');
    Route::post('/auth', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
});

Route::group(['auth' => 'guest'], function () {
    Route::redirect('/home', '/user.index');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('UserAkses:admin');
    Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('UserAkses:user');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/post', [UserController::class, 'post'])->name('post');
    Route::get('/dataedit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/dataedit/{id}', [UserController::class, 'update'])->name('update'); 
    Route::delete('/datahapus/{id}', [UserController::class, 'hapus'])->name('hapus');
    Route::post('/tambah-berita', [UserController::class, 'tambahBerita'])->name('tambah-berita');

});






// 