<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::with('publisher')->orderBy('name')->get();

        return view('home', compact('books'));
    }
}
