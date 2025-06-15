<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorites;

class FavoritesController extends Controller
{
    public function index() {
        $favorites = Favorites::orderBy('created_at', 'desc')->get();
        return view('favorites', ["favorites" => $favorites]);
    }

    public function show($id) {
        $favorites = Favorites::orderBy('created_at', 'desc')->get();
        $favorite = Favorites::findOrFail($id);
        $title = "Favorites";
        
        return view('show-note', ["notes" => $favorites, "note" => $favorite, "title" => $title]);
    }
}
