<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class data extends Model
{

    protected $fillable = ['id','nama','produk','wilayah'];
    protected $table = 'data';
    public $timestamps = false;
}
