<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccessController;
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
    return redirect('access/login');
});

Route::prefix('access')->group(function () {
    Route::get('login', [AccessController::class, 'login'])->name('access.login');
});
