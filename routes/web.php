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

// Using route model binding, Laravel will automatically fetch the Ninja model instance based on the {ninja} parameter, which is an id.
// The "show" method will receive the Ninja instance as $ninja.
Route::get("/ninjas/{ninja}", [NinjaController::class, "show"])->name("ninjas.show");

Route::post("/ninjas", [NinjaController::class, "store"])->name("ninjas.store");

Route::delete("/ninjas/{ninja}", [NinjaController::class, "destroy"])->name("ninjas.destroy");
