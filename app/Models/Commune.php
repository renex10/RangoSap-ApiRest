<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'region_id'];

    // Si tienes relaciones, puedes definirlas aquí
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
