<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalProject extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description','big_description','link_video','link_instagram'];
    protected $with = ['images'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
