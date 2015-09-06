<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pyme extends Model
{
    protected $table = "pymes";
    protected $fillable = ['nombre','telefono','direccion','email','url_imagen','descripcion_corta','descripcion_larga','estado'];

    public function comuna()
    {
        return $this->belongsTo('App\Models\Comuna');
    }

    public function imagenes()
    {
        return $this->belongsToMany('\App\Models\Imagen', 'pyme_imagen');
    }

    public function geoPosicion()
    {
        return $this->hasOne('\App\Models\GeoLocation', 'id_pyme');
    }

    public function tipo_pyme()
    {
        return $this->hasOne('\App\Models\TipoPyme', 'tipo_pyme_id');
    }



}
