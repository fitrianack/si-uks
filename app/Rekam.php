<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekam extends Model
{
    protected $table = "tb_rekam";
    protected $fillable = ['noinduk', 'disabilitas', 'tekdarah', 'imun', 'imt', 'tbu', 'resikoanemia', 'rambut', 'kulit', 'kuku', 'ronggamulut', 'gigigusi', 'mata', 'telinga', 'gayahidup', 'emosi', 'modalitasbelajar', 'dominasiotak', 'alatbantu', 'jasmani', 'tgl_update'];

}
