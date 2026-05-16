<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendOTP;

class AuthController
{
    public function register(Request $request){
        $kodeOTP=rand(100000,999999); // Generate kode OTP 6 digit

        User::create([
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=>$request->password,
        'verification_code'=>$kodeOTP,
        ]);
        
    }
    public function showRegister(){
        return view('register');
    }

    public function processRegister(Request $request){
        $request->validate([
            'username'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);

        $otp = rand(100000, 999999); // Generate kode OTP 6 digit

        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'verification_code'=>$otp,
        ]);

        Mail::to($request->email)->send(new SendOTP($otp));

        
return redirect('/verify')->with('success', 'Pendaftaran berhasil! Yuk masukkan kode OTP-nya ✨');
    }
    public function showVerify(){
        return view('verify');
    }
    public function processVerify(Request $request){
        // 1. Ambil kodenya
    $otpInput = $request->otp;

    // 2. Cari user yang punya kode itu
    $user = User::where('verification_code', $otpInput)->first();

    if ($user) {
        // 3. Kalau ketemu, update datanya
        $user->email_verified_at = now();
        $user->verification_code = null; // Kita hapus kodenya biar nggak bisa dipake lagi
        $user->save();

        // 4. Pindah ke halaman Login
        return redirect('/login')->with('success', 'Akun kamu sudah aktif! Silakan masuk ya ✨');
    } else {
        // 5. Kalau nggak ketemu, balik lagi ke halaman verif dengan pesan error
        return redirect('/verify')->with('error', 'Aduh, kodenya salah atau sudah kedaluwarsa nih 😭');
    }
    }
    public function resendOTP(Request $request){
        $request->validate([
            'email'=>'required|email',
        ]);

        $user=User::where('email', $request->email)->first();

        if(!$user){
            return back()->withErrors(['email'=>'Email tidak ditemukan']);
        }

        $kodeOTP=rand(100000,999999); // Generate kode OTP 6 digit
        $user->verification_code=$kodeOTP;
        $user->save();

        return back()->with('success', 'Kode OTP baru telah dikirim! Cek email kamu ya ✨');
    }
    public function processLogin(Request $request) {
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        
        // Kalau berhasil, langsung ke Beranda!
        return redirect()->intended('beranda');
    }

    // Kalau gagal, balik ke login dengan pesan sedih
    return back()->with('error', 'Wah, username atau password kamu salah nih 😭');
}

public function logout(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
} 

public function showLogin()
{
    return view('login'); 
}
public function contactUs()
{
    return view('/contactUS');
}
}