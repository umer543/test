<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $fillable=
        [
          'address','company_id','country'
        ];

    public function timings(){

        return $this->hasMany('App\Timing');

    }

    public function contacts(){
        return $this->hasMany('App\Contact');
    }
}
