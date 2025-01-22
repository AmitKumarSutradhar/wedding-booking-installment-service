<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{


    public function sellerLogin(){
        return view('auth.seller-login');
    }

    public function sellerRegister(){
        return view('auth.seller-register');
    }
}
