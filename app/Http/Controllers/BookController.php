<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Subject;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBook = book::join("subject", "book.Id_Subject", "=", "subject.Id_Subject")
                          ->paginate(3);
        return view ('book.index', [
            'listBook' => $listBook
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listSubject = subject::all();
        return view('book.create', [
            'listSubject' => $listSubject,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $Name_Subject = $request->get('Name_Subject');
        $amount = $request->get('amount');

        $book = new book();
        $book->Name_Book = $name;
        $book->Id_Subject = $Name_Subject;
        $book->Amount = $amount;

        $book->save();

        return redirect(route('book.index'));
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
        $book = book::find($id);
        $listSubject = Subject::all();

        return view('book.edit', [
            'book' => $book,
            'listSubject' => $listSubject
        ]);
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
        $name = $request->get('name');
        $Name_Subject = $request->get('Name_Subject');
        $amount = $request->get('amount');

        $book = book::find($id);
        $book->Name_Book = $name;
        $book->Id_Subject = $Name_Subject;
        $book->Amount = $amount;

        $book->save();

        return redirect(route('book.index'));
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
