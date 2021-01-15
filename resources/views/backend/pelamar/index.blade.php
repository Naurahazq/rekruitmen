@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                
            </div>
                <div class="px-3 py-3">
                    <h4 class="font-weight-bold">Data Pelamar</h4>
                    <a href="{{route('pelamar.create')}}" class="btn btn-warning">Tambah Pelamar</a>
                </div>
                
                <div class="card-body">
                    <table class="table">
                        <thead>
                                    <tr>
                                        <th>No Test</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Telp</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123456</td>
                                        <td>Husein Basyaman</td>
                                        <td>Jakarta</td>
                                        <td>S1</td>
                                        <td>0876549876</td>
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