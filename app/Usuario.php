<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'Usuarios';
    protected $fillable = ['nombre','apepat','apemat'];
}
