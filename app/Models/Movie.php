<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{   use SoftDeletes;
    public function artist()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function scopePass($query)
    {
        return $query->where('status', 1)
                     ->where('rating', '>', 5);
    }

}
