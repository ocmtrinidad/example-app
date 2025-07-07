<?php

use Illuminate\Support\Facades\Route;
// Import the NinjaController to use its methods in routes.
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    // Returns welcome.blade.php from ../resources/views/.
    // Just welcome as Laravel automatically looks for .blade.php files.
    return view('welcome');
});

// Calls the "index" method of NinjaController in the App\Http\Controllers folder.
// NinjaController::class is the same as the App\Http\Controllers\NinjaController namespace.
Route::get("/ninjas", [NinjaController::class, "index"]);

Route::get("/ninjas/create", [NinjaController::class, "create"]);

// Route to show a specific ninja by ID.
// The {id} is a route parameter that will be passed to the function as $id.
Route::get("/ninjas/{id}", [NinjaController::class, "show"]);
