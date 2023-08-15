<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


Route::get("/greeting", function () {
    return "Hello World";
});

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// default code 302
Route::redirect('/about-us', '/about', 301);

// default code 301 and cannot be moddified
Route::permanentRedirect('/here', '/there');

Route::get(
    'about',
    UserController::class
);

Route::view("/laravel", "laravel");

Route::get('/', function () {
    return view('home');
});

Route::get('products', function () {
    return "products";
});

Route::get('about-laravel', function () {
    return redirect('about');
});

Route::get('download', function () {
    return response()->download(public_path('aboutus.txt'));
});

Route::get("/users", function () {

    dump(User::find(1));

});

// Route::get("/users/{id}",fu)
