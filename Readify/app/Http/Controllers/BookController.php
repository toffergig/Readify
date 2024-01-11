<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('pages.hero');
    }
    public function petsList(){
        return view('pages.books', [
            'books' => Book::latest()->filter(request(['genre']))->paginate(4)
        ]);
    }
    public function create(){
        return view('books.create');
    }
    public function show(Book $book){
        return view('books.show', ['book' => $book]);
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'author' => 'required',
            'condition' => 'required',
            'volume' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ]);
        $formFields['user_id'] = auth()->id();
        if($request->hasFile('bookImg')){
            $formFields['bookImg'] = $request->file('bookImg')->store('bookImages', 'public');
        }
        Book::create($formFields);
        return redirect('/books')->with('message', 'Listing Created Successfully');
    }
    public function destroy(Book $book){
        //make sure user is owner
        if($book->user_id !== auth()->id()){
            abort(403, 'Unauthorized action');
        }
        $book->delete();
        return redirect('/')->with('message', 'Listing Deleted Successfully');
    }
    public function manage(){
        return view('books.manage', ['books' => Book::where('user_id', auth()->id())->get()]);
    }
    public function update(Request $request, Book $book){

        //make sure user is owner
        if($book->user_id !== auth()->id()){
            abort(403, 'Unauthorized action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'author' => 'required',
            'condition' => 'required',
            'volume' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ]);
        $book->update($formFields);
        
        return back()->with('message', 'Book Details Updated Successfully');
    }
    public function edit(Book $book) {
        return view('books.update', ["book" => $book]);
    }
}
