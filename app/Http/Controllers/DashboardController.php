<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function postLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        $user = User::where('email', $email)->first();
        if(!$user){
            session('error', 'Email tidak terdaftar');
            return back()->with('error', 'Email tidak terdaftar');
        }

        if(!\Hash::check($password, $user->password)){
            session('error', 'Password salah');
            return back()->with('error', 'Password salah');
        }

        $request->session()->put('user', $user);
        return redirect()->route('dashboard');
    }
}
