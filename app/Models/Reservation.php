<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'resrevation_date',
        'check_in_date',
        'check_out_date',
        'adults',
        'children'
    ];
}
