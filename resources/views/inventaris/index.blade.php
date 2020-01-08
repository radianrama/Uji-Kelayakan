@extends('layouts.menu')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Inventaris</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('inventaris.create') }}">Isi Inventaris</a>
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
            
            <th>Id Inventaris</th>
            <th>Nama</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Id Jenis</th>
            <th>Tanggal Register</th>
            <th>Id Ruang</th>
            <th>Kode Inventaris</th>
            <th>Id Petugas</th>
            
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($inventaris as $inventaris)
        <tr>
            <td>I00{{ $inventaris->id_inventaris }}</td>
            <td>{{ $inventaris->nama }}</td>
            <td>{{ $inventaris->kondisi }}</td>
            <td>{{ $inventaris->keterangan }}</td>
            <td>{{ $inventaris->jumlah }}</td>
            <td>J00{{ $inventaris->id_jenis }}</td>
            <td>{{ $inventaris->tgl_register }}</td>
            <td>R00{{ $inventaris->id_ruang }}</td>
            <td>{{ $inventaris->kode_inventaris }}</td>
            <td>P00{{ $inventaris->id_petugas }}</td>
            <td>
                <form action="{{ route('inventaris.destroy',$inventaris->id_inventaris) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('inventaris.edit',$inventaris->id_inventaris) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
      
@endsection