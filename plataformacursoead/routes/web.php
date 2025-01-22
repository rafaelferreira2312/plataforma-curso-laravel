<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/redirect', [HomeController::class, 'redirect']);
    Route::get('/curso', [HomeController::class, 'curso'])->name('curso');
    Route::get('/site', [HomeController::class, 'site'])->name('site');
    Route::get('/sistema', [HomeController::class, 'sistema'])->name('sistema');
    Route::get('/app', [HomeController::class, 'app'])->name('app');
    Route::get('/lojavirtual', [HomeController::class, 'lojavirtual'])->name('lojavirtual');
    Route::get('/documento', [HomeController::class, 'documento'])->name('documento');

    Route::get('/sis-vtecfacil-detalhe', [HomeController::class, 'index'])->name('sis-vtecfacil-detalhe');
    
});


     
    
