<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Notifications\verifyEmailNotification;
use Illuminate\Support\Carbon;

class verifyEmailController extends Controller
{
    public function index()
    {
        return view('landing-page.login-register.verify-email.verify');
    }

    public function resendVerification(Request $request)
    {
        $user = $request->user();
        $verificationCode = mt_rand(100000, 999999);
        $user->notify(new verifyEmailNotification($verificationCode));
        Cache::put('verification_code_' . $user->id, $verificationCode, Carbon::now()->addMinutes(5));
        return back()->with('success', 'Kode Verifikasi sudah Dikirim!');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'verification_code1' => 'required',
            'verification_code2' => 'required',
            'verification_code3' => 'required',
            'verification_code4' => 'required',
            'verification_code5' => 'required',
            'verification_code6' => 'required',
        ]);

        $user = $request->user();

        if ($user) {
            $userVerificationCode = implode('', $request->only(['verification_code1', 'verification_code2', 'verification_code3', 'verification_code4', 'verification_code5', 'verification_code6']));

            $storedVerifyCode = Cache::get('verification_code_' . $user->id);

            if ($storedVerifyCode && $storedVerifyCode == $userVerificationCode) {
                $user->markEmailAsVerified();
                Cache::forget('verification_code_' . $user->id);

                return redirect('/')->with('success');
            } else {
                return back()->with('error', 'Kode verifikasi tidak valid atau sudah kedaluwarsa.');
            }
        } else {
            return back()->with('error', 'Pengguna tidak ditemukan.');
        }
    }
}
