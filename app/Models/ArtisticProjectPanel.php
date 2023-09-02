<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtisticProjectPanel extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];
    protected $with = ['images'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}