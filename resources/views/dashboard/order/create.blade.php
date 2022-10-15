@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Form tambah pesanan</h3>
    </div>

    <form action="/dashboard/orders" method="POST">
    @csrf
    <div class="card-body">
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="packetname">Nama pelanggan</label>
        <input type="text" name="customer_name" class="form-control" id="packetname" placeholder="Masukkan nama pelanggan" required>
        </div>
        <div class="form-group col-sm-5">
            <label for="no_hp">No. HP</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukkan no hp pelanggan" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="packet">Paket</label>
        <select name="packet_id" id="packet" class="form-control" required >
            @foreach ($packets as $packet)
            <option value="{{ $packet->id }}">{{ $packet->name }} - {{ $packet->code_packet }}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group col-sm-5">
            <label for="weight">Berat</label>
            <input type="number" name="weight" class="form-control" id="weight" placeholder="Masukkan berat barang" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="address">Alamat</label>
        <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="Masukkan alamat pelanggan" required ></textarea>
        </div>
        <div class="form-group col-sm-5">
        <label for="desc">Keterangan</label>
        <textarea name="desc" class="form-control" id="desc" cols="30" rows="5" placeholder="Masukkan keterangan pesanan" required ></textarea>
        </div>
    </div>
        <div class="row">
            <div>
                <label for="">Status</label>
                <div class="form-group d-flex">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="status" value="Done" id="Done" >
                        <label for="Done" class="form-check-label">Done</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Pending" id="Pending" checked >
                        <label for="Pending" class="form-check-label">Pending</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/dashboard/orders" class="btn btn-secondary ml-3">Batal</a>
    </div>
    </form>
    </div>
@endsection
