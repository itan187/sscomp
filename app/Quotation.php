<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
        'cliente', 'email', 'anticipo', 'telefono', 'encargado', 'nombreArchivo', 'archivo'
    ];
}
