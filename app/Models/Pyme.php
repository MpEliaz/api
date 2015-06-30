<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pyme extends Model
{
    protected $table = "pymes";
    protected $fillable = ['nombre','telefono','direccion','email','url_imagen','descripcion_corta','descripcion_larga','estado'];

    public function comuna()
    {
        return $this->belongsTo('App\Models\Comuna')->select('nombre');
    }

    public function imagenes()
    {
        return $this->belongsToMany('\App\Models\Imagen', 'pyme_imagen');
    }

}
