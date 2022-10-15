<?php

namespace App\Http\Controllers;

use App\Models\Spending;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.spending.index',[
            'title' => 'Pengeluaran',
            'spendings' => Spending::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.spending.create',[
            'title' => 'Tambah pengeluaran'
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
            'place' => 'required',
            'spending_date' => 'required',
            'total' => 'required|integer',
            'desc' => 'required',
            'status' => 'required'
        ]);

        Spending::create($validasi);

        return redirect('/dashboard/spendings')->with('success','Pengeluaran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spending  $spending
     * @return \Illuminate\Http\Response
     */
    public function show(Spending $spending)
    {
        return view('dashboard.spending.single',[
            'title' => 'Detail pengeluaran',
            'spending' => $spending
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spending  $spending
     * @return \Illuminate\Http\Response
     */
    public function edit(Spending $spending)
    {
        return view('dashboard.spending.edit',[
            'title' => 'Edit pengeluaran',
            'spending' => $spending
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spending  $spending
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spending $spending)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'place' => 'required',
            'spending_date' => 'required',
            'total' => 'required|integer',
            'desc' => 'required',
            'status' => 'required'
        ]);

        $spending->update($validasi);

        return redirect('/dashboard/spendings')->with('success','Pengeluaran berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spending  $spending
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spending $spending)
    {
        $spending->delete();

        return redirect('/dashboard/spendings')->with('success','Pengeluaran berhasil dihapus');
    }
}
