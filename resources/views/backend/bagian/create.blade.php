@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('bagian.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Bagian</label>
                                <input type="" name="kode_bagian" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Departement</label>
                                <input type="text" name="nama_departement" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kepala Bagian</label>
                                <input type="text" name="kepala_bagian" class="form-control" id="">
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-outline-info">
                            Masukan Pengguna Baru
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection