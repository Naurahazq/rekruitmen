@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-2">
                <div class="px-3 py-2">
                    <h4 class="font-weight-bold">Data Bagian / Departement</h4>
                    <a href="{{route('bagian.create')}}" class="btn btn-outline-primary">Tambah Bagian</a>
                </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Bagian</th>
                                    <th>Nama Departement</th>
                                    <th>Kepala Bagian</th>
                                    <th>Lokasi</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bagians as $bagian)
                                <tr>
                                    <td>{{$bagian->kode_bagian}}</td>
                                    <td>{{$bagian->nama_departement}}</td>
                                    <td>{{$bagian->kepala_bagian}}</td>
                                    <td>{{$bagian->lokasi}}</td>

                                    <td>
                                        <form action="{{route('bagian.delete', $bagian->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                                <a href="{{route('bagian.edit', $bagian->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a href="{{route('bagian.show', $bagian->id)}}" class="btn btn-outline-success btn-sm">Show</a>
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
</div>
@endsection