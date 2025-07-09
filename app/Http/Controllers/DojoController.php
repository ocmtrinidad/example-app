<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestDojo;
use App\Models\Dojo;
use Illuminate\Http\Request;

class DojoController extends Controller
{
    public function index()
    {
        $dojos = Dojo::orderBy("created_at", "desc")->paginate(10);
        return view("dojos.index", ["dojos" => $dojos]);
    }

    public function show(Dojo $dojo)
    {
        // Load the dojo with its one to many relationship with ninjas.
        $dojo->setRelation("ninjas", $dojo->ninjas()->orderBy("created_at", "desc")->paginate(10));
        return view("dojos.show", ["dojo" => $dojo]);
    }

    public function create()
    {
        return view("dojos.create");
    }

    public function store(StoreRequestDojo $request)
    {
        $validated = $request->validated();
        Dojo::create($validated);
        return redirect()->route("dojos.index")->with("success", "Dojo Created!");
    }

    public function destroy(Dojo $dojo)
    {
        $dojo->delete();
        return redirect()->route("dojos.index")->with("success", "Dojo Deleted!");
    }
}
