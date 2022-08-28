<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSettingController extends Controller
{
    public function index(){
        return view('dashboard.setting',[
            'title' => 'Setting',
            'system' => System::first()
        ]);
    }

    public function updateData(Request $request, $id){
        if ($request->isimage) {
            if ($request->file('image')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $validasiImage['image'] = $request->file('image')->store('system-image');

                System::find($id)->update($validasiImage);

                return redirect('/dashboard/setting')->with('success','Image profile has been changes');
            }
        }
        $validasi = $request->validate([
            'system_name' => 'required',
            'no_telp' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'fb' => 'required',
            'ig' => 'required',
            'tweet' => 'required',
            'wa' => 'required',
        ]);

        System::find($id)->update($validasi);

        return redirect('/dashboard/setting')->with('success','System Successfully Updated');
    }
}
