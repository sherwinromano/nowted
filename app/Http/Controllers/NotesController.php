<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\Favorites;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index() {
        $notes = Notes::orderBy('created_at', 'desc')->get();
        return view('index', ["notes" => $notes]);
    }

    public function show($id) {
        $notes = Notes::orderBy('created_at', 'desc')->get();
        $note = Notes::findOrFail($id);
        $title = "All notes";
        
        return view('show-note', ["notes" => $notes, "note" => $note, "title" => $title]);
    }

    public function create() {
        return view('new-note');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        Notes::create($validated);
        return redirect()->route('notes.index');
    }

    public function destroy($id) {
        $note = Notes::findOrFail($id);
        $note->delete();
        
        return redirect()->route('notes.index');
    }

    public function addToFavorites($id) {
        $note = Notes::findOrFail($id);

        // Insert new value in favorites table
        Favorites::create([
            'title' => $note->title,
            'body' => $note->body,
            'note_id' => $note->id,
        ]); 

        $note->added_favorite = true;
        $note->save();
        
        return redirect()->route('notes.show', $id);
    }
}
