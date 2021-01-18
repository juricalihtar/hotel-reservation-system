<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_date',
        'check_in_date',
        'check_out_date',
        'adults',
        'children',
        'guest_id',
        'room_id',
        'user_id'
    ];

    public function payments() { return $this->hasMany(Payment::class);}
    public function user() { return $this->belongsTo(User::class);}
    public function room() { return $this->belongsTo(Room::class);}
    public function guest() { return $this->belongsTo(Guest::class);}
    
}
