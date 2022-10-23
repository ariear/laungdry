@extends('dashboard.template');
@section('content-dashboard')
<div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="card shadow-sm">
              <div class="card-header">Cetak laporan pesanan</div>
              <div class="card-body">
                <form action="/dashboard/reports/processprint/Pesanan" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="mb-1" for="startDate">Tanggal awal</label>
                        <input type="date" name="startDate" class="form-control" id="startDate" required>
                    </div>
                    <div class="mb-3">
                        <label class="mb-1" for="endDate">Tanggal akhir</label>
                        <input type="date" name="endDate" class="form-control" id="endDate" required>
                    </div>
                    <button class="btn btn-secondary">Print</button>
                </form>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card shadow-sm">
              <div class="card-header">Cetak laporan assets</div>
              <div class="card-body">
                <form action="/dashboard/reports/processprint/Assets" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="mb-1" for="startDate">Tanggal awal</label>
                        <input type="date" name="startDate" class="form-control" id="startDate" required>
                    </div>
                    <div class="mb-3">
                        <label class="mb-1" for="endDate">Tanggal akhir</label>
                        <input type="date" name="endDate" class="form-control" id="endDate" required>
                    </div>
                    <button class="btn btn-secondary">Print</button>
                </form>
              </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box">
              <div class="inner">
                <h3>{{ $orders->count() }}</h3>
                <p>Total Pesanan Bulan Ini</p>
              </div>
              <a href="/dashboard/orders" class="small-box-footer">
                Selengkapnya <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box">
              <div class="inner">
                <h3>Rp {{ number_format($orders->sum('price')) }}</h3>
                <p>Total Pendapatan Bulan Ini</p>
              </div>
              <a href="/dashboard/orders" class="small-box-footer">
                Selengkapnya <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box">
              <div class="inner">
                <h3>Rp {{ number_format($spendings->sum('total')) }}</h3>
                <p>Total Pengeluaran Bulan Ini</p>
              </div>
              <a href="/dashboard/spendings" class="small-box-footer">
                Selengkapnya <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
        </div>
    </div>
</div>
@endsection
