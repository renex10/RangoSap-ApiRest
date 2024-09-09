<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'progress'];

    /**
     * Define una relación polimórfica con las imágenes.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
