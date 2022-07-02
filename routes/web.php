<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Login;
use App\Http\Livewire\ShowStudents;
use App\Http\Livewire\Register;
use App\Http\Livewire\Dashboard;

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

Route::get('/', ShowStudents::class);


Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class);
Route::get('/dashboard', Dashboard::class);

// Route::group(['middleware'=>'guest'], function () {
//     Route::livewire('/login', 'login')->name('login');
//     Route::livewire('/register', 'register');
// });
