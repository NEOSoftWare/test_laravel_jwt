<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->only(['login', 'password']))) {
            return back()->withErrors(new MessageBag(['login' => 'Login or password is incorrect']));
        }

        return redirect()->route('cabinet');
    }

    public function registerForm()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'login' => $request->get('login'),
            'password' => bcrypt($request->get('password')),
            'first_visit' => $request->getFirstVisit(),
        ]);

        auth()->login($user);

        return redirect()->route('cabinet');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
