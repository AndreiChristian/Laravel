<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

    return view("welcome");
});

Route::resource('publisher', PublisherController::class);
Route::resource('author', AuthorController::class);
Route::resource('book', BookController::class);

Route::get("/test", function () {

    $records = DB::select("select * from author_book");
    $author = Author::find(5);

    dd($author->books);
});
