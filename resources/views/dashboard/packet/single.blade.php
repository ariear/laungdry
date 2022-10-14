@extends('dashboard.template')
@section('content-dashboard')
    <div>
        <a href="/dashboard/packets" class="btn btn-secondary mb-4"><i class="fa fa-solid fa-arrow-left mr-2"></i> Kembali</a>

        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data detail paket</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Tanggal Diinput</th>
                    <td>{{ $packet->created_at->format('D, d - M - Y') }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $packet->name }}</td>
                </tr>
                <tr>
                    <th>Kode</th>
                    <td>{{ $packet->code_packet }}</td>
                </tr>
                <tr>
                    <th>Satuan</th>
                    <td>{{ $packet->unit }}</td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>{{ number_format($packet->price) }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>{{ $packet->desc }}</td>
                </tr>
            </table>
            <div class="d-flex pt-4">
                <a href="/dashboard/packets/{{ $packet->id }}/edit" class="btn btn-warning mr-3"><i class="fa fa-solid fa-pen"></i> Ubah</a>
                <form action="/dashboard/packets/{{ $packet->id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
