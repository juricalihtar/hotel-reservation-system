<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_status extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_status_name'
        
    ];
}
