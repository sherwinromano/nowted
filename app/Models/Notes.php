<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = ['title', 'body'];
    
    public static function getFavorites() {
        return self::where('added_favorite', 1)
            ->where('added_archived', 0)
            ->where('added_trash', 0)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public static function getFavorite($id) {
        return self::where('id', $id)
            ->where('added_favorite', 1)
            ->where('added_archived', 0)
            ->where('added_trash', 0)
            ->firstOrFail();
    }
    /** @use HasFactory<\Database\Factories\NotesFactory> */
    use HasFactory;
}
