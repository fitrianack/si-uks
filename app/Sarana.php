<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    protected $table = "tb_sarana";
    protected $fillable = ['kode_sarana', 'namasarana', 'merksarana', 'jmlsarana', 'katsarana','konsarana', 'tglbeli', 'fotosarana' ];
    

}
