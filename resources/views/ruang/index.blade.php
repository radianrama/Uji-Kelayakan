@extends('layouts.menu')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ruang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ruang.create') }}">Isi Ruang</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            
            <th>Id Ruang</th>
            <th>Nama Ruang</th>
            <th>Kode Ruang</th>
            <th>Keterangan</th>
            
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($ruang as $ruang)
        <tr>
            <td>R00{{ $ruang->id_ruang }}</td>
            <td>{{ $ruang->nama_ruang }}</td>
            <td>KR00{{ $ruang->kode_ruang }}</td>
            <td>{{ $ruang->keterangan }}</td>
            <td>
                <form action="{{ route('ruang.destroy',$ruang->id_ruang) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('ruang.edit',$ruang->id_ruang) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
      
@endsection