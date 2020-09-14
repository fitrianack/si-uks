<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "calendar";
    protected $fillable = ['title', 'description', 'color', 'start_date', 'end_date'];
    

}
