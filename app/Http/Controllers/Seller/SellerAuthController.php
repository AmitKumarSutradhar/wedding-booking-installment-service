<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerAuthController extends Controller
{
    public function login(){
        return view('auth.seller-login');
    }
    public function loginPost(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('seller.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function dashboard(){
        return view('seller-views.dashboard.index');
    }
}
