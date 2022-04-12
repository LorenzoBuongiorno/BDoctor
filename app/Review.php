<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // relazioni
    public function doctor() {
        return $this->belongsTo('App\Doctor');
    }

}
