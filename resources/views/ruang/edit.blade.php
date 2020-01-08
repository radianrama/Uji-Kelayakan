@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ruang</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('ruang.index') }}"> Back</a>
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

<form action="/ruang/{{$data->id_ruang}}/update" method="post">
    @csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Ruang : </strong>
                <input readonly = "readonly" name="id_ruang" class="form-control" value = "{{$data->id_ruang}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ruang : </strong>
                <input type="text" name="nama_ruang" class="form-control" value = "{{$data->nama_ruang}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Ruang : </strong>
                <input readonly = "readonly" name="kode_ruang" class="form-control" value = "{{$data->kode_ruang}}">
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