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



    protected $fillable = ['id', 'name', 'email' , 'password','	borrow_or_not','count_of_dayes'];




}
