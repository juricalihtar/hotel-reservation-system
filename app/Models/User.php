<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Enums\RoleEnum;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
        
    ];

    /* 
        Definiranje svih one to many veza
    */
    public function role() { return $this->belongsTo(Role::class);}
    public function reservations() { return $this->hasMany(Reservation::class);}
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    

     /* authorization */
    public function isAdmin() { return $this->role_id === RoleEnum::ADMIN; } // RoleEnum::ADMIN je 1
    public function isUser() { return $this->role_id === RoleEnum::USER; } // RoleEnum::USER je 2
    public function isGuest() { return $this->role_id === RoleEnum::GUEST; } // RoleEnum::GUEST je 3


}
