<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method',
        'reservation_id',
        'guest_id'
        
    ];

    public function guest() { return $this->belongsTo(Guest::class);}
    public function reservation() { return $this->belongsTo(Reservation::class);}
    
}
