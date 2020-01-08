<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $primarykey = 'id_pegawai';
    protected $table = 'pegawai';
    protected $fillable =[
        'id_pegawai','nama_pegawai','nip','alamat'
    ];
}
