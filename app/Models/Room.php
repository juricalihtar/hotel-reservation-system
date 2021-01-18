<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'room_type_id',
        'room_status_id'
        
    ];

    public function room_type() { return $this->belongsTo(Room_type::class);}
    public function room_status() { return $this->belongsTo(Room_status::class);}
    public function reservations() { return $this->hasMany(Reservation::class);}
}
