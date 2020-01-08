@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Detail Pinjam</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('detailpinjam.index') }}"> Back</a>
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

<form action="/detail/{{$data->id_detail}}/update" method="post">
    @csrf

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Detail Pinjam : </strong>
                <input readonly = "readonly" name="id_detail_pinjaman" class="form-control" value = "{{$data->id_detail_pinjaman}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Inventaris : </strong>
                <input readonly = "readonly" name="id_inventaris" class="form-control" value = "{{$data->id_inventaris}}">
            </div>
        </div>
    

    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah : </strong>
                <input type = "text" name="jumlah" class="form-control" value = "{{$data->jumlah}}">
            </div>
        </div>
    
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="update" class="btn btn-primary">UPDATE</button>
        </div>

</form>
@endsection