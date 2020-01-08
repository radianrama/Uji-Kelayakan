@extends('layouts.menu')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Peminjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('peminjaman.create') }}">Isi Peminjaman</a>
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
            
            <th>Id Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
            <th>Id Pegawai</th>
            
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($peminjaman as $peminjaman)
        <tr>
            <td>P00{{ $peminjaman->id_peminjaman }}</td>
            <td>{{ $peminjaman->tgl_peminjaman }}</td>
            <td>{{ $peminjaman->tgl_kembali }}</td>
            <td>{{ $peminjaman->status_peminjaman }}</td>
            <td>G00{{ $peminjaman->id_pegawai }}</td>
            <td>
                <form action="{{ route('peminjaman.destroy',$peminjaman->id_peminjaman) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('peminjaman.edit',$peminjaman->id_peminjaman) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
      
@endsection