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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kode Bagian</th>
                                    <th>Nama Departement</th>
                                    <th>Lokasi</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bagians as $bagian)
                                <tr>
                                    <td>{{$bagian->kode_bagian}}</td>
                                    <td>{{$bagian->nama_departement}}</td>
                                    <td>{{$bagian->lokasi}}</td>

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
</div>
@endsection