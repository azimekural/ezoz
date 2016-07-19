<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    //
     public function district()
    {
        return $this->belongsTo('App\District');
    }
}
