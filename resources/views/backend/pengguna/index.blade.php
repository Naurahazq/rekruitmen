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
                        <table class="table">
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
                                        <a href="" class="btn btn-outline-primary btn-sm">Detail</a>
                                        <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
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