<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle', 'description', 'place_id'];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
