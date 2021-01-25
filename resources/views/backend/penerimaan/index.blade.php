@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-2">
                <div class="px-3 py-2">
                    <h4 class="font-weight-bold">Data Penerimaan</h4>
                    <a href="{{route('penerimaan.create')}}" class="btn btn-warning">Tambah Data</a>
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
                            @foreach ($penerimaans as $penerimaan)
                            <tr>
                                <td>{{$penerimaan->no_penerimaan}}</td>
                                <td>{{$penerimaan->no_test}}</td>
                                <td>{{$penerimaan->nama}}</td>
                                <td>{{$penerimaan->nilai}}</td>
                                <td>{{$penerimaan->status}}</td>
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