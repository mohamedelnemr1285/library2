<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class libraryhomecontroller extends Controller
{
//    public function index()
//    {
//        return view('library.libraryhome');
//    }

    public function index(){

        $libraryes = book::all();
        return view('library.libraryhome',compact('libraryes'));
    }
}
