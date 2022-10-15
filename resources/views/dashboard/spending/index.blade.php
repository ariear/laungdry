@extends('dashboard.template')
@section('content-dashboard')
<div>
    <a href="/dashboard/spendings/create" class="btn btn-success mb-4" >Tambah pengeluaran</a>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data pengeluaran</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Status pembayaran</th>
          <th>Tgl pengeluaran</th>
          <th>Harga</th>
          <th>Tempat pengeluaran</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($spendings as $spending)
            <tr>
              <th class="font-weight-normal">{{ $loop->iteration }}</th>
              <th class="font-weight-normal">{{ $spending->name }}</th>
              <th class="font-weight-normal"><p class="btn btn-sm {{ $spending->status == 'Paid' ? 'btn-success' : 'btn-primary' }}">{{ $spending->status }}</p></th>
              <th class="font-weight-normal">{{ $spending->spending_date }}</th>
              <th class="font-weight-normal">Rp {{ number_format($spending->total) }}</th>
              <th class="font-weight-normal">{{ $spending->place }}</th>
              <th>
                  <a href="/dashboard/spendings/{{ $spending->id }}/edit" class="btn btn-warning text-white"><i class="fa fa-solid fa-pen"></i></a>
                  <a href="/dashboard/spendings/{{ $spending->id }}" class="btn btn-success mx-2"><i class="fa fa-solid fa-eye"></i></a>
                <form action="/dashboard/spendings/{{ $spending->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></button>
                </form>
              </th>
            </tr>
            @empty
            <tr>
              <th class="font-weight-normal">Pengeluaran belum ada</th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Status pembayaran</th>
            <th>Tgl pengeluaran</th>
            <th>Harga</th>
            <th>Tempat pengeluaran</th>
            <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection
