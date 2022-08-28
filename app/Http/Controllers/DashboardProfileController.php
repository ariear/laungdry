<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile',[
            'title' => 'Profile'
        ]);
    }
}
