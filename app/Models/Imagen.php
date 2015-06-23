<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = "imagenes";

    public function pymes()
    {
        return $this->belongsToMany('\App\Models\Pyme', 'pyme_imagen','id_imagen')->select('url');
    }
}
