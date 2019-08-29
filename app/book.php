<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\student;
class book extends Model
{
    public function student(){
        return $this->belongsTo('App\student');

    }



}
