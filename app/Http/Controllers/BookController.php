<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Issue;

class BookController extends Controller
{
    function bookRegistration(Request $req){
        $req->validate([
            'name' => 'required',
            'author' => 'required',
        ]);

        $book = new Book;
        $book->name = $req->name;
        $book->author = $req->author;
        $book->status = "available";
        $book->save();

        return redirect('admindashboard');
    }

    function edit($id){
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }

    function update(Request $req, $id) 
    {
        $book = Book::find($id);

        $req->validate([
            'name' => 'required',
            'author' => 'required',
        ]);

        $book->name = $req->name;
        $book->author = $req->author;
        $book->save();

        return redirect('admindashboard');
    }

    function delete($id)
    {
        $member = Book::find($id);
        $member->delete();
        
        session()->flash('book_delete', 'Book Deleted Successfully..!!');
        return redirect('admindashboard');
    }

    function issueBook(){
        $books = Book::where('status', '=', 'available')->get();
        return view('book.issue', compact('books'));
    }

    function bookIssued(Request $req){
        $req->validate([
            'name' => 'required',
            'issueto' => 'required',
            'issuedate' => 'required',
            'returndate' => 'required',
        ]);

        $IssueBook = new Issue;
        $IssueBook->name = $req->name;
        $IssueBook->issueto = $req->issueto;
        $IssueBook->issuedate = $req->issuedate;
        $IssueBook->returndate = $req->returndate;
        
        $IssueBook->save();

        $updateStatus = Book::where('name', '=', $req->name)->first();
        $updateStatus->status = "issued";
        $updateStatus->save();

        return redirect('admindashboard');
    }

    function issuedBook(){
        $bookIssued = Issue::all();
        return view('book.issued', compact('bookIssued'));
    }

    function updateStatus($name){
        $book = Book::where('name', '=', $name)->first();
        $book->status = "returned";
        $book->save();
        return redirect('admindashboard');
    }

    function search(){
        $search_text = $_GET['search'];
        $books = Issue::where('issueto', '=', $search_text)->get();        
        
        //$books = Book::where('issueto', '=', $search_text)->get();

        return view('book.search', compact('books'));
    }

    
}

