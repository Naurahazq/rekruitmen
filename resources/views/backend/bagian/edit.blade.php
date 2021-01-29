@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('bagian.update', $bagians->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Bagian</label>
                                <input type="" name="kode_bagian" class="form-control" value="{{$bagians->kode_bagian}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Departement</label>
                                <input type="text" name="nama_departement" class="form-control" value="{{$bagians->nama_departement}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" value="{{$bagians->lokasi}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kepala Bagian</label>
                                <input type="text" name="kepala_bagian" class="form-control" value="{{$bagians->kepala_bagian}}" id="">
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-outline-success">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection