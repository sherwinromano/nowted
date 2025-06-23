<?php

namespace App\Http\Controllers;

use App\Models\Archives;
use App\Models\Notes;
use Illuminate\Http\Request;

class ArchivesController extends Controller
{
    protected $archives;
    protected $note_title;

    public function __construct()
    {
        $this->note_title = "Archived notes";
        $this->archives = Notes::where('added_archived', 1)
                                    ->where('added_trash', 0)
                                    ->orderBy('created_at', 'desc')
                                    ->get();
    }
    
    public function index() {
        return view('archives', ["note_title" => $this->note_title, "archives" => $this->archives]);
    }

    public function show($note_id) {
        $archive = Archives::where('note_id', $note_id)->firstOrFail();
        
        return view('show-note', ["archives" => $this->archives, "archive" => $archive, "note_title" => $this->note_title]);
    }

    public function addToArchives($id) {
        $note = Notes::findOrFail($id);

        // Insert new value in archives table
        Archives::create([
            'title' => $note->title,
            'body' => $note->body,
            'note_id' => $note->id,
        ]); 

        $note->added_archived = true;
        $note->save();
        
        return redirect()->route('notes.index');
    }
}
