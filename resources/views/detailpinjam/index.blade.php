@extends('layouts.menu')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail Pinjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('detailpinjam.create') }}">Isi Detail</a>
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
            
            <th>Id Detail Pinjaman</th>
            <th>Id Inventaris</th>
            <th>Jumlah</th>
            
            
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($detail as $detail)
        <tr>
            <td>D00{{ $detail->id_detail_pinjaman }}</td>
            <td>I00{{ $detail->id_inventaris }}</td>
            <td>{{ $detail->jumlah }}</td>
            
            <td>
                <form action="{{ route('detailpinjam.destroy',$detail->id_detail) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('detailpinjam.edit',$detail->id_detail) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
      
@endsection