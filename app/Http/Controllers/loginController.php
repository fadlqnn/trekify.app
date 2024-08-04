<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    public function index()
    {
        return view('landing-page.login-register.login');
    }

    public function login(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($cred)) {
             /** @var \App\Models\User $users **/
            $users = Auth::user();
            $users->activity_status = '1';
            $users->save();

            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        /** @var \App\Models\User $users **/
        $users = Auth::user();
        $users->activity_status = '0';
        $users->save();
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
