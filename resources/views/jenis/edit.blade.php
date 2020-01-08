@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Jenis</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jenis.index') }}"> Back</a>
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

<form action="/jenis/{{$data->id_jenis}}/update" method="post">
    @csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Jenis : </strong>
                <input readonly = "readonly" name="id_jenis" class="form-control" value = "{{$data->id_jenis}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Jenis : </strong>
                <input type="text" name="nama_jenis" class="form-control" value = "{{$data->nama_jenis}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Jenis : </strong>
                <input readonly = "readonly" name="kode_jenis" class="form-control" value = "{{$data->kode_jenis}}">
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan : </strong>
                <textarea name="keterangan" id="" cols="30" rows="10">{{$data->keterangan}}</textarea>
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="update" class="btn btn-primary">UPDATE</button>
        </div>

</form>
@endsection