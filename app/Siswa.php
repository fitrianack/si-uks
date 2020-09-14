<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "tb_siswa";
    protected $fillable = ['noinduk', 'nik', 'nisn', 'nama', 'kelamin', 'tmplahir', 'tgllahir', 'umur', 'alamatortu', 'namaayah', 'namaibu', 'kerjaayah', 'kerjaibu', 'wali', 'pekerjaanwali', 'klspos', 'foto', 'hape', 'telpon', 'kodeortu'];
    
}
