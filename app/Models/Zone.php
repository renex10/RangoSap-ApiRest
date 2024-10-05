<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    // Definir la relación inversa con Installation
    public function installation()
    {
        return $this->belongsTo(Installation::class);
    }
}
