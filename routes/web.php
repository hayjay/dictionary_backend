<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DictionaryTermController;

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

Route::group(['prefix' => 'dictionary-terms', 'middleware' => 'auth'], function(){
	Route::get('/', [DictionaryTermController::class, 'index'])->name('dictionaries');
	Route::get('/create', [DictionaryTermController::class, 'create'])->name('dictionary_term_create');
	Route::post('/store', [DictionaryTermController::class, 'store'])->name('dictionary_term_store');
});

require __DIR__.'/auth.php';
