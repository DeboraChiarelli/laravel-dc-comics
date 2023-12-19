<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::get('/comics', [ComicController::class, 'index']);
Route::get('/comics/{id}', [ComicController::class, 'show']);
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
Route :: get("/edit/{id}", [ComicController :: class, "edit"]) -> name("comic.edit");
Route :: put("/update/{id}", [ComicController :: class, "update"]) -> name("comic.update");
