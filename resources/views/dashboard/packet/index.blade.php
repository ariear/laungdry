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
        <tr>
          <th class="font-weight-normal"></th>
          <th class="font-weight-normal"></th>
          <th class="font-weight-normal"></th>
          <th class="font-weight-normal"></th>
          <th> <a class="btn btn-danger " href="">Delete</a>
            <a href="" class="btn btn-warning text-white">Edit</a>
          </th>
        </tr>
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
