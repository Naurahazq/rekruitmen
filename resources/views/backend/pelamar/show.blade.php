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
                                <label for="">No Test</label>
                                <input type="text" name="no_test" class="form-control" value="{{$pelamars->no_test}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$pelamars->nama}}" id=""  disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{$pelamars->alamat}}" id=""  disabled> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pendidikan Terakhir</label>
                                <input type="text" name="pendidikan_terakhir" class="form-control" value="{{$pelamars->pendidikan_terakhir}}" id=""  disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Telp</label>
                                <input type="text" name="telp" class="form-control" value="{{$pelamars->telp}}" id=""  disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jp" class="form-control" value="{{$pelamars->jp}}" id=""  disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Agama</label>
                                <input type="text" name="agama" class="form-control" value="{{$pelamars->agama}}" id=""  disabled>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection