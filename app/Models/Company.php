<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'website',
    ];

    public function installations()
    {
        return $this->hasMany(Installation::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function zones()
    {
        return $this->hasManyThrough(Zone::class, Installation::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}