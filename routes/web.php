<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
// Import the NinjaController to use its methods in routes. Use as NinjaController::class.
use App\Http\Controllers\NinjaController;
use App\Http\Controllers\DojoController;

Route::post("/logout", [AuthController::class, "logout"])->name("logout");

// middleware("guest") sends logged in users to /.
Route::middleware("guest")->controller(AuthController::class)->group(function () {
  Route::get("/register", "showRegister")->name("show.register");
  Route::get("/login", "showLogin")->name("show.login");
  Route::post("/register", "register")->name("register");
  Route::post("/login", "login")->name("login");
});

// middleware("auth") sends logged out users to /login.
// controller() gives all Routes the same controller.
Route::middleware("auth")->controller(NinjaController::class)->group(function () {
  Route::get('/', "index")->name("ninjas.index");
  Route::get("/ninjas/create", "create")->name("ninjas.create");
  // Using route model binding, Laravel will automatically fetch the Ninja model instance based on the {ninja} parameter, which is an id.
  Route::get("/ninjas/{ninja}", "show")->name("ninjas.show");
  Route::post("/", "store")->name("ninjas.store");
  Route::delete("/ninjas/{ninja}", "destroy")->name("ninjas.destroy");
});

Route::middleware("auth")->controller(DojoController::class)->group(function () {
  Route::get("/dojos", "index")->name("dojos.index");
  Route::get("/dojos/create", "create")->name("dojos.create");
  Route::get("/dojos/{dojo}", "show")->name("dojos.show");
  Route::post("/dojos", "store")->name("dojos.store");
  Route::delete("/dojos/{dojo}", "destroy")->name("dojos.destroy");
});
