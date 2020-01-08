@extends('layouts.menu')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pegawai</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pegawai.create') }}">Isi Pegawai</a>
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
            
            <th>Id Pegawai</th>
            <th>Nama Pegawai</th>
            <th>NIP</th>
            <th>Alamat</th>
            
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($pegawai as $pegawai)
        <tr>
            <td>P00{{ $pegawai->id_pegawai }}</td>
            <td>{{ $pegawai->nama_pegawai }}</td>
            <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->alamat }}</td>
            <td>
                <form action="{{ route('pegawai.destroy',$pegawai->id_pegawai) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('pegawai.edit',$pegawai->id_pegawai) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
      
@endsection