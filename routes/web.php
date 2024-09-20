<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

use App\Http\Controllers\UserController;

Route::get('/', [DemoController::class, 'index'])->name('user.create');
Route::get('/create', [DemoController::class, 'create'])->name('home');
Route::post('/store', [DemoController::class, 'store'])->name('user.store');


// Route::get('/', function () {
//     return view('home');
// });
