<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index($status){
        return view('seller-views.booking.index',[
                'page_title' => $status,
            ]
        );
    }
}
