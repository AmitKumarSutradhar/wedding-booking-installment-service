<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function adminLogin(){
        return view('auth.admin-login');
    }

    public function adminLoginSubmit(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function adminDashboard(Request $request){
        return view('admin-views.dashboard.index');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        return redirect('admin/auth/login');
    }
}
