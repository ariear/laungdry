<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan {{ $type }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  {{-- favicon --}}
  <link rel="shortcut icon" href="/storage/{{ $systems->image }}" type="image/x-icon">
<link rel="icon" href="/storage/{{ $systems->image }}" type="image/x-icon">

    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <div>

        @if ($type == 'Assets')
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Laporan {{ $type }}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Status</th>
                  <th>Tanggal Pembelian</th>
                  <th>Harga</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($datas as $data)
                <tr>
                  <td>{{ $data->name }} <br> <p>{{ $data->asset_code }}</p></td>
                  <td>{{ $data->status }}</td>
                  <td>{{ $data->buy_date }}</td>
                  <td>Rp {{ number_format($data->price) }}</td>
                  <td>{{ $data->desc }}</td>
                </tr>
                @empty
                <tr>
                    <td>Asset tidak ada</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        @else
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Laporan {{ $type }}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Pelanggan</th>
                  <th>Paket</th>
                  <th>Berat</th>
                  <th>Status</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($datas as $data)
                <tr>
                  <td>{{ $data->order_code }}</td>
                  <td>{{ $data->customer_name }} <br> <p>{{ $data->no_hp }}</p></td>
                  <td>{{ $data->packet->unit }} <br> <p>{{ $data->packet->code_packet }}</p></td>
                  <td>{{ $data->weight }} {{ $data->packet->unit }}</td>
                  <td>{{ $data->status }}</td>
                  <td>Rp {{ number_format($data->price) }}</td>
                </tr>
                @empty
                <tr>
                    <td>Pesanan tidak ada</td>
                </tr>
                @endforelse

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        @endif

      </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/plugins/raphael/raphael.min.js"></script>
<script src="/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/plugins/jszip/jszip.min.js"></script>
<script src="/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
   		window.print()
	});
</script>
</body>
</html>

