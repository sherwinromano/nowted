<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\Favorites;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    protected $favorites;
    protected $note_title;

    public function __construct() {
         $this->favorites = Notes::where('added_favorite', 1)
                                    ->where('added_archived', 0)
                                    ->where('added_trash', 0)
                                    ->orderBy('created_at', 'desc')
                                    ->get();
        $this->note_title = "Favorites";
    }


    public function index() {
        return view('favorites', ["favorites" => $this->favorites, "note_title" => $this->note_title]);
    }

    public function show($note_id) {
        $favorite = Favorites::where('note_id', $note_id)->firstOrFail();
        
        return view('show-note', [
            "favorites" => $this->favorites, 
            "favorite" => $favorite, 
            "note_title" => $this->note_title
        ]);
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
