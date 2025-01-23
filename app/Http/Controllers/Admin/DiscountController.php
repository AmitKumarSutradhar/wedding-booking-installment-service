<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index(){
        return view('admin-views.discount.index');
    }
    public function create(){
        return view('admin-views.discount.create');
    }
}
