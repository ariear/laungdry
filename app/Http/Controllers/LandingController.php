<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('index');
    }
    public function service(){
        return view('service');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
