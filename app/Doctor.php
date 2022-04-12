<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
    'name' ,
    'surname', 
    'email' ,
    'address',
    'city' ,
    'password',
    'photo' ,
    'number',
    'curriculum' ,
    'medicalService'
    ];
}
