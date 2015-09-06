<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    public function comuna()
    {
        return $this->belongsTo('App\Models\Comuna', 'id_comuna');
    }
}
