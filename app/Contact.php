<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable= ['branch_id','phone'];

    public function branch(){
        return $this->belongsTo('App\Branch');
    }
}
