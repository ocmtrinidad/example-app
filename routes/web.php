<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Returns welcome.blade.php from ../resources/views/
    // Just welcome as Laravel automatically looks for .blade.php files
    return view('welcome');
});

Route::get("/ninjas", function () {
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => 1],
        ["name" => "luigi", "skill" => 45, "id" => 2],
    ];

    // Returns ninjas.index.blade.php from ../resources/views/ninjas/
    // $greeting is passed to the view with the key "greeting"
    return view("ninjas.index", ["ninjas" => $ninjas]);
});

// Route to show a specific ninja by ID
// The {id} is a route parameter that will be passed to the function as $id
Route::get("/ninjas/{id}", function ($id) {

    return view("ninjas.show", ["id" => $id]);
});
