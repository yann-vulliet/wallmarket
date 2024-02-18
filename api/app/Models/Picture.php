<?php

namespace App\Models;

use App\Models\Place;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Picture extends Model
{
    use HasFactory;
    protected $fillable = ['picture', 'alt_picture', 'place_id', 'article_id'];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
