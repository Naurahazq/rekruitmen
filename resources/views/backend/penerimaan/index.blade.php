@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                
            </div>
                <div class="px-3 py-3">
                    <h4 class="font-weight-bold">Data Pelamar</h4>
                    <a href="{{route('penerimaan.create')}}" class="btn btn-warning">Tambah Pelamar</a>
                </div>
                
                <div class="card-body">
                    <table class="table">
                        <thead>
                                    <tr>
                                        <th>No Penerimaan</th>
                                        <th>No Test</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123456</td>
                                        <td>87654</td>
                                        <td>Husein Basyaman</td>
                                        <td>86</td>
                                        <td>Diterima</td>
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