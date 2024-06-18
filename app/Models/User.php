<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use TCG\Voyager\Traits\VoyagerUser;
use TCG\Voyager\Contracts\User as VoyagerUserContract;

class User extends Authenticatable implements VoyagerUserContract
{
    use HasApiTokens, HasFactory, Notifiable, VoyagerUser;

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}


