@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Form tambah paket baru</h3>
    </div>

    <form>
    <div class="card-body">
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="packetname">Nama paket</label>
        <input type="text" name="name" class="form-control" id="packetname" placeholder="Masukkan nama paket">
        </div>
        <div class="form-group col-sm-5">
        <label for="unit">Satuan</label>
        <input type="text" name="unit" class="form-control" id="unit" placeholder="Masukkan satuan">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="codename">Kode paket</label>
        <input type="text" name="code_packet" class="form-control" id="codename" placeholder="Masukkan kode paket">
        </div>
        <div class="form-group col-sm-5">
            <label for="price">Harga per satuan</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Masukkan harga per-satuan">
        </div>
    </div>
    <div class="form-group col-sm-5">
    <label for="desc">Keterangan</label>
    <textarea name="desc" class="form-control" id="desc" cols="30" rows="10" placeholder="Masukkan keterangan mengenai paket" ></textarea>
    </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="/dashboard/packets" class="btn btn-secondary ml-3">Batal</a>
    </div>
    </form>
    </div>
@endsection
