<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = "tb_obat";
    protected $fillable = ['kode_obat', 'merkobat', 'katobat', 'jmlobat', 'tglsimpan', 'tglkedaluwarsa', 'kondisi', 'manfaat', 'bentuk', 'konsumen'];
    
}
