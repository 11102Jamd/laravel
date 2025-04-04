<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('entries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:entries,title',
            'content' => 'required|string|min:25|max:1000',
        ]);

        $entry = Entry::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => Auth::id() 
        ]);

        return redirect()->route('home')->with('success', 'Entry created!');
    }
}
