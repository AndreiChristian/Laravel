<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view("publisher.index", ['publishers' => $publishers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("publisher.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $name = $request->name;

        $publisher = Publisher::create([
            'name' => $name
        ]);

        Log::debug($publisher);

        return redirect("/publisher");
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view("publisher.edit", ['publisher' => $publisher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $publisher->name = $request->name;

        $publisher->save();
        return redirect("/publisher");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return back();
    }
}
