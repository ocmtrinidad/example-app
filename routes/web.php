<?php

use Illuminate\Support\Facades\Route;
// Import the NinjaController to use its methods in routes. Use as NinjaController::class.
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    // Returns welcome.blade.php from ../resources/views/.
    // Just welcome as Laravel automatically looks for .blade.php files.
    return view('welcome');
});

// Calls the "index" method of NinjaController in the App\Http\Controllers folder.
// ->name("ninjas.index") creates a named route that allows you to call this route by name instead of destination.
Route::get("/ninjas", [NinjaController::class, "index"])->name("ninjas.index");

Route::get("/ninjas/create", [NinjaController::class, "create"])->name("ninjas.create");

// The {id} is a route parameter that will be passed to the function as $id.
Route::get("/ninjas/{id}", [NinjaController::class, "show"])->name("ninjas.show");

Route::post("/ninjas", [NinjaController::class, "store"])->name("ninjas.store");

Route::delete("/ninjas/{id}", [NinjaController::class, "destroy"])->name("ninjas.destroy");
