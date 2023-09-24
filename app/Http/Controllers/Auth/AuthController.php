<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    /**
     * Display the login view.
     */
    public function index()
    {
        return hybridly('Auth.Login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function create(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->intended('login');
    }
}
