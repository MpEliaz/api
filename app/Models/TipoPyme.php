<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPyme extends Model
{
    protected $table = 'tipo_pyme';
    protected $fillable = ['nombre'];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
}
