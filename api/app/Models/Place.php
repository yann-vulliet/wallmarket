<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle', 'description', 'latitude', 'longitude', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
