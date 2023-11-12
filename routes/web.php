<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

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
    return view('welcome');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.index');
});

Route::prefix('produk')->group(function (){
    Route::get('/view', [produkController::class, 'index'])->name('produk.view');
    Route::get('/add', [produkController::class, 'create'])->name('produk.add');
    Route::get('/edit', [produkController::class, 'edit'])->name('produk.edit');
    Route::post('/update/{id}', [produkController::class, 'update'])->name('produk.update');
    Route::get('/delete/{id}', [produkController::class, 'delete'])->name('produk.delete');
    Route::post('/store', [produkController::class, 'store'])->name('produk.store');
});