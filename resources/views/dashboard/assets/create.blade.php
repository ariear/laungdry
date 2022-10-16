@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Form tambah aset</h3>
    </div>

    <form action="/dashboard/assets" method="POST">
    @csrf
    <div class="card-body">
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="name">Nama</label>
        <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group col-sm-5">
        <label for="status">Status</label>
        <select name="status" class="form-control" id="status">
            <option value="used">Used</option>
            <option value="damaged">Damaged</option>
        </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
            <label for="buy_date">Tanggal pembelian</label>
            <input type="date" name="buy_date" class="form-control" id="buy_date">
        </div>
        <div class="form-group col-sm-5">
            <label for="price">Harga pembelian</label>
            <input type="number" name="price" class="form-control" id="price" required>
        </div>
    </div>
    <div class="form-group col-sm-5">
    <label for="desc">Keterangan</label>
    <textarea name="desc" class="form-control" id="desc" cols="30" rows="4" placeholder="Masukkan keterangan mengenai aset" required ></textarea>
    </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/dashboard/assets" class="btn btn-secondary ml-3">Batal</a>
    </div>
    </form>
    </div>
@endsection
