<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class usercontroller extends Controller
{
    public function register()
    {
        return view('users.register');
    }
    public function handleregister(User $user, registerrequest $request)
    {
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success', 'Votre compte a été créé avec succès!');
    }

    public function login()
    {
        return view('users.login');
    }
    public function handlelogin(Request $request)
    { {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('../index');
            } else {
                return redirect()->back()->with('erreur', 'Votre adresse email ou mot de passe est incorrect');
            }
        }
    }
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
