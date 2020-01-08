@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Peminjaman</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('peminjaman.index') }}"> Back</a>
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

<form action="/peminjaman/{{$data->id_peminjaman}}/update" method="post">
    @csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Peminjaman : </strong>
                <input readonly = "readonly" name="id_peminjaman" class="form-control" value = "{{$data->id_peminjaman}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Peminjaman : </strong>
                <input type="date" name="tgl_peminjaman" class="form-control" value = "{{$data->tgl_peminjaman}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kembali : </strong>
                <input type="date" name="tgl_kembali" class="form-control" value = "{{$data->tgl_kembali}}">
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Peminjaman : </strong>
                <input type="text" name="status_peminjaman" class="form-control" value = "{{$data->status_peminjaman}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Pegawai : </strong>
                <input readonly = "readonly" name="id_pegawai" class="form-control" value = "{{$data->pegawai}}">
            </div>
        </div>
    
        
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="update" class="btn btn-primary">UPDATE</button>
        </div>
        
</form>
@endsection