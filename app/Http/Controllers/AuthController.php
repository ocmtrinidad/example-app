<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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

        // Login the new user with sessions and cookies.
        Auth::login($user);

        return redirect()->route("ninjas.index")->with("success", "User Created!");
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        // Attempt to log in the user with the provided credentials. Returns true or false.
        // Not Auth:login() because we want to validate the credentials first.
        if (Auth::attempt($validated)) {
            // Regenerate the session to prevent session fixation attacks.
            $request->session()->regenerate();

            return redirect()->route("ninjas.index");
        }

        // If the credentials are incorrect (Auth::attempt), Laravel passes error message to /login.
        throw ValidationException::withMessages([
            "credentials" => "Sorry, incorrect credentials."
        ]);
    }

    public function logout(Request $request)
    {
        // Remove all user data from the session and cookies.
        Auth::logout();

        // Remove all session data.
        $request->session()->invalidate();
        // Regenerate the CSRF session token to prevent CSRF attacks.
        $request->session()->regenerateToken();

        return redirect()->route("show.login");
    }
}
