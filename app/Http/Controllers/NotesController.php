<?php

namespace App\Http\Controllers;

use App\Models\Notes;
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
        
        return view('note', ["notes" => $notes, "note" => $note]);
    }

    public function create() {
        return view('new-note');
    }
}
