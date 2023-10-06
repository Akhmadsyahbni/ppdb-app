<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\SekolahController;
use App\Http\Controllers\Admin\KeluargaController;
use App\Http\Controllers\User\FormulirController;
// use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;


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
Route::get('/', 'App\Http\Controllers\LandingController@index')->name('index');

Auth::routes();

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
        // Route::get('/verify',[UserController::class,'verify'])->name('verify');
        // Route::get('/password/forget',[UserController::class,'Forgetform'])->name('forget.password.form');
        // Route::post('/password/forget',[UserController::class,'Sendlink'])->name('forget.password.link');
        // Route::get('/password/reset/{token}',[UserController::class,'Resetform'])->name('reset.password.form');
        // Route::post('/password/reset',[UserController::class,'Resetpassword'])->name('reset.password');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::get('/home',[HomeController::class,'index'])->name('index');
        Route::resource('formulir', FormulirController::class);
        // Route::get('formulir',[FormulirController::class,'barcode'])->name('barcode');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });
});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::resource('siswa', SiswaController::class);
        Route::get('siswa/{id}/verify/{status}',[SiswaController::class,'verifyStatus'] )->name('verifyStatus');
        Route::resource('sekolah', SekolahController::class);
        Route::resource('keluarga', KeluargaController::class);
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        
    });

});



