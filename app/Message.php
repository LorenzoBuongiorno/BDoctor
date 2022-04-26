<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = [
        'text'=>'required',
            'doctor_id'=>'required',
           'name'=>'required',
           'email'=>'required',
    ];
    // relazioni
    public function doctor() {
        return $this->belongsTo('App\Doctor');
    }
}
