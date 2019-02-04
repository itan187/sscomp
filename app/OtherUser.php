<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherUser extends Model
{
    protected $fillable = [
        'nombre', 'password', 'puesto','area','abreviacion'
    ];
  
}
