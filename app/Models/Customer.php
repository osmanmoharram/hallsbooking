<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function occasions()
    {
        return $this->hasMany(Occasion::class);
    }

    public function inspections()
    {
        return $this->hasMany(Inspection::class);
    }
}
