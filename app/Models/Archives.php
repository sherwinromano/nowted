<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archives extends Model
{
    protected $fillable = ['title', 'body', 'note_id'];
}
