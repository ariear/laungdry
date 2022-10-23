@extends('dashboard.template')
@section('content-dashboard')
<div>
    <a href="/dashboard/orders/create" class="btn btn-success mb-4" >Tambah pesanan</a>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pesanan hari ini</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Kode</th>
          <th>Pelanggan</th>
          <th>Paket</th>
          <th>Berat</th>
          <th>Status</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
            <tr>
              <th class="font-weight-normal">{{ $order->order_code }}</th>
              <th class="font-weight-normal">
                {{ $order->customer_name }}
                <br>
                <small class="text-primary">{{ $order->no_hp }}</small>
              </th>
              <th class="font-weight-normal">
                {{ $order->packet->unit }}
                <br>
                <small class="text-primary">{{ $order->packet->code_packet }}</small>
              </th>
              <th class="font-weight-normal">{{ $order->weight }} {{ $order->packet->unit }}</th>
              <th class="font-weight-normal"><p class="btn btn-sm {{ $order->status == 'Pending' ? 'btn-primary' : 'btn-success' }}">{{ $order->status }}</p></th>
              <th class="font-weight-normal">{{ number_format($order->price) }}</th>
              <th>
                  <a href="/dashboard/orders/{{ $order->id }}/edit" class="btn btn-warning text-white mr-2"><i class="fa fa-solid fa-pen"></i></a>
                  <a href="/dashboard/orders/{{ $order->id }}" class="btn btn-success mr-2"><i class="fa fa-solid fa-eye"></i></a>
                  <a href="/dashboard/invoice/{{ $order->id }}" class="btn btn-primary mr-2"><i class="fa fa-print"></i></a>
                <form action="/dashboard/orders/{{ $order->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></button>
                </form>
              </th>
            </tr>
            @empty
            <tr>
              <th class="font-weight-normal">Orderan belum ada</th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
              <th></th>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>Kode</th>
            <th>Pelanggan</th>
            <th>Paket</th>
            <th>Berat</th>
            <th>Status</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection
