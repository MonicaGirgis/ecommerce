<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    public $table="cats";
    public function prods(){
        return $this->hasMany('App\prod');
    }
}
