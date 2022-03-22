<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function movie()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function scopeTitle($query)
    {
        return $query->where('IN', '(', 'star', 'writer', 'director', ')');
    }
}
