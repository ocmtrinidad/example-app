<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view("auth.register");
    }

    public function showLogin()
    {
        return view("auth.login");
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create($validated);

        // Login the user with sessions and cookies.
        Auth::login($user);

        return redirect()->route("ninjas.index");
    }

    public function login() {}
}
