@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Pegawai</label>
                                <input type="text" name="kode_pegawai" class="form-control" value="{{$penggunas->kode_pegawai}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$penggunas->nama}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Telp</label>
                                <input type="" name="telp" class="form-control" value="{{$penggunas->telp}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="{{$penggunas->username}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Bagian</label>
                                <input type="text" name="bagian" class="form-control" value="{{$penggunas->bagian}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{$penggunas->alamat}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jp" class="form-control" value="{{$penggunas->jp}}" id="" disabled>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection