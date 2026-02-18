<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => ['required', 'string', Rule::unique('users', 'name')],
            'username' => ['required', 'string', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
        auth()->login($user);

        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'loginusername' => ['required'],
            'loginpassword' => ['required'],
        ]);
    
        if (auth()->attempt([
            'username' => $credentials['loginusername'],
            'password' => $credentials['loginpassword'],
        ])) {
    
            $request->session()->regenerate();
    
            return redirect('/');
    
        }
    
        return back()->withErrors([
            'loginusername' => 'Invalid credentials',
        ]);
    }
    
}
