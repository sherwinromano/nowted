<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $fillable = ['title', 'body'];
    
    /** @use HasFactory<\Database\Factories\NotesFactory> */
    use HasFactory;
}
