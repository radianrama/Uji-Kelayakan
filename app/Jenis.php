<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $primarykey = 'id_jenis';
    protected $table = 'jenis';
    protected $fillable =[
        'id_jenis','nama_jenis','kode_jenis','keterangan'
    ];
}
