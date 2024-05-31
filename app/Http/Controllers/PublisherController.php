<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublisherStoreRequest;
use App\Http\Requests\PublisherUpdateRequest;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::all();

        return view('publisher.index', [
            'publishers' => $publishers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublisherStoreRequest $request)
    {
        $input = $request->validated();

        Publisher::create($input);

        return Redirect::route('publishers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return view('publisher.show', compact('publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('publisher.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublisherUpdateRequest $request, Publisher $publisher)
    {
        $input = $request->validated();

        $publisher->fill($input);
        $publisher->save();

        return Redirect::route('publishers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        return Redirect::route('publishers.index');
    }
}
