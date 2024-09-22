<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Publishers;
use App\Models\Categories;

use Illuminate\Http\Request;

class webcontrol extends Controller
{
    public function homePage(){
        $books = Books::all();

        return view('home')->with('books', $books);
    }

    public function publisherPage(){
        $publisher = Publishers::all();
        return view('publisher')->with('publisher', $publisher);
    
    }

    public function publisherDetailPage($id){
        $publisher = Publishers::where('id', $id)->first();

        return view('publisherdetail')->with('publisher', $publisher);
    }

    public function contactPage(){
        return view('contact');
    }

    public function bookdetailPage($id){
        $book = Books::where('id', $id)->first();

        return view('bookdetail')->with('x', $book);
    }

    public function categoryPage($name){
        $cat = Categories::where('name', $name)->first();
        $books = $cat->books;

        if($name=="Comedy") {
            return view('comedy')->with('books', $books);
        }else if($name=="Horror") {
            return view('horror')->with('books', $books);
    }else if($name=="Action"){
        return view('action')->with('books', $books);
    }

}
}