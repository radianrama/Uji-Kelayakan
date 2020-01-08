<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $primarykey = 'id_level';
    protected $table = 'levels';
    protected $fillable =[
        'id_level','nama_level'
    ];
}
