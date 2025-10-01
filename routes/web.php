<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('book.books');
});

Route::post(
    '/book/store',
    [BookController::class, 'store']
);
Route::get(
    '/book/list',
    [BookController::class, 'show']

);

Route::get(
    '/book/list',
    [BookController::class, 'show']

);

Route::get('/book/delete/{id}', [BookController::class, 'delete']);
Route::get('/book/{id}', [BookController::class, 'showbook']);
