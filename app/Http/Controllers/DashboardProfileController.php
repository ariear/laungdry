<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile',[
            'title' => 'Profile'
        ]);
    }

    public function updateData(Request $request,$id){
        if ($request->isimage) {
            if ($request->file('pp')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $validasiImage['pp'] = $request->file('pp')->store('pp');

                User::find($id)->update($validasiImage);

                return redirect('/dashboard/profile')->with('success','Profile has been changes');
            }
        }

        $validasi = $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'address' => 'required'
        ]);

        User::find($id)->update($validasi);

        return redirect('/dashboard/profile')->with('success','User Successfully Updated');
    }

    public function updatePassword(Request $request,$id){
        $validasi = $request->validate([
            'old-pw' => 'required',
            'new-password' => 'required'
        ]);

        if (password_verify($validasi['old-pw'],auth()->user()->password)) {
            $pwhash = password_hash($validasi['new-password'],PASSWORD_DEFAULT);
            User::find($id)->update(['password' => $pwhash]);

            return redirect('/dashboard/profile')->with('success','Password has been change');
        }else{
            return redirect('/dashboard/profile')->with('error','Old password wrong');
        }
    }
}
