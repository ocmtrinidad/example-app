<?php

namespace App\Http\Controllers;

// Import the Ninja model to interact with the database.

use App\Http\Requests\StorePostRequestNinja;
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
        // Fetches all dojos to populate the dojo select in the create form.
        $dojos = Dojo::all();
        return view("ninjas.create", ["dojos" => $dojos]);
    }

    // $id is a route parameter that will be automatically passed to the function as $id.
    public function show($id)
    {
        // findOrFail() finds a ninja by its ID. If not found, it will throw a 404 error.
        $ninja = Ninja::with("dojo")->findOrFail($id);

        return view("ninjas.show", ["ninja" => $ninja]);
    }

    // StorePostRequestNinja is a custom request class that handles validation that was created with `php artisan make:request StorePostRequestNinja`.
    public function store(StorePostRequestNinja $request)
    {
        // Validates the request data using the rules defined in StorePostRequestNinja.
        // If validation fails, it will automatically recreate form page with errors.
        $validated = $request->validated();

        // Creates a new ninja in the database with the validated data.
        Ninja::create($validated);

        // Redirects to the ninjas index page with a message and a "success" key.
        return redirect()->route("ninjas.index")->with("success", "Ninja Created!");
    }

    public function destroy($id)
    {
        $ninja = Ninja::findOrFail($id);
        $ninja->delete();

        return redirect()->route("ninjas.index")->with("success", "Ninja Deleted!");
    }
}
