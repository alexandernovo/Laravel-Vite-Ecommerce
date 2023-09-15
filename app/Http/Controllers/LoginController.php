<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function login()
    {
        return view('login');
    }
    public function loginPost()
    {
        $credentials = [
            'username'  => $this->request->input('username'),
            'password'  => $this->request->input('password')
        ];
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 1) {
                return redirect()->route('admin')->with('success', 'Login Successfull');
            } else if ($user->role === 2) {
                return redirect()->route('user')->with('success', 'Login Successfull');
            }
        }
        return back()->withErrors(['error' => 'Incorrect Password or Username']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}
