<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\book;
class student extends Model
{
    //
    /**
     * @return array
     */
    public function hasmany(){
        return $this->hasMany('App\book');

}


    protected $fillable = ['id', 'name', 'email' , 'password'];



}
