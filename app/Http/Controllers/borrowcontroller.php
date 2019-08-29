<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\student;
class borrowcontroller extends Controller
{
    //




    public function borrow(){

        $update = student::all();
        return view ('libraryhome.borrow',compact('update'));
    }

//    public function book($id){
//
////        $update = student::orderBy('created_at','asc')->get();
//        $update = student::find($id);
//        return view('library.borrow',compact('update'));
//
//    }


    public function edit (id $id){
//        $update = student::findOrFail($id);
        return view('library.borrow',compact('id'));


    }


    public function update(Request $request , $id){

        $update = student::find($id);
//        $update->name = $request->input('student');
//        $update->borrow_or_not = $request->input('borrow');
//        $update->count_of_days = $request->input('dayes');
//        $update->save();


        student::where('id' ,  $id)->update([
        $update->name = $request->input('student'),
        $update->borrow_or_not = $request->input('borrow'),
        $update->count_of_dayes = $request->input('dayes')
        ]);

        return view('library.borrow');
}



}


//return view ('library.borrow')->with('students',$students);