<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    public $table="messages";
    public function user(){
        return $this->belongsTo('App\User','userId','id');
    }
}
