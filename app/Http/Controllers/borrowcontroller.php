<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\student;
class borrowcontroller extends Controller
{
    //

    public function borrow(){

        $students = student::all();
        return view ('library.borrow',compact('students'));
    }
}


//return view ('library.borrow')->with('students',$students);