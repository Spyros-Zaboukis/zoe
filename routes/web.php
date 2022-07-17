<?php

use App\Http\Controllers\profilFormController;
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
    return view('Home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Route form myForm profilForm
Route::get('/myForm', [profilFormController::class, 'showForm'])->name('myForm');
Route::post('/myForm', [profilFormController::class, 'verifyForm'])->name('myFormStore');
