<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writing extends Model
{
    use HasFactory;

    protected $fillable = ['title','subtitle', 'description','big_description','link_video','link_instagram','btn_buy'];

    protected $with = ['images'];
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
