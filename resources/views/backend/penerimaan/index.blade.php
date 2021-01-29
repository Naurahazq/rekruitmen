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
                        <table class="table table-striped">
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
                                    <form action="{{route('penerimaan.delete', $penerimaan->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                                <a href="{{route('penerimaan.edit', $penerimaan->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a href="{{route('penerimaan.show', $penerimaan->id)}}" class="btn btn-outline-success btn-sm">Show</a>
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