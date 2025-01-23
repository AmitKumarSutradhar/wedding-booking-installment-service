<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index($status){
        return view('admin-views.booking.index',[
                'page_title' => $status,
            ]
        );
    }
}
