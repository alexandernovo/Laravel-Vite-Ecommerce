<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost()
    {
        if (request()->isMethod('post')) {
            $validator = Validator::make(
                $this->request->all(),
                [
                    'name'      => 'required',
                    'email'     => 'required|email|unique:users,email',
                    'username'  => 'required|unique:users,username',
                    'password'  => 'required|min:6',
                    'confpass'  => 'same:password'
                ],
                [
                    'email.unique'     => 'This email is already taken',
                    'username.unique'  => 'This username is already taken',
                    'password.min'     => 'Password must be atleast 6 character',
                    'confpass.same'    => 'Password do not match'
                ]
            );
            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors($validator);
            }
            $data = [
                'name'      => $this->request->input('name'),
                'email'     => $this->request->input('email'),
                'username'  => $this->request->input('username'),
                'password'  => Hash::make($this->request->input('password')),
                'role'      => 2,
            ];

            $save = User::create($data);

            if ($save) {
                return redirect()->route('register')->with('success', 'Register Successfully');
            }
        }
    }
}
