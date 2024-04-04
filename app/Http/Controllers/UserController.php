<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function logout() {
        auth()->logout();
        return redirect('/')->with('success', 'You are now logged out.');
    }
    public function login(Request $request) {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin')->with('success', 'You have successfully logged in.');
        } else {
            return redirect('/')->with('error', 'Your login details are incorrect.');
        }
        
    }

    public function showIndex() {
        return view('index');
    }

    public function showRegister() {
        return view('register');
    }

    public function showReset() {
        return view('reset-password');
    }

    public function register(Request $request) {

        $validated = $request->validate([
            'username' => ['required','min:4', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required','min:8', 'confirmed']
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        
        //login user automatically
        auth()->login($user);
        
        return redirect('/admin')->with('success', 'You are now registerred.');
    }
}
