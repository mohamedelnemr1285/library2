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
    public function book(){
        return $this->hasmany('App\book');

    }


    protected $fillable = ['id', 'name', 'email' , 'password','	borrow_or_not','count_of_dayes'];




}
