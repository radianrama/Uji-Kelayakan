<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $primarykey = 'id_peminjaman';
    protected $table = 'peminjamans';
    protected $fillable =[
        'id_peminjaman','tgl_peminjaman','tgl_kembali','status_peminjaman','id_pegawai'
    ];
}
