<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        return view('admin-views.coupon.index');
    }
    public function create(){
        return view('admin-views.coupon.create');
    }
}
