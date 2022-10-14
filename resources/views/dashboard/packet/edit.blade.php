@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Form edit paket</h3>
    </div>

    <form action="/dashboard/packets/{{ $packet->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="card-body">
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="packetname">Nama paket</label>
        <input type="text" name="name" value="{{ $packet->name }}" class="form-control" id="packetname" placeholder="Masukkan nama paket" required>
        </div>
        <div class="form-group col-sm-5">
        <label for="unit">Satuan</label>
        <input type="text" name="unit" value="{{ $packet->unit }}" class="form-control" id="unit" placeholder="Masukkan satuan" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="codename">Kode paket</label>
        <input type="text" name="code_packet" value="{{ $packet->code_packet }}" class="form-control" id="codename" placeholder="Masukkan kode paket" required>
        </div>
        <div class="form-group col-sm-5">
            <label for="price">Harga per satuan</label>
            <input type="number" name="price" value="{{ $packet->price }}" class="form-control" id="price" placeholder="Masukkan harga per-satuan" required>
        </div>
    </div>
    <div class="form-group col-sm-5">
    <label for="desc">Keterangan</label>
    <textarea name="desc" class="form-control" id="desc" cols="30" rows="10" placeholder="Masukkan keterangan mengenai paket" required >{{ $packet->desc }}</textarea>
    </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Ubah</button>
    <a href="/dashboard/packets" class="btn btn-secondary ml-3">Batal</a>
    </div>
    </form>
    </div>
@endsection
