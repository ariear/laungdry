@extends('dashboard.template')
@section('content-dashboard')
    <div>
        <a href="/dashboard/spendings" class="btn btn-secondary mb-4"><i class="fa fa-solid fa-arrow-left mr-2"></i> Kembali</a>

        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data detail pengeluaran</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $spending->name }}</td>
                </tr>
                <tr>
                    <th>Status pengeluaran</th>
                    <td><p class="btn btn-sm {{ $spending->status == 'Paid' ? 'btn-success' : 'btn-primary' }}" >{{ $spending->status }}</p></td>
                </tr>
                <tr>
                    <th>Total pengeluaran</th>
                    <td>Rp {{ number_format($spending->total) }}</td>
                </tr>
                <tr>
                    <th>Tanggal pengeluaran</th>
                    <td>{{ $spending->spending_date }}</td>
                </tr>
                <tr>
                    <th>Tempat pengeluaran</th>
                    <td>{{ $spending->place }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>{{ $spending->desc }}</td>
                </tr>
                <tr>
                    <th>Tanggal diinput</th>
                    <td>{{ $spending->created_at->format('D , d - M - Y') }}</td>
                </tr>
            </table>
            <div class="d-flex pt-4">
                <a href="/dashboard/spendings/{{ $spending->id }}/edit" class="btn btn-warning mr-3"><i class="fa fa-solid fa-pen"></i> Ubah</a>
                <form action="/dashboard/spendings/{{ $spending->id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
