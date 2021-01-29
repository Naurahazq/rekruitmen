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
                                <label for="">No Penerimaan</label>
                                <input type="" name="no_penerimaan" class="form-control" value="{{$penerimaans->no_penerimaan}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No Test</label>
                                <input type="" name="no_test" class="form-control" value="{{$penerimaans->no_test}}" id="" disabled>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$penerimaans->nama}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nilai</label>
                                <input type="" name="nilai" class="form-control" value="{{$penerimaans->nilai}}" id="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" class="form-control" value="{{$penerimaans->status}}" id="" disabled>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection