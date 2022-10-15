@extends('dashboard.template')
@section('content-dashboard')
<div>
    <a href="/dashboard/users/create" class="btn btn-success mb-4" >Tambah paket</a>
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
          <th>Foto</th>
          <th>Nama</th>
          <th>Kontak</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
              <th class="font-weight-normal">{{ $loop->iteration }}</th>
              <th class="font-weight-normal"><img src="{{ $user->pp ? '/storage/' . $user->pp : '/images/blank-profile.png' }}" width="90" class="img-circle" alt=""></th>
              <th class="font-weight-normal">{{ $user->name }} <br><small class="text-success">{{ $user->role }}</small></th>
              <th class="font-weight-normal">{{ $user->email }} <br><small class="text-success">{{ $user->no_hp }}</small></th>
              <th class="font-weight-normal">{{ $user->address }}</th>
              <th>
                  <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-warning text-white"><i class="fa fa-solid fa-pen"></i></a>
                  <a href="/dashboard/users/{{ $user->id }}" class="btn btn-success mx-2"><i class="fa fa-solid fa-eye"></i></a>
                <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
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
              <th class="font-weight-normal"></th>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>id</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection
