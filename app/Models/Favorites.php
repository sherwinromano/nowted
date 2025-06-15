<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $fillable = ['title', 'body', 'note_id'];
}
