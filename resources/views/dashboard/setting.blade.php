@extends('dashboard.template')
@section('content-dashboard')
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Logo Sistem</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="text-center mb-4">
            <img src="/images/ppe.svg" class="img-thumbnail" alt="">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Logo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="bi bi-save2 mr-2"></i> Simpan</button>
      </div>
    </form>
  </div>
</div>
<div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informasi Sistem</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="row">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Nama sistem</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="nohp">No Hp Sistem</label>
                    <input type="text" class="form-control" id="nohp" placeholder="Enter no hp" name="nohp">
                  </div>
                  <div class="form-group">
                    <label for="emailsistem">Email Sistem</label>
                    <input type="email" class="form-control" id="emailsistem" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" id="" cols="30" rows="3"></textarea>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="fb">Facebook</label>
                    <input type="text" class="form-control" id="fb" placeholder="Enter Facebook url" name="fb">
                  </div>
                  <div class="form-group">
                    <label for="ig">Instagram</label>
                    <input type="text" class="form-control" id="ig" placeholder="Enter Instagram url" name="ig">
                  </div>
                  <div class="form-group">
                    <label for="tweet">Twitter</label>
                    <input type="text" class="form-control" id="tweet" placeholder="Enter Twitter url" name="tweet">
                  </div>
                  <div class="form-group">
                    <label for="wa">WhatsApp</label>
                    <input type="text" class="form-control" id="wa" placeholder="Enter WhatsApp url" name="wa">
                  </div>
                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-save2 mr-2"></i> Simpan</button>
                </div>
              </form>
            </div>
</div>
</div>

<div class="col-md-2">
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Danger</h3>
        </div>
        <form action="/auth/logout" method="post">
        @csrf
            <button class="btn btn-danger m-3">Logout</button>
        </form>
    </div>
</div>
</div>
@endsection
