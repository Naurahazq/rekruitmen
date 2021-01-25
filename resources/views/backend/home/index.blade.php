@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="px-3 py-2">
                <h4 class="font-weight-bold">Home</h4>
                </div>
                    <div class="p-3 mb-3 bg-warning text-dark">
                        <h4 class="font-weight-bold">Welcome !</h4>
                        <p>Hey selamat datang kembali di aplikasi Rekruitmen Karyawan, ada yang bisa kami bantu?</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                        </div>
                    <div class="px-3 py-3">
                        <h4 class="font-weight-bold">Data Pengguna</h4>
                            <a href="" class="btn btn-warning">Tambah Pengguna</a>
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
    </div>
</div>
@endsection