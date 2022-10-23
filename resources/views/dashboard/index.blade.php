@extends('dashboard.template')
@section('content-dashboard')
    <div>
        <div class="row">
            <a href="/dashboard/orders" class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Total Pesanan</span>
                  <span class="info-box-number">{{ $orders->count() }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            <!-- /.col -->
            <a href="/dashboard/orders" class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-money-bill"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Total Pemasukan</span>
                  <span class="info-box-number">Rp {{ number_format($orders->sum('price')) }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            <!-- /.col -->
            <a href="/dashboard/packets" class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-cubes"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Total Paket</span>
                  <span class="info-box-number">{{ $packets->count() }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            <!-- /.col -->
            <a href="/dashboard/users" class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-primary"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Total Pengelola</span>
                  <span class="info-box-number">{{ $userCount }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            <!-- /.col -->
            <!-- /.col -->
            <a href="/dashboard/spendings" class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fas fa-money-bill"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Total Pengeluaran</span>
                  <span class="info-box-number">Rp {{ number_format($sumSpending) }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            <!-- /.col -->
            <!-- /.col -->
            <a href="/dashboard/assets" class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-secondary"><i class="fas fa-cube"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Total Assets</span>
                  <span class="info-box-number">Rp {{ number_format($sumAsset) }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
            <!-- /.col -->
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card shadow-sm">
                  <div class="card-header">Pesanan 7 hari terakhir</div>
                  <div class="card-body">
                    <div>
                        <div class="card">
                          <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                              <thead>
                                <tr>
                                  <th>Kode</th>
                                  <th>Pelanggan</th>
                                  <th>Harga</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse ($orderSevenD as $order)
                                <tr>
                                  <td>{{ $order->order_code }}</td>
                                  <td>{{ $order->customer_name }}</td>
                                  <td>{{ $order->price }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Data tidak cukup untuk ditampilkan</td>
                                </tr>
                                @endforelse
                              </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
              </div>
          </div>
          </div>
    </div>
@endsection
