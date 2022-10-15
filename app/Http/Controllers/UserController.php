<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index',[
            'title' => 'Pengguna',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create',[
            'title' => 'Tambah pengguna'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email:dns',
            'no_hp' => 'required',
            'address' => 'required'
        ]);
        $validasi['password'] = bcrypt($validasi['email']);

        if ($request->file('pp')) {
            $validasi['pp'] = $request->file('pp')->store('pp');
        }

        User::create($validasi);

        return redirect('/dashboard/users')->with('success','Pengguna berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.user.single',[
            'title' => 'Detail pengguna',
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit',[
            'title' => 'Ubah data pengguna',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email:dns',
            'no_hp' => 'required',
            'address' => 'required'
        ]);
        $validasi['password'] = bcrypt($validasi['email']);

        if ($request->file('pp')) {
            $validasi['pp'] = $request->file('pp')->store('pp');

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
        }else{
            $validasi['pp'] = $request->oldImage;
        }

        $user->update($validasi);

        return redirect('/dashboard/users')->with('success','Data pengguna berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->pp) {
            Storage::delete($user->pp);
        }
        $user->delete();

        return redirect('/dashboard/users')->with('success','Pengguna berhasil dihapus');
    }
}
