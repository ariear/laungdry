@extends('dashboard.template')
@section('content-dashboard')
    <div>
        <a href="/dashboard/assets" class="btn btn-secondary mb-4"><i class="fa fa-solid fa-arrow-left mr-2"></i> Kembali</a>

        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data detail asset</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Tanggal Diinput</th>
                    <td>{{ $asset->created_at->format('D, d - M - Y') }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $asset->name }}</td>
                </tr>
                <tr>
                    <th>Kode</th>
                    <td>{{ $asset->asset_code }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><p class="btn btn-sm {{ $asset->status == 'used' ? 'btn-primary' : 'btn-danger' }}">{{ $asset->status }}</p></td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>Rp {{ number_format($asset->price) }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>{{ $asset->desc }}</td>
                </tr>
            </table>
            <div class="d-flex pt-4">
                <a href="/dashboard/assets/{{ $asset->id }}/edit" class="btn btn-warning mr-3"><i class="fa fa-solid fa-pen"></i> Ubah</a>
                <form action="/dashboard/assets/{{ $asset->id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
