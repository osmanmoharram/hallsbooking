<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class)->using(OfferOption::class);
    }
}
