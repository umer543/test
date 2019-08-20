<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable=
        [
            'name','email','photo','user_id'
        ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function branches()
    {
        return $this->hasMany('App\Branch');
    }

    public function timings(){
        return $this->hasManyThrough('App\Timing','App\Branch');
    }

}
