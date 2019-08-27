<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function book()
    {
        return view('library.book');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function upload(Request $request)
    {
        $messages = [
            'file.required' => 'Upload The File',
            'title.required' => 'Put The Title',
            'author.required' => 'Put The Author',
            'image.required' => 'Put The Name Of Book Cover'
        ];
        $this->validate($request, [
            'file' => 'image',
            'title' => 'required',
            'author' => 'required',
            'image' => 'required'

        ],$messages);


        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('image');
            $image->move($destinationPath, $name);


            $book = new book();
            $book->title = $request->input('title');
            $book->author = $request->input('author');
            $book->	image = $request->input('image');

            $book->save();
            return view('library.book');
        }
    }




    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
