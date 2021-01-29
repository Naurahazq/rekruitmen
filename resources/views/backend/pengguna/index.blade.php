@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-2">
                <div class="px-3 py-2">
                    <h4 class="font-weight-bold">Data Pengguna</h4>
                    <a href="{{route('pengguna.create')}}" class="btn btn-warning">Tambah Pengguna</a>
                </div>
                
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Pegawai</th>
                                    <th>Nama</th>
                                    <th>Telp</th>
                                    <th>Username</th>
                                    <th>Bagian</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                        <tbody>
                            @foreach ($penggunas as $pengguna)
                                <tr>
                                    <td>{{$pengguna->kode_pegawai}}</td>
                                    <td>{{$pengguna->nama}}</td>
                                    <td>{{$pengguna->telp}}</td>
                                    <td>{{$pengguna->username}}</td>
                                    <td>{{$pengguna->bagian}}</td>
                                    <td>
                                    <form action="{{route('pengguna.delete', $pengguna->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                                <a href="{{route('pengguna.edit', $pengguna->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a href="{{route('pengguna.show', $pengguna->id)}}" class="btn btn-outline-success btn-sm">Show</a>
                                                <button href="" class="btn btn-outline-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection