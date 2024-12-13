<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        User::create($request->validated());
        return Response::success(message: 'User registered successfully');
    }
    public function login(LoginRequest $request)
    {
        $token = Auth::attempt($request->only('email', 'password'));
        if (! $token) {
            return Response::unauthorized("Invalid credentials");
        }
        return Response::success(['token' => $token, 'token_type' => "bearer", 'user' => $request->user()]);
    }

    public function logout()
    {
        Auth::logout();
        return Response::success(message: "Logged out successfully");
    }
    public function profile(Request $request)
    {
        return Response::success(['user' => $request->user()]);
    }
    public function refresh()
    {
        return Response::success(['token' => Auth::refresh()]);
    }
}
