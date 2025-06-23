<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\Trashes;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    protected $trashes;
    protected $note_title;

    public function __construct() {
        $this->trashes = Notes::where('added_trash', 1)
                                        ->orderBy('created_at', 'desc')
                                        ->get();
        $this->note_title = "Trash";
    }

    public function index() {
        return view('trash', ["trashes" => $this->trashes, "note_title" => $this->note_title]);
    }

    public function show($note_id) {
        $trash = Trashes::where('note_id', $note_id)->firstOrFail();
        
        return view('show-note', [
            "trashes" => $this->trashes, 
            "trash" => $trash, 
            "note_title" => $this->note_title
        ]);
    }

    public function addToTrash($id = null, $note_id = null) {
        
        if($id !== null) {
            $note = Notes::findOrFail($id);

            Trashes::create([
                'title' => $note->title,
                'body' => $note->body,
                'note_id' => $note->id,
            ]); 

            $note->added_trash = true;
            $note->save();
        } else if ($note_id !== null) {
            $note = Notes::where('id', $note_id)->firstOrFail();

            Trashes::create([
                'title' => $note->title,
                'body' => $note->body,
                'note_id' => $note->id,
            ]); 

            $note->added_trash = true;
            $note->save();
        }
        
        return redirect()->route('notes.index');
    }

    public function recover($note_id) {
        $trash = Trashes::where('note_id', $note_id)->firstOrFail();
        $note = Notes::where('id', $note_id)->firstOrFail();
    
        $note->added_trash = false;
        $trash->delete();
        $note->save();
    
        return redirect()->route('notes.index');
    }

}
