<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function index() {

        $books = Book::all();
        $data = ['books' => $books];
        return view('home', $data);
    }
}
