<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
       'folio','cliente', 'email', 'anticipo', 'contact', 'encargado', 'nombreArchivo', 'archivo'
    ];
}
