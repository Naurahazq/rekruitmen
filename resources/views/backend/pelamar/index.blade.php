@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-2">
                <div class="px-3 py-2">
                    <h4 class="font-weight-bold">Data Pelamar</h4>
                    <a href="{{route('pelamar.create')}}" class="btn btn-warning">Tambah Pelamar</a>
                </div>
                    <div class="card-body">
                        <table class="table table-striped">
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
                            @foreach ($pelamars as $pelamar)
                            <tr>
                                <td>{{$pelamar->no_test}}</td>
                                <td>{{$pelamar->nama}}</td>
                                <td>{{$pelamar->alamat}}</td>
                                <td>{{$pelamar->pendidikan_terakhir}}</td>
                                <td>{{$pelamar->telp}}</td>
                                <td>
                                    <form action="{{route('pelamar.delete', $pelamar->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{route('pelamar.edit', $pelamar->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                            <a href="{{route('pelamar.show', $pelamar->id)}}" class="btn btn-outline-success btn-sm">Show</a>
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