<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use Illuminate\Http\Request;

class PacketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.packet.index',[
            'title' => 'Packet',
            'packets' => Packet::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.packet.create',[
            'title' => 'Tambah Paket Baru'
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
            'code_packet' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'desc' => 'required'
        ]);

        Packet::create($validasi);

        return redirect('/dashboard/packets')->with('success','Paket baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function show(Packet $packet)
    {
        return view('dashboard.packet.single',[
            'title' => 'Detail Paket',
            'packet' => $packet
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function edit(Packet $packet)
    {
        return view('dashboard.packet.edit',[
            'title' => 'Edit Paket',
            'packet' => $packet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packet $packet)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'code_packet' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'desc' => 'required'
        ]);

        $packet->update($validasi);

        return redirect('/dashboard/packets')->with('success','Paket berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Packet  $packet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packet $packet)
    {
        $packet->delete();

        return redirect('/dashboard/packets')->with('Paket berhasil dihapus');
    }
}
