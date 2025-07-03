<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Returns welcome.blade.php from ../resources/views/
    // Just welcome as Laravel automatically looks for .blade.php files
    return view('welcome');
});

Route::get("/ninjas", function () {
    // Returns ninjas.index.blade.php from ../resources/views/ninjas/
    // $greeting is passed to the view with the key "greeting"
    return view("ninjas.index", ["greeting" => "Hello"]);
});
