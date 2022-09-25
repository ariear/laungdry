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
    <form action="/dashboard/setting/{{ $system->id }}" method="POST" enctype="multipart/form-data" >
        @method('put')
        @csrf
      <div class="card-body">
        <div class="text-center mb-4">
            <img id="output">
            <img src="{{ $system->image ? '/storage/' . $system->image : '/images/icons/icon.png' }}" class="img-thumbnail" width="160" id="ppnow" alt="">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Logo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="hidden" name="isimage" value="isimage">
              <input type="hidden" name="oldImage" value="{{ $system->image }}">
              <input type="file" name="image" class="custom-file-input" onchange="loadFile(event)" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose Logo</label>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary" id="btnupdatepp" disabled ><i class="bi bi-save2 mr-2"></i> Simpan</button>
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
              <form action="/dashboard/setting/{{ $system->id }}" method="POST" >
                @method('put')
                @csrf
                <div class="row">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Nama sistem</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="system_name" value="{{ $system->system_name }}">
                  </div>
                  <div class="form-group">
                    <label for="nohp">No Hp Sistem</label>
                    <input type="text" class="form-control" id="nohp" placeholder="Enter no hp" name="no_telp" value="{{ $system->no_telp }}">
                  </div>
                  <div class="form-group">
                    <label for="emailsistem">Email Sistem</label>
                    <input type="email" class="form-control" id="emailsistem" placeholder="Enter email" name="email" value="{{ $system->email }}">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="address" class="form-control" id="" cols="30" rows="3">{{ $system->address }}</textarea>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="fb">Facebook</label>
                    <input type="text" class="form-control" id="fb" placeholder="Enter Facebook url" name="fb" value="{{ $system->fb }}">
                  </div>
                  <div class="form-group">
                    <label for="ig">Instagram</label>
                    <input type="text" class="form-control" id="ig" placeholder="Enter Instagram url" name="ig" value="{{ $system->ig }}" >
                  </div>
                  <div class="form-group">
                    <label for="tweet">Twitter</label>
                    <input type="text" class="form-control" id="tweet" placeholder="Enter Twitter url" name="tweet" value="{{ $system->tweet }}" >
                  </div>
                  <div class="form-group">
                    <label for="wa">WhatsApp</label>
                    <input type="text" class="form-control" id="wa" placeholder="Enter WhatsApp url" name="wa" value="{{ $system->wa }}" >
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

<script>
    let loadFile = function(event) {
    let ppnow = document.getElementById('ppnow')
    ppnow.style.display = 'none'

    document.getElementById('btnupdatepp').disabled = false

    let output = document.getElementById('output')
    output.style.width = '160px'
    output.classList.add('img-thumbnail')
    output.src = URL.createObjectURL(event.target.files[0])
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };
</script>
