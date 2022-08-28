@extends('dashboard.template')
@section('content-dashboard')
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Foto Profile</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="text-center mb-4">
            <img src="/images/ppe.svg" class="img-thumbnail" alt="">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Avatar</label>
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
<div class="col-md-7">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informasi Pribadi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name" value="{{ auth()->user()->name }}">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email" value="{{ auth()->user()->email }}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-save2 mr-2"></i> Simpan</button>
                </div>
              </form>
            </div>
</div>
<div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNewPassword">New Password</label>
                    <input type="password" class="form-control" id="inputNewPassword" placeholder="Enter new password" name="new-password">
                  </div>
                  <div class="form-group">
                    <label for="inputRepeatNewPassword">Repeat New Password</label>
                    <input type="password" class="form-control" id="inputRepeatNewPassword" placeholder="Enter repeat new password" name="repeat-new-password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-key-fill"></i> Simpan</button>
                </div>
              </form>
            </div>
</div>
</div>
@endsection
