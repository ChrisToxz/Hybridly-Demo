<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return hybridly('Auth.Register');
    }

    public function store(RegisterRequest $request)
    {
        // If no name provided, use username
        $request['name'] ??= $request->username;

        $user = User::create($request->except('password_confirmation'));

        \Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }
}
