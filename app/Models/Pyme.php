<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pyme extends Model
{
    protected $table = "pymes";

    public function comuna()
    {
        return $this->belongsTo('\App\Models\Comuna')->select('nombre');
    }

    public function imagenes()
    {
        return $this->belongsToMany('\App\Models\Imagen', 'pyme_imagen')->select('url');
    }

}
