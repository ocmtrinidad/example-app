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

    public function create()
    {
        return view("ninjas.create");
    }

    public function show($id)
    {
        // Finds a ninja by its ID. If not found, it will throw a 404 error.
        $ninja = Ninja::findOrFail($id);

        return view("ninjas.show", ["ninja" => $ninja]);
    }

    public function store() {}
}
