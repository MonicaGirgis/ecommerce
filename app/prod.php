<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prod extends Model
{
    public $table="prods";
    public function cat(){
        return $this->belongsTo('App\cat','catId','id');
    }

    //public $table="prods";
    public function users(){
        return $this->belongsToMany('App\User');
    }
   
}
