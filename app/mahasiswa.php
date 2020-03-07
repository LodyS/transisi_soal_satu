<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "mahasiswa";
    public $timestamps = false;
    protected $primaryKey = "nim";
    protected $fillable = ['nama_mahasiswa', 'jurusan', 'nid_dosen_pembimbing'];
}

//soal 1 implementasi model 