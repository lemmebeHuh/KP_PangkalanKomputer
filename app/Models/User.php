<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
