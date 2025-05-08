<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'pin',
        'role',
    ];

    protected $hidden = [
        'pin',
        'remember_token',
    ];
}
