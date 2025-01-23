<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    public function index(){
        return view('admin-views.advertisements.index');
    }
    public function create(){
        return view('admin-views.advertisements.create');
    }
}
