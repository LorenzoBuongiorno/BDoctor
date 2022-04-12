<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // relazioni
    public function doctor() {
        return $this->belongsTo('App\Doctor');
    }
}
