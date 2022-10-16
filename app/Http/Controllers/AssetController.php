<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.assets.index',[
            'title' => 'Assets',
            'assets' => Asset::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.assets.create',[
            'title' => 'Tambah aset'
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
            'status' => 'required',
            'buy_date' => 'required|date',
            'price' => 'required|integer',
            'desc' => 'required'
        ]);
        $validasi['asset_code'] = random_int(100000000,999999999);

        Asset::create($validasi);

        return redirect('/dashboard/assets')->with('success','Aset berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        return view('dashboard.assets.single',[
            'title' => 'Detail Asset',
            'asset' => $asset
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        return view('dashboard.assets.edit',[
            'title' => 'Edit Aset',
            'asset' => $asset
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'buy_date' => 'required|date',
            'price' => 'required|integer',
            'desc' => 'required'
        ]);

        $asset->update($validasi);

        return redirect('/dashboard/assets')->with('success','Aset berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();

        return redirect('/dashboard/assets')->with('success','Aset berhasil dihapus');
    }
}
