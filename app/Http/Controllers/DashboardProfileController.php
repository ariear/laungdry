<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile',[
            'title' => 'Profile'
        ]);
    }

    public function updateData(Request $request,$id){
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'no_hp' => 'required',
            'address' => 'required'
        ]);

        User::find($id)->update($validasi);

        return redirect('/dashboard/profile')->with('success','User Successfully Updated');
    }
}
