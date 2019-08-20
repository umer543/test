<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timing extends Model
{
    //
    protected $fillable= ['start_time', 'end_time','branch_id','day'];


    public function branch(){
       return $this->belongsTo('App\Branch');
    }


}
