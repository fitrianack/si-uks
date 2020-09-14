<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    protected $table = 'user';
    protected $fillable = ['noinduk', 'nama_lengkap', 'alamat', 'statusakun', 'kelas', 'jabatan', 'namabapak', 'namaibu', 'username', 'email', 'image', 'password', 'phone'];
}
