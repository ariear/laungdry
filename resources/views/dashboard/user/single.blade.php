@extends('dashboard.template')
@section('content-dashboard')
    <div>
        <a href="/dashboard/users" class="btn btn-secondary mb-4"><i class="fa fa-solid fa-arrow-left mr-2"></i> Kembali</a>

        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data detail pengguna</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3 text-center">
                    <img src="{{ $user->pp ? '/storage/' . $user->pp : '/images/blank-profile.png' }}" class="img-thumbnail mb-4" width="140" alt="">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Tanggal terdaftar</th>
                            </tr>
                            <tr>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-8">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>No.HP</th>
                            <td>{{ $user->no_hp }}</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>{{ $user->role }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="d-flex pt-4">
                <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-warning mr-3"><i class="fa fa-solid fa-pen"></i> Ubah</a>
                <form action="/dashboard/users/{{ $user->id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
