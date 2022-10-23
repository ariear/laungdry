<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Packet;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.order.index',[
            'title' => 'Order',
            'orders' => Order::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.order.create',[
            'title' => 'Tambah pesanan',
            'packets' => Packet::latest()->get()
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
            'customer_name' => 'required',
            'no_hp' => 'required',
            'packet_id' => 'required',
            'weight' => 'required|integer',
            'address' => 'required',
            'desc' => 'required',
            'status' => 'required'
        ]);

        $validasi['order_code'] = random_int(100000000,999999999);

        $price = Packet::find($validasi['packet_id']);
        $validasi['price'] = $price->price * $validasi['weight'];

        Order::create($validasi);

        return redirect('/dashboard/orders')->with('success','Orderan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('dashboard.order.single',[
            'title' => 'Detail pesanan',
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('dashboard.order.edit',[
            'title' => 'Edit Pesanan',
            'packets' => Packet::latest()->get(),
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validasi = $request->validate([
            'customer_name' => 'required',
            'no_hp' => 'required',
            'packet_id' => 'required',
            'weight' => 'required|integer',
            'address' => 'required',
            'desc' => 'required',
            'status' => 'required'
        ]);

        $price = Packet::find($validasi['packet_id']);
        $validasi['price'] = $price->price * $validasi['weight'];

        $order->update($validasi);

        return redirect('/dashboard/orders')->with('success','Data Pesanan berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect('/dashboard/orders')->with('success','Orderan berhasil dihapus');
    }

    public function invoice(Request $request, $id){
        return view('dashboard.order.invoice',[
            'order' => Order::find($id)
        ]);
    }
}
