<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stories = Story::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('stories'));
    }

    public function index2()
    {
        $stories = Story::orderBy('created_at', 'desc')->get();
        return view('login', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Story::create([
            'title' => $request->title,
            'text' => $request->text
        ]);
        return redirect(route('story.log'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        //
    }
}
