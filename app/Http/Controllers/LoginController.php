<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\users_model;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function validate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = users_model::authenticate($credentials);

        if(is_null($user))
        {
            return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }

        $userData = new \stdClass();
        $userData->id = $user->usr_id;
        $userData->role = $user->rl_id;
        $userData->menu = "";
        session()->put('user', $userData);

        return redirect()->intended('home');
    }

    public function createAccount(Request $request)
    {
        $validated = $request->validate([
            'email1' => 'required|string|max:64',
            'password1' =>'required|string|min:6|max:16'
        ]);
        $users_model = new users_model();
        $users_model->usr_email = $validated['email1'];
        $users_model->usr_password = Hash::make($validated['password1']);
        $users_model->save();

        return redirect()->route('login');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}

