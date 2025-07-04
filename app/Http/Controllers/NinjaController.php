<?php

namespace App\Http\Controllers;

// Import the Ninja model to interact with the database.
use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        // Fetches ninjas from the database as an array.
        // Ninja::all() would return all ninjas, but we want to order them by creation date.
        // Using orderBy(column_name, direction).
        $ninjas = Ninja::orderBy("created_at", "desc")->get();
        // Returns ninjas array to /ninjas/index.blade.php.
        return view("ninjas.index", ["ninjas" => $ninjas]);
    }

    public function show($id) {}

    public function create() {}

    public function store() {}
}
