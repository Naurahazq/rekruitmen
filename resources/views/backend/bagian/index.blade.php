@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                
            </div>
            
                <div class="px-3 py-3">
                    <h4 class="font-weight-bold">Data Bagian / Departement</h4>
                    <a href="{{route('bagian.create')}}" class="btn btn-outline-primary">Tambah Bagian</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kode Bagian</th>
                                <th>Nama Departement</th>
                                <th>Lokasi</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                                <td>W112</td>
                                <td>Sastra</td>
                                <td>Jakarta</td>
                                <td>
                                    <a href="" class="btn btn-outline-primary btn-sm">Detail</a>
                                    <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection