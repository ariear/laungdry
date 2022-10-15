@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Form edit pengeluaran</h3>
    </div>

    <form action="/dashboard/spendings/{{ $spending->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="card-body">
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="name">Nama</label>
        <input type="text" name="name" value="{{ $spending->name }}" class="form-control" id="name" required>
        </div>
        <div class="form-group col-sm-5">
            <label for="place">Tempat pengeluaran</label>
            <input type="text" name="place" value="{{ $spending->place }}" class="form-control" id="place" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="spending_date">Tanggal pengeluaran</label>
        <input type="date" name="spending_date" value="{{ $spending->spending_date }}" class="form-control" id="spending_date">
        </div>
        <div class="form-group col-sm-5">
            <label for="total">Total pengeluaran</label>
            <input type="number" name="total" value="{{ $spending->total }}" class="form-control" id="total" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="desc">Keterangan</label>
        <textarea name="desc" class="form-control" id="desc" cols="30" rows="5" placeholder="Masukkan keterangan pesanan" required >{{ $spending->desc }}</textarea>
        </div>
    </div>
        <div class="row">
            <div>
                <label for="">Status pembayaran</label>
                <div class="form-group d-flex">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="status" value="Debt" id="Debt" {{ $spending->status == 'Debt' ? 'checked' : '' }} >
                        <label for="Debt" class="form-check-label">Debt</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Paid" id="Paid" {{ $spending->status == 'Paid' ? 'checked' : '' }} >
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
