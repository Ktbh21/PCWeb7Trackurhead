<?php

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\TrackheadController::class, 'index'])->name('profile');
Route::post('/profile/postCreate', [App\Http\Controllers\TrackheadController::class, 'postCreate'])->name('profile.postCreate');

Route::get('/create', [App\Http\Controllers\TrackheadController::class, 'create']);
Route::get('/entry{id}', [App\Http\Controllers\TrackheadController::class, 'entry'])->name('profile'); //detail
// Route::get('edit{entry}', [TrackheadController::class, 'edit']);
Route::get('/entry/edit', [App\Http\Controllers\TrackheadController::class, 'edit']);
Route::post('/entry{id}/edit', [App\Http\Controllers\TrackheadController::class, 'postEdit'])->name('profile.postEdit');
Route::get('/entry{id}/delete', [App\Http\Controllers\TrackheadController::class, 'delete'])->name('profile.delete');;
Route::resource('post', App\Http\Controllers\TrackheadController::class);
