@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('pengguna.update', $penggunas->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Pegawai</label>
                                <input type="text" name="kode_pegawai" class="form-control" value="{{$penggunas->kode_pegawai}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$penggunas->nama}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Telp</label>
                                <input type="" name="telp" class="form-control" value="{{$penggunas->telp}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="{{$penggunas->username}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Bagian</label>
                                <input type="text" name="bagian" class="form-control" value="{{$penggunas->bagian}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{$penggunas->alamat}}" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jp" class="form-control" value="{{$penggunas->jp}}" id="">
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