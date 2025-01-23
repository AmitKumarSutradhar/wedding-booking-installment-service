<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index(){
        return view('admin-views.campaign.index');
    }
    public function create(){
        return view('admin-views.campaign.create');
    }
}
