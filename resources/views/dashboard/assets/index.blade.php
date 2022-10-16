@extends('dashboard.template')
@section('content-dashboard')
<div>
    <a href="/dashboard/assets/create" class="btn btn-success mb-4" >Tambah aset</a>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Asset</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Status</th>
          <th>Tanggal pembelian</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($assets as $asset)
            <tr>
              <th class="font-weight-normal">{{ $loop->iteration }}</th>
              <th class="font-weight-normal">{{ $asset->name }} <br><small class="text-success">{{ $asset->asset_code }}</small></th>
              <th class="font-weight-normal"><p class="btn btn-sm {{ $asset->status == 'used' ? 'btn-primary' : 'btn-danger' }}">{{ $asset->status }}</p></th>
              <th class="font-weight-normal">{{ $asset->buy_date }}</th>
              <th class="font-weight-normal">Rp {{ number_format($asset->price) }}</th>
              <th>
                  <a href="/dashboard/assets/{{ $asset->id }}/edit" class="btn btn-warning text-white"><i class="fa fa-solid fa-pen"></i></a>
                  <a href="/dashboard/assets/{{ $asset->id }}" class="btn btn-success mx-2"><i class="fa fa-solid fa-eye"></i></a>
                <form action="/dashboard/assets/{{ $asset->id }}" method="post" class="d-inline">
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
              <th class="font-weight-normal"></th>
              <th></th>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Tanggal pembelian</th>
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
