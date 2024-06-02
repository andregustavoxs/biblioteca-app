<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('book.index', [
            'books' => $books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::orderBy('name')->get();
        $publishers = Publisher::orderBy('name')->get();

        return view('book.create', compact('authors', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $input = $request->validated();

        if (!empty($input['cover']) && ($input['cover']->isValid())) {
            $file = $input['cover'];
            $path = $file->store('books');
            $input['cover'] = $path;
        }

        $book = Book::create($input);
//        $book = Book::create($request->all());
        $book->authors()->attach($request->author_id);


        return Redirect::route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::orderBy('name')->get();
        $publishers = Publisher::all();

        return view('book.edit', compact('book', 'authors', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        $input = $request->validated();

        if (!empty($input['cover']) && ($input['cover']->isValid())) {
            $file = $input['cover'];
            $path = $file->store('books');
            $input['cover'] = $path;
        }

        $book->fill($input);
        $book->save();
        $book->authors()->sync($request->author_id);

        return Redirect::route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        Storage::delete($book->cover ?? '');

        return Redirect::route('books.index');
    }

    public function destroyImage(Book $book)
    {
        Storage::delete($book->cover ?? '');
        $book->cover = null;
        $book->save();

        return Redirect::back();
    }


}
