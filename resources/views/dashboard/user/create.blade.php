@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Form tambah pengguna</h3>
    </div>

    <form action="/dashboard/users" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="card-body">
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="name">Nama</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama pengguna" required>
        </div>
        <div class="form-group col-sm-5">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control">
            <option>-- pilih --</option>
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email pengguna" required>
        </div>
        <div class="form-group col-sm-5">
            <label for="no_hp">No HP</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Masukkan nomor hp pengguna" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
            <label for="address">Alamat</label>
            <textarea name="address" class="form-control" id="address" cols="30" rows="4" placeholder="Masukkan alamat pengguna" required ></textarea>
        </div>
        <div class="form-group col-sm-5">
            <label for="pp">Foto</label>
            <div class="custom-file mb-3">
                <input type="file" name="pp" class="custom-file-input" onchange="loadFile(event)" id="pp">
                <label class="custom-file-label" for="pp">Choose file</label>
            </div>
            <img src="" id="output" class="mx-auto">
        </div>
    </div>

    <div class="alert alert-info col-sm-5">
        Secara default password akan dibuat sama dengan email
    </div>

    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="/dashboard/users" class="btn btn-secondary ml-3">Batal</a>
    </div>
    </form>
    </div>
@endsection

<script>
    let loadFile = function(event) {
        let output = document.getElementById('output')
        output.style.width = '160px'
        output.classList.add('img-thumbnail')
        output.src = URL.createObjectURL(event.target.files[0])
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
  };
</script>
