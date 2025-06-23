<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trashes extends Model
{
    protected $fillable = ['title', 'body', 'note_id'];
}
