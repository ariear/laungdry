@extends('dashboard.template')
@section('content-dashboard')
<div>
    <a href="/dashboard/packets/create" class="btn btn-success mb-4" >Tambah paket</a>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List Packet</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>id</th>
          <th>Nama</th>
          <th>Satuan</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($packets as $packet)
            <tr>
              <th class="font-weight-normal">{{ $loop->iteration }}</th>
              <th class="font-weight-normal">{{ $packet->name }}</th>
              <th class="font-weight-normal">{{ $packet->unit }}</th>
              <th class="font-weight-normal">Rp {{ number_format($packet->price) }} / {{ $packet->unit }}</th>
              <th class="d-flex">
                  <a href="/dashboard/packets/{{ $packet->id }}/edit" class="btn btn-warning text-white"><i class="fa fa-solid fa-pen"></i></a>
                  <a href="/dashboard/packets/{{ $packet->id }}" class="btn btn-success mx-2"><i class="fa fa-solid fa-eye"></i></a>
                <form action="/dashboard/packets/{{ $packet->id }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></button>
                </form>
              </th>
            </tr>
            @empty
            <tr>
              <th class="font-weight-normal">Packet tersedia</th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
              <th class="font-weight-normal"></th>
              <th></th>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Satuan</th>
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
