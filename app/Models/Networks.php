<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Networks extends Model
{
    protected $table = 'networks';
    protected $fillable = [
        'image',
        'heading',
        'paragraph',
        
    ];
}
