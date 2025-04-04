<?php

namespace App\Http\Controllers;

use App\Models\Entry;

class GuestController extends Controller
{
    public function index()
    {
        $entries = Entry::with('user')
            ->orderByDesc('id')->paginate(10);

        return view('welcome', compact('entries'));
    }

    public function show(Entry $entry)
    {
        return view('entries.show', compact('entry'));
    }
}
