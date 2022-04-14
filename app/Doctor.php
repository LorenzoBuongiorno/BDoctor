<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class Doctor extends Authenticatable
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
         'surname', 
         'email', 
         'password',
         'address',
         'city',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* relazioni */
    public function specialization() {
        return $this->belongsToMany('App\Specialization');
    }

    public function message() {
        return $this->hasMany('App\Message');
    }

    public function review() {
        return $this->hasMany('App\Review');
    }

    public function sponsor() {
        return $this->belongsToMany('App\Sponsor');
    }
}
