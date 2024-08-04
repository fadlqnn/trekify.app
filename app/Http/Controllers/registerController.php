<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Support\Carbon;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing-page.login-register.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'number_phone' => 'required',
            'country' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'role_id' => 'integer',
            'email_verified_at' => 'nullable',
            'password' => 'required|confirmed',
        ]);

        $data = $request->all();
        if ($data) {
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
            $verificationCode = mt_rand(100000, 999999);
            Auth::login($user);
            Cache::put('verification_code_' . $user->id, $verificationCode, Carbon::now()->addMinutes(5));
            $user->notify(new VerifyEmailNotification($verificationCode));
        }
        return redirect()->route('register.verify');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
