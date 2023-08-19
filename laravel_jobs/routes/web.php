<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (Request $request) {

    if (Auth::check()) {
        dd("The user is logged in");
    } else {
        dd("The user not is logged in");
    }

    return view('welcome', [
        "value" => 3,
    ]);
})->middleware('auth');


Route::get('/hello', function () {
    return "hello";
});
