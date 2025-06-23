<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    protected $notes;
    protected $note_title;
    
    public function __construct()
    {
        $this->notes = Notes::where('added_trash', 0)
                              ->where('added_archived', 0)  
                              ->orderBy('created_at', 'desc')
                              ->get();
        $this->note_title = "All notes";
    }

    public function index() {
        return view('index', ["notes" => $this->notes, "note_title" => $this->note_title]);
    }

    public function show($id) {
        $note = Notes::findOrFail($id);

        
        return view('show-note', ["notes" => $this->notes, "note" => $note, "note_title" => $this->note_title]);
    }

    public function create() {
        return view('note-form', ["notes" => $this->notes, "note_title" => $this->note_title]);
    }

    public function edit($id) {
        $note = Notes::findOrFail($id);

        return view('edit-form', [
            "note" => $note, 
            "notes" => $this->notes, 
            "note_title" => $this->note_title,
        ]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|string|',
            'body' => 'required|string',
        ]);

        
        $note = Notes::findOrFail($id);

        $note->title = $validated['title'];
        $note->body = $validated['body'];

        $note->save();

        return redirect()->route('notes.show', $id);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        Notes::create($validated);
        return redirect()->route('notes.index');
    }

    public function destroy($note_id) {
        Notes::where('id', $note_id)->delete();
        
        return redirect()->route('notes.index');
    }
}
