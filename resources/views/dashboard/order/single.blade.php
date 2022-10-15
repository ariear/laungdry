@extends('dashboard.template')
@section('content-dashboard')
    <div>
        <a href="/dashboard/orders" class="btn btn-secondary mb-4"><i class="fa fa-solid fa-arrow-left mr-2"></i> Kembali</a>

        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data detail pesanan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <table class="table table-bordered col-sm-5 mr-4">
                    <tr>
                        <th>Kode pesanan</th>
                        <td>{{ $order->order_code }}</td>
                    </tr>
                    <tr>
                        <th>Paket pesanan</th>
                        <td>{{ $order->packet->name }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><p class="btn btn-sm {{ $order->status == 'Pending' ? 'btn-primary' : 'btn-success' }}">{{ $order->status }}</p></td>
                    </tr>
                    <tr>
                        <th>Berat</th>
                        <td>{{ $order->weight }}</td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>{{ number_format($order->price) }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal input</th>
                        <td>{{ $order->created_at->format('D, d - M - Y') }}</td>
                    </tr>
                </table>
                <table class="table table-bordered col-sm-5">
                    <tr>
                        <th>Nama pelanggan</th>
                        <td>{{ $order->customer_name }}</td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td>{{ $order->no_hp }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $order->address }}</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>{{ $order->desc }}</td>
                    </tr>
                </table>
            </div>
            <table class="table table-bordered col-sm-5">
                <tr>
                    <th>Tanggal input</th>
                    <td>{{ $order->created_at->format('D, d - M - Y') }}</td>
                </tr>
                <tr>
                    <th>Tanggal terakhir diubah</th>
                    <td>{{ $order->updated_at->format('D, d - M - Y') }}</td>
                </tr>
            </table>
            <div class="d-flex pt-4">
                <a href="/dashboard/orders/{{ $order->id }}/edit" class="btn btn-warning mr-3"><i class="fa fa-solid fa-pen"></i> Ubah</a>
                <form action="/dashboard/orders/{{ $order->id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
