<?php

use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/index', [OrganizationController::class, 'index'])->name('organization.index');
// 会社の登録画面表示
Route::get('/create', [OrganizationController::class, 'create'])->name('organization.create');
// 会社の登録処理
Route::post('/store', [OrganizationController::class, 'store'])->name('organization.store');
