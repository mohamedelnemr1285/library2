<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libraryhomecontroller extends Controller
{
    public function index()
    {
        return view('library.libraryhome');
    }
}
