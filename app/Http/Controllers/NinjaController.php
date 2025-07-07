<?php

namespace App\Http\Controllers;

// Import the Ninja model to interact with the database.
use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        // Fetches ninjas from the database as an array.
        // :: for the first method then -> for the rest.
        // all() would return all ninjas.
        // with("foreign_model") fetches ninjas with their associated model data.
        // orderBy(column_name, direction)->get() to fetch ninjas in order.
        // ->paginate(n) limits the results to 10 per page.
        $ninjas = Ninja::with("dojo")->orderBy("created_at", "desc")->paginate(10);
        // Returns ninjas array to /ninjas/index.blade.php.
        return view("ninjas.index", ["ninjas" => $ninjas]);
    }

    public function create()
    {
        $dojos = Dojo::all();
        return view("ninjas.create", ["dojos" => $dojos]);
    }

    public function show($id)
    {
        // findOrFail() finds a ninja by its ID. If not found, it will throw a 404 error.
        $ninja = Ninja::with("dojo")->findOrFail($id);

        return view("ninjas.show", ["ninja" => $ninja]);
    }

    public function store() {}
}
