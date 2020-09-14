<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $table = "tb_periksa";
    protected $fillable = ['noinduk', 'gdsiswa', 'tbsiswa', 'bbsiswa', 'statusgizi', 'keluhansiswa', 'periksasiswa', 'tindakan', 'keterangan', 'catatan', 'tglupdate'];
    

}
