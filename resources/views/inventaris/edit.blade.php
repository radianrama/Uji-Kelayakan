@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Inventaris</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inventaris.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/inventaris/{{$data->id_inventaris}}/update" method="post">
    @csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Inventaris : </strong>
                <input readonly = "readonly" name="id_pegawai" class="form-control" value = "{{$data->id_inventaris}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama : </strong>
                <input type="text" name="nama" class="form-control" value = "{{$data->nama}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi : </strong>
                <input type="text" name="kondisi" class="form-control" value = "{{$data->kondisi}}">
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan : </strong>
                <textarea name="keterangan" id="" cols="30" rows="10">{{$data->keterangan}}</textarea>
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah : </strong>
                <input type="text" name="jumlah" class="form-control" value = "{{$data->jumlah}}">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Jenis : </strong>
                <input readonly = "readonly" name="id_jenis" class="form-control" value = "{{$data->kondisi}}">
            </div>
        </div>
    
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Register : </strong>
                <input type="date" name="tgl_registrasi" class="form-control" value = "{{$data->tgl_register}}">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Ruang : </strong>
                <input readonly = "readonly" name="id_ruang" class="form-control" value = "{{$data->id_ruang}}">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Inventaris : </strong>
                <input readonly = "readonly" name="kode_inventaris" class="form-control" value = "{{$data->kode_inventaris}}">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Petugas : </strong>
                <input readonly = "readonly" name="id_petugas" class="form-control" value = "{{$data->id_petugas}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="update" class="btn btn-primary">UPDATE</button>
        </div>
        
</form>
@endsection