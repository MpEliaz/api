<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = "comunas";

    public function pymes()
    {
        return $this->hasMany('App\Models\Pyme','comuna', 'id');
    }
}
