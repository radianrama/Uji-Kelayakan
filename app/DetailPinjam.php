<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{
    protected $primarykey = 'id_detail_pinjaman';
    protected $table = 'detail_pinjams';
    protected $fillable =[
        'id_detail_pinjaman','id_inventaris','jumlah'
    ];
}
