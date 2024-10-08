<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{

    use HasFactory;

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
}
