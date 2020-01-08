@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Pegawai</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pegawai.index') }}"> Back</a>
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

<form action="/pegawai/{{$data->id_pegawai}}/update" method="post">
    @csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Pegawai : </strong>
                <input readonly = "readonly" name="id_pegawai" class="form-control" value = "{{$data->id_pegawai}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai : </strong>
                <input type="text" name="nama_Pegawai" class="form-control" value = "{{$data->nama_Pegawai}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIP : </strong>
                <input type="text" name="nip" class="form-control" value = "{{$data->nip}}">
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat : </strong>
                <textarea name="alamat" id="" cols="30" rows="10">{{$data->alamat}}</textarea>
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="update" class="btn btn-primary">UPDATE</button>
        </div>
        
</form>
@endsection