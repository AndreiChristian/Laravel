<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $authors = Author::all();

        return view("author.index", ['authors' => $authors]);
    }

    public function create()
    {

        return view("author.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Author::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);

        return redirect(route("author.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view("author.show");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view("author.edit", ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {

        $first_name = $request->first_name;
        $last_name = $request->last_name;

        $author->first_name = $first_name;
        $author->last_name = $last_name;

        $author->save();

        return redirect(route("author.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect(route("author.index"));
    }
}
