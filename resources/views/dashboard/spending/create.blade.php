@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Form tambah pengeluaran</h3>
    </div>

    <form action="/dashboard/spendings" method="POST">
    @csrf
    <div class="card-body">
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="name">Nama</label>
        <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group col-sm-5">
            <label for="place">Tempat pengeluaran</label>
            <input type="text" name="place" class="form-control" id="place" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="spending_date">Tanggal pengeluaran</label>
        <input type="date" name="spending_date" class="form-control" id="spending_date">
        </div>
        <div class="form-group col-sm-5">
            <label for="total">Total pengeluaran</label>
            <input type="number" name="total" class="form-control" id="total" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="desc">Keterangan</label>
        <textarea name="desc" class="form-control" id="desc" cols="30" rows="5" placeholder="Masukkan keterangan pesanan" required ></textarea>
        </div>
    </div>
        <div class="row">
            <div>
                <label for="">Status pembayaran</label>
                <div class="form-group d-flex">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="status" value="Debt" id="Debt" >
                        <label for="Debt" class="form-check-label">Debt</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Paid" id="Paid" checked >
                        <label for="Paid" class="form-check-label">Paid</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/dashboard/spendings" class="btn btn-secondary ml-3">Batal</a>
    </div>
    </form>
    </div>
@endsection
