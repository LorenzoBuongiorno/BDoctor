<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    // relazioni
    public function doctor() {
        return $this->belongsToMany('App\Doctor');
    }
}
