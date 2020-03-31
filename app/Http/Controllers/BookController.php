<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){
        $books  = Book::get();//talk to DB

        return view('book',compact('books'));
        //die and dump
        // dd($books);
    }
    function show($id){
        //$book=Book::where('id','=',$id)->first();
        $book=Book::find($id);
       
        return view('showBook',[
            'book'=>$book
        ]);
        }

        function create(){
            return view('create');
        }
        
        function store(Request $request){
            
            //add book 
             $book=new Book();
            $book->name=$request->name;
            $book->desc=$request->desc;
            $book->save();
            
            return redirect('books');
         }
    

}
