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
                                <label for="">Kode Bagian</label>
                                <input type="" name="kode_bagian" class="form-control" value="{{$bagians->kode_bagian}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Departement</label>
                                <input type="text" name="nama_departement" class="form-control" value="{{$bagians->nama_departement}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" value="{{$bagians->lokasi}}" id="" disabled> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kepala Bagian</label>
                                <input type="text" name="kepala_bagian" class="form-control" value="{{$bagians->kepala_bagian}}" id="" disabled>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection