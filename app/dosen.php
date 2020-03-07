<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = "dosen";
    public $timestamps = false;
    protected $primaryKey = "nid";
    protected $fillable = ['nama_dosen', 'email'];

}
// soal 1 implementasi model