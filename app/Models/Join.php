<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table = 'joins';
    protected $fillable = [
        'name',
        'heading',
        'paragraph',
    ];
}
