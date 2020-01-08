@extends('layouts.menu')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jenis.create') }}">Isi Jenis</a>
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
            
            <th>Id Jenis</th>
            <th>Nama Jenis</th>
            <th>Kode Jenis</th>
            <th>Keterangan</th>
            
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($jenis as $jenis)
        <tr>
            <td>J00{{ $jenis->id_jenis }}</td>
            <td>{{ $jenis->nama_jenis }}</td>
            <td>K00{{ $jenis->kode_jenis }}</td>
            <td>{{ $jenis->keterangan }}</td>
            <td>
                <form action="{{ route('jenis.destroy',$jenis->id_jenis) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('jenis.edit',$jenis->id_jenis) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
      
@endsection