<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $primarykey = 'id_inventaris';
    protected $table = 'investaris';
    protected $fillable =[
        'id_inventaris','nama','kondisi','keterangan','jumlah','id_jenis','tgl_register','id_ruang','kode_inventaris','id_petugas'
    ];
}
