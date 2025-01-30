<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    public function index(){
        return view('seller-views.advertisements.index');
    }
    public function create(){
        return view('seller-views.advertisements.create');
    }
}
