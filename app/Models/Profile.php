<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'dni', 'company_name', 'business_entity', 'address', 'number', 'commune_id', 'legal_representative', 'corporate_purpose'];

    /**
     * Define una relación polimórfica con las imágenes.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
