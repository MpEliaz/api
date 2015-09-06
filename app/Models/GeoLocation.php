<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeoLocation extends Model
{
    protected $table = "geolocation";

    public function pyme()
    {
        return $this->belongsTo('App\Models\Pyme');
    }
}
