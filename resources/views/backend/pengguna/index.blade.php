@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
            </div>
                <div class="px-3 py-3">
                    <h4 class="font-weight-bold">Data Pengguna</h4>
                    <a href="{{route('pengguna.create')}}" class="btn btn-warning">Tambah Pengguna</a>
                </div>
                
                <div class="card-body">
                    <table class="table table-bordered">
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
                                    <tr>
                                        <td>123456</td>
                                        <td>Husein Basyaman</td>
                                        <td>0878988257</td>
                                        <td>Rahusen</td>
                                        <td>Admin</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-outline-info">Detail</a>
                                            <a href="" class="btn btn-sm btn-outline-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection