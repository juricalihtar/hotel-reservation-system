<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'city',
        'country'
    ];

    public function payments() { return $this->hasMany(Payments::class);}
    public function reservations() { return $this->hasMany(Reservation::class);}
}
